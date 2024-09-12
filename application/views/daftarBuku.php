<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/14/books.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animated fadeInDown"><span>Books</span> List</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<?php
if ($this->session->userdata('user') == 'anggota') { ?>
<section id="specials" class="specials">
    <div class="container">
        <div class="section-title">
            <h2><span>Books List</span></h2>
        </div>
        <div class="row">
            <?php
                if ($buku != null) {
                    foreach ($buku as $bk) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="<?php echo $bk->gambar; ?>" style="width: 130px" alt="buku"></div>
                    <div class="member-info">
                        <h4 class="title"><a
                                href="<?php echo site_url('sistem/informasiBuku1/' . $bk->judul); ?>"><?php echo $bk->judul; ?></a>
                        </h4>
                        <h6>Pengarang : <?php echo $bk->pengarang; ?></h6>
                        <form method="post" action="<?php echo site_url('sistem/beli_buku/'); ?>">
                            <input type="hidden" name="kode" value="<?php echo $bk->kodeBuku; ?>" method="post">
                            <input type="hidden" name="judul" value="<?php echo $bk->judul; ?>" method="post">
                            <input type="hidden" name="harga" value="<?php echo $bk->harga; ?>" method="post">
                            <button type="submit" class="btn btn-info btn-sm">Beli</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php }
                } else { ?>
            <center>
                <h5>Stok Buku Kosong</h5>
            </center>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php
if ($this->session->userdata('user') == 'petugas') { ?>
<section id="specials" class="specials">
    <div class="container">
        <div class="section-title">
            <h2><span>Books List</span></h2>
        </div>
        <div class="row">
            <?php
                if ($buku != null) {
                    foreach ($buku as $bk) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="<?php echo $bk->gambar; ?>" style="width: 130px" alt="buku"></div>
                    <div class="member-info">
                        <h4 class="title"><a
                                href="<?php echo site_url('sistem/informasiBuku1/' . $bk->judul); ?>"><?php echo $bk->judul; ?></a>
                        </h4>
                        <h6>Pengarang : <?php echo $bk->pengarang; ?></h6>
                        <form method="post" action="<?php echo site_url('sistem/beli_buku/'); ?>">
                            <input type="hidden" name="kode" value="<?php echo $bk->kodeBuku; ?>" method="post">
                            <input type="hidden" name="judul" value="<?php echo $bk->judul; ?>" method="post">
                            <input type="hidden" name="harga" value="<?php echo $bk->harga; ?>" method="post">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo site_url('sistem/edit/' . $bk->id); ?>">Edit</a>
                                <a class="btn btn-danger btn-sm"
                                    href="<?php echo site_url('sistem/delete/' . $bk->id); ?>">Hapus</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php }
                } else { ?>
            <center>
                <h5>Tidak Ada Buku Baru Di Dalam List, Silahkan Menambahkan Buku Baru</h5>
            </center>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<?php
if ($this->session->userdata('user') == NULL) { ?>
<section id="specials" class="specials">
    <div class="container">
        <div class="section-title">
            <h2><span>Books List</span></h2>
        </div>
        <div class="row">
            <?php
                if ($buku != null) {
                    foreach ($buku as $bk) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="member">
                    <div class="pic"><img src="<?php echo $bk->gambar; ?>" style="width: 130px" alt="buku"></div>
                    <div class="member-info">
                        <h4 class="title"><a
                                href="<?php echo site_url('sistem/informasiBuku1/' . $bk->judul); ?>"><?php echo $bk->judul; ?></a>
                        </h4>
                        <h6>Pengarang : <?php echo $bk->pengarang; ?></h6>
                        <form method="post" action="<?php echo site_url('sistem/beli_buku/'); ?>">
                            <input type="hidden" name="kode" value="<?php echo $bk->kodeBuku; ?>" method="post">
                            <input type="hidden" name="judul" value="<?php echo $bk->judul; ?>" method="post">
                            <input type="hidden" name="harga" value="<?php echo $bk->harga; ?>" method="post">
                        </form>
                    </div>
                </div>
            </div>
            <?php }
                } else { ?>
            <center>
                <h5>Tidak Ada Buku Baru Di Dalam List, Silahkan Menambahkan Buku Baru</h5>
            </center>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>