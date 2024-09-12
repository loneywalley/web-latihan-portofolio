<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BUYBOOKS.ID</title>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/csss/style.css" rel="stylesheet">
</head>

<body>

    <div class="page-wrapper">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">

                <div class="logo mr-auto">
                    <h1 class="text-light"><span>BUYBOOKS.ID</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="">
                            <?php
                            if ($this->session->userdata('user') == 'anggota' || 'petugas') { ?>
                                <a href="<?php echo base_url(); ?>">Home</a>
                            <?php } else { ?>
                            <?php } ?>
                        </li>
                        <li>
                            <?php
                            if ($this->session->userdata('user') != 'petugas') { ?>
                                <a href="<?php echo site_url('sistem/aboutUs'); ?>">About Us</a>
                            <?php } ?>
                        </li>
                        <li>
                            <?php
                            if ($this->session->userdata('user') != 'petugas') { ?>
                                <a href="<?php echo site_url('sistem/recom'); ?>">Recommended</a>
                            <?php } ?>
                        </li>
                        <li>
                            <?php
                            if ($this->session->userdata('user') == 'anggota' || 'petugas') { ?>
                                <a href="<?php echo site_url('sistem/daftarBuku'); ?>">Books List</a>
                            <?php } else { ?>
                                <a href="">Daftar Buku</a>
                            <?php } ?>
                        </li>
                        <li>
                            <?php
                            if ($this->session->userdata('user') == 'anggota') { ?>
                                <a href="<?php echo site_url('sistem/transaksi'); ?>">Transaksi</a>
                            <?php } ?>
                        </li>
                        <li>
                            <?php
                            if ($this->session->userdata('user') == 'petugas') { ?>
                                <a href="<?php echo site_url('sistem/tambahBuku'); ?>">Add Books</a>
                            <?php } ?>
                        </li>
                        <?php
                        if ($this->session->userdata('user') == 'anggota' || $this->session->userdata('user') == 'petugas') {
                        ?>
                            <li>
                                <a href="<?php echo site_url('sistem/logout'); ?>">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo site_url('sistem/login'); ?>">Login/Register</a>
                            </li>
                        <?php } ?>
                        </li>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->