<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sistem extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('sistemModel');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->helper('url');
		$data = $this->buku();
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	public function dataAnggota()
	{
		$this->load->helper('url');
		$data = $this->infoAnggota();
		$this->load->view('templates/header');
		$this->load->view('dataAnggota', $data);
		$this->load->view('templates/footer');
	}

	public function aboutUs()
	{
		$this->load->helper('url');
		$data = $this->buku();
		$this->load->view('templates/header');
		$this->load->view('aboutUs', $data);
		$this->load->view('templates/footer');
	}

	public function daftarBuku()
	{
		$this->load->helper('url');
		$data = $this->buku();
		$this->load->view('templates/header');
		$this->load->view('daftarBuku', $data);
		$this->load->view('templates/footer');
	}

	public function recom()
	{
		$this->load->helper('url');
		$data = $this->buku();
		$this->load->view('templates/header');
		$this->load->view('recom', $data);
		$this->load->view('templates/footer');
	}

	public function transaksi()
	{
		$this->load->helper('url');
		$data = $this->getTransaksi();
		$this->load->view('templates/header');
		$this->load->view('transaksi', $data);
		$this->load->view('templates/footer');
	}

	public function kembali($kodeBuku)
	{
		$this->load->helper('url');
		$data['transaksi'] = $this->sistemModel->kembali($kodeBuku);
		$this->load->view('templates/header');
		$this->load->view('kembali', $data);
		$this->load->view('templates/footer');
	}

	public function tambahBuku()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('tambahBuku');
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('register');
		$this->load->view('templates/footer');
	}

	public function informasiBuku1($judul)
	{
		$this->load->helper('url');
		$judul2 = str_replace('%20', ' ', $judul);
		$data = $this->infoBuku($judul2);
		$this->load->view('templates/header');
		$this->load->view('informasiBuku1', $data);
		$this->load->view('templates/footer');
	}

	public function cekKesamaanData()
	{
		$this->load->helper('cookie');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');

		$cek2 = $this->sistemModel->cekUsername($username);

		if ($cek2 != null) {
			echo "<script>alert('Username Telah Digunakan'); 
							history.go(-1);</script>";
		} else {
			$cek3 = $this->cekPassword($password);

			if ($cek3 == 1) {
				echo "<script>alert('Password Tidak Valid'); 
							history.go(-1);</script>";
			} else {
				$this->sistemModel->simpanData($nama, $username, $password, $email, $alamat);
				redirect(site_url('sistem/login'), 'refresh');
			}
		}
	}

	public function cekPassword($password)
	{
		if (strlen($password) < 5) {
			return 1;
		}
	}

	public function validasi()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hasil1 = $this->sistemModel->validasiAnggota($username, $password);
		$hasil2 = $this->sistemModel->validasiPetugas($username, $password);

		if ($hasil1 < 0 && $hasil2 < 0) {
			echo "<script>alert('Username dan Password Anda Belum Terdaftar, Silahkan Melakukan Pendaftaran Terlebih Dahulu'); </script>";
			redirect(site_url('sistem/register'));
		} else if ($hasil1 > 0) {
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('user', 'anggota');
			redirect(base_url());
		} else if ($hasil2 > 0) {
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('user', 'petugas');
			redirect(base_url());
		} else {
			echo "<script>alert('Username atau Password Anda Salah'); 
				history.go(-1);</script>";
		}
	}

	public function tambah()
	{
		$kategori = $this->input->post('kategori');
		$username = $this->session->userdata('username');
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$pengarang = $this->input->post('pengarang');
		$sinopsis = $this->input->post('sinopsis');
		$gambar = $this->input->post('gambar');
		$harga = $this->input->post('harga');

		$hasil = $this->sistemModel->tambahBuku($id, $judul, $penerbit, $pengarang, $kategori, $sinopsis, $gambar, $harga);
		if ($hasil == 0) {
			echo "<script>alert('Buku Berhasil Dimasukkan');</script>";
			redirect(site_url('sistem/tambahBuku'));
		} else {
			echo "<script>alert('Buku Telah Dimasukkan'); 
				history.go(-1);</script>";
		}
	}

	public function buku()
	{
		$data['buku'] = $this->sistemModel->getBuku();
		return $data;
	}

	public function infoBuku($judul)
	{
		$data['buku'] = $this->sistemModel->infoBuku($judul);
		return $data;
	}

	public function infoAnggota()
	{
		$data['anggota'] = $this->sistemModel->infoAnggota();
		return $data;
	}

	public function getTransaksi()
	{
		$data['transaksi'] = $this->sistemModel->getTransaksi();
		return $data;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function delete($id)
	{
		$this->load->helper('url');
		$this->load->model('sistemModel');
		$this->sistemModel->delete_book($id);
		echo "<script>alert('Buku Telah Dihapus');history.go(-1);</script>";
	}

	public function edit($id)
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$data = array('id' => $id);
		$this->load->view('updateBuku', $data);
		$this->load->view('templates/footer');
	}

	public function edit_data()
	{
		$this->load->helper('url');
		$this->load->model('sistemModel');
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$pengarang = $this->input->post('pengarang');
		$sinopsis = $this->input->post('sinopsis');
		$gambar = $this->input->post('gambar');
		$harga = $this->input->post('harga');
		$this->sistemModel->update($id, $judul, $penerbit, $pengarang, $kategori, $sinopsis, $gambar, $harga);
		echo "<script>alert('Buku Telah Diupdate');</script>";
		redirect(base_url(), 'refresh');
	}

	public function beli()
	{
		$this->load->helper('url');
		$this->load->view('templates/header');
		$data = $this->buku();
		$this->load->view('daftarBuku', $data);
		$this->load->view('templates/footer');
	}

	public function beli_buku()
	{
		$this->load->helper('url');
		$this->load->model('sistemModel');
		$nama = $this->session->userdata('username');
		$idTransaksi = $this->input->post('idTransaksi');
		$kb = $this->input->post('kode');
		$judul = $this->input->post('judul');
		$harga = $this->input->post('harga');
		$this->sistemModel->buy($idTransaksi, $nama, $kb, $judul, $harga);
		echo "<script>alert('Buku Berhasil Dibeli');history.go(-1)</script>";
	}
}