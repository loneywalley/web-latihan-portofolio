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
                            <h2 class="animated fadeInDown"><span>BUY</span>BOOKS.ID</h2>
                            <br>
                            <p class="animated fadeInUp">"Books are the carriers of civilization. Without books, history
                                is silent, literature dumb, science crippled, thought and speculation at a standstill.
                                They are engines of change, windows on the world, lighthouses erected in the sea of
                                time."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<!-- Our Story -->
<?php
if ($this->session->userdata('user') == 'anggota') { ?>
<section id="specials" class="specials">
    <div class="container">
        <?php foreach ($buku as $bk) {  ?>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <center><img src="<?php echo $bk->gambar; ?>" style="width: 200px" alt="story"></center>
                </div>
                <div class="col-md-9">
                    <div class="story-content">
                        <h2><?php echo $bk->judul; ?></h2>
                        <h6>Kode Buku : </h6>
                        <p><?php echo $bk->kodeBuku; ?></p>
                        <h6>Kategori : </h6>
                        <p><?php echo $bk->kategori; ?></p>
                        <h6>Pengarang : </h6>
                        <p><?php echo $bk->pengarang; ?></p>
                        <h6>Penerbit : </h6>
                        <p><?php echo $bk->penerbit; ?></p>
                        <h6>Harga : </h6>
                        <p><?php echo $bk->harga; ?></p>
                        <h6>Sinopsis : </h6>
                        <p><?php echo $bk->sinopsis; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <center>
            <form method="POST" action="<?php
                                      if ($this->session->userdata('user') == 'anggota') {
                                        echo site_url('sistem/transaksi/' . $bk->kodeBuku);
                                      } ?>">
                <input type="submit" class="btn btn-info" name="beli" value="BUY">
            </form>
        </center>
        <?php } ?>
    </div>
</section>
<?php } ?>


<?php
if ($this->session->userdata('user') == 'petugas') { ?>
<section id="specials" class="specials">
    <div class="container">
        <?php foreach ($buku as $bk) {  ?>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <center><img src="<?php echo $bk->gambar; ?>" style="width: 200px" alt="story"></center>
                </div>
                <div class="col-md-9">
                    <div class="story-content">
                        <h2><?php echo $bk->judul; ?></h2>
                        <h6>Kode Buku : </h6>
                        <p><?php echo $bk->kodeBuku; ?></p>
                        <h6>Kategori : </h6>
                        <p><?php echo $bk->kategori; ?></p>
                        <h6>Pengarang : </h6>
                        <p><?php echo $bk->pengarang; ?></p>
                        <h6>Penerbit : </h6>
                        <p><?php echo $bk->penerbit; ?></p>
                        <h6>Harga : </h6>
                        <p><?php echo $bk->harga; ?></p>
                        <h6>Sinopsis : </h6>
                        <p><?php echo $bk->sinopsis; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <center>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary btn-sm" href="<?php echo site_url('sistem/edit/' . $bk->id); ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo site_url('sistem/delete/' . $bk->id); ?>">Hapus</a>
            </div>
        </center>
        <?php } ?>
    </div>
</section>
<?php } ?>

<?php
if ($this->session->userdata('user') == null) { ?>
<section id="specials" class="specials">
    <div class="container">
        <?php foreach ($buku as $bk) {  ?>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <center><img src="<?php echo $bk->gambar; ?>" style="width: 200px" alt="story"></center>
                </div>
                <div class="col-md-9">
                    <div class="story-content">
                        <h2><?php echo $bk->judul; ?></h2>
                        <h6>Kode Buku : </h6>
                        <p><?php echo $bk->kodeBuku; ?></p>
                        <h6>Kategori : </h6>
                        <p><?php echo $bk->kategori; ?></p>
                        <h6>Pengarang : </h6>
                        <p><?php echo $bk->pengarang; ?></p>
                        <h6>Penerbit : </h6>
                        <p><?php echo $bk->penerbit; ?></p>
                        <h6>Harga : </h6>
                        <p><?php echo $bk->harga; ?></p>
                        <h6>Sinopsis : </h6>
                        <p><?php echo $bk->sinopsis; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>