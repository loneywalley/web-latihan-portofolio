<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/14/books.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animated fadeInDown"><span>BUY</span>BOOKS.ID</h2>
                            <br>
                            <p class="animated fadeInUp">"Books are the carriers of civilization. Without books, history is silent, literature dumb, science crippled, thought and speculation at a standstill. They are engines of change, windows on the world, lighthouses erected in the sea of time."</p>
                            <div>
                                <?php
                                if ($this->session->userdata('user') != 'petugas') { ?>
                                    <a href="<?php echo site_url('sistem/daftarBuku'); ?>" class="btn-menu animated fadeInUp scrollto">Books List</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background: url(https://psmag.com/.image/t_share/MTQ5NjM2MTg5NzU2ODYwMjE4/library.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animated fadeInDown"><span>BUY</span>BOOKS.ID</h2>
                            <p class="animated fadeInUp">"Buku adalah jendela dunia dimana kita bisa melihat isi dunia tanpa melakukan perjalanan, hanya cukup membaca sebuah halaman."</p>
                        </div>
                    </div>
                </div>


                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
</section><!-- End Hero -->

<?php
if ($this->session->userdata('user') == 'user') {
?>

    <!--about section-->
    <section id="specials" class="feature-section section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="image-content">
                        <div class="section-title text-center" id="about">
                            <h3>About
                                <span>Us</span>
                            </h3>
                            <p>BUYBOOKS.ID merupakan sebuah platform yang berfungsi sebagai tempat pembelian berbagai jenis buku. Mulai dari buku cerita anak, buku fiksi, buku ilmiah, novel hingga buku ilmu pengetahuan.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php } ?>

<?php
if ($this->session->userdata('user') == 'petugas') {
?>
    <!--book list section-->
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
                                    <h4 class="title"><a href="<?php echo site_url('sistem/informasiBuku1/' . $bk->judul); ?>"><?php echo $bk->judul; ?></a></h4>
                                    <h6>Pengarang : <?php echo $bk->pengarang; ?></h6>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary btn-sm" href="<?php echo site_url('sistem/edit/' . $bk->id); ?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="<?php echo site_url('sistem/delete/' . $bk->id); ?>">Hapus</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <center>
                        <h5>Tidak Ada Buku Di Dalam List</h5>
                    </center>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<!--End about section-->