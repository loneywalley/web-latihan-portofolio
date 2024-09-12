<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sistemModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function read()
    {
        return;
    }

    public function cekUsername($username)
    {
        $this->load->database();
        $cek = $this->db->query("SELECT username FROM anggota WHERE username='$username'");

        if ($cek->num_rows() > 0) {
            return $cek;
        } else {
            return 0;
        }
    }

    public function simpanData($nama, $username, $password, $email, $alamat)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM anggota");
        $i = $query->num_rows();
        $i += 1;

        if ($i < 10) {
            $this->db->query("INSERT INTO anggota VALUES('A00$i', '$nama', '$username', '$password', '$email', '$alamat')");
        } else {
            $this->db->query("INSERT INTO anggota VALUES('A0$i', '$nama', '$username', '$password', '$email', '$alamat')");
        }
    }

    public function validasiAnggota($username, $password)
    {
        $this->load->database();
        $query = $this->db->query("SELECT username FROM anggota WHERE username = '$username'");

        if ($query->num_rows() > 0) {
            $cek = $this->db->query("SELECT username, password FROM anggota WHERE username = '$username' AND password = '$password'");

            if ($cek->num_rows() > 0) {
                return $cek;
            } else {
                return 0;
            }
        } else {
            return -1;
        }
    }

    public function validasiPetugas($username, $password)
    {
        $this->load->database();
        $query = $this->db->query("SELECT username FROM petugas WHERE username = '$username'");

        if ($query->num_rows() > 0) {
            $cek = $this->db->query("SELECT username, password FROM petugas WHERE username = '$username' AND password = '$password'");
            if ($cek->num_rows() > 0) {
                return $cek;
            } else {
                return 0;
            }
        } else {
            return -1;
        }
    }

    public function cari($keyword)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM buku2 WHERE judulBuku LIKE '%$keyword%'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getBuku()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM buku2 LIMIT 5");
        return $query->result();
    }

    public function infoBuku($judul)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM buku2 WHERE judul= '$judul'");
        return $query->result();
    }

    public function infoAnggota()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM anggota");
        return $query->result();
    }

    public function tambahBuku($id, $judul, $penerbit, $pengarang, $kategori, $sinopsis, $gambar, $harga)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM buku2");
        $i = $query->num_rows();
        $i += 1;

        $query3 = $this->db->query("SELECT judul FROM buku2 WHERE judul = '$judul'");
        if ($query3->num_rows() == 0) {
            if ($i < 10) {
                $this->db->query("INSERT INTO buku2 VALUES (NULL, 'BK00$i', '$judul', '$penerbit', '$pengarang', '$kategori', '$sinopsis', '$gambar', '$harga')");
                return 0;
            } else {
                $this->db->query("INSERT INTO buku2 VALUES (NULL, 'BK0$i', '$judul', '$penerbit', '$pengarang', '$kategori', '$sinopsis', '$gambar', '$harga')");
                return 0;
            }
        } else {
            return 1;
        }
    }

    public function getTransaksi()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM transaksi WHERE nama = '{$_SESSION['username']}'");
        return $query->result();
    }

    public function delete_book($id)
    {
        $this->load->database();
        $this->db->query("DELETE FROM buku2 WHERE id = '$id'");
    }

    // public function EditData($id)
    // {
    //     $this->load->database();
    //     $query = $this->db->query("SELECT * FROM buku2 WHERE id = '$id'")->result_array();
    //     return $query;
    // }

    public function update($id, $judul, $penerbit, $pengarang, $kategori, $sinopsis, $gambar, $harga)
    {
        $this->load->database();
        $this->db->query("UPDATE buku2 SET judul = '$judul', penerbit = '$penerbit', pengarang = '$pengarang', kategori = '$kategori', sinopsis = '$sinopsis', gambar = '$gambar', harga = '$harga' WHERE id = '$id'");
    }

    public function buy($idTransaksi, $nama, $kb, $judul, $harga)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM transaksi");
        $i = $query->num_rows();
        $i += 1;

        $query3 = $this->db->query("SELECT judul FROM transaksi WHERE judul = '$judul'");
        if ($query3->num_rows() == 0) {
            if ($i < 10) {
                $this->db->query("INSERT INTO transaksi VALUES (NULL, '$nama','$kb','$judul','$harga','')");
                return 0;
            } else {
                $this->db->query("INSERT INTO transaski VALUES (NULL, '$nama','$kb','$judul','$harga','')");
                return 0;
            }
        } else {
            return 1;
        }









        //$this->load->database();
        //$this->db->query("INSERT INTO transaksi VALUES(NULL, '$nama','$kb','$judul','$harga','')");
    }
}