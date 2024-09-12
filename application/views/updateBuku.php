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
                            <h2 class="animated fadeInDown"><span>Edit</span> Books</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section><!-- End Hero -->

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <form name="contact_form" class="default-form contact-form"
                        action="<?php echo site_url('sistem/edit_data'); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div class="row">
                            <?php
              $connect = mysqli_connect("localhost", "root", "bramasta09", "bramasta012");
              $q = mysqli_query($connect, "SELECT * FROM buku2 WHERE id = '$id'");
              $data = mysqli_fetch_array($q);
              ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="judul" placeholder="Judul Buku"
                                        value="<?php echo $data['judul']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="penerbit" placeholder="Penerbit"
                                        value="<?php echo $data['penerbit']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pengarang" placeholder="Pengarang"
                                        value="<?php echo $data['pengarang']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kategori" placeholder="Kategori"
                                        value="<?php echo $data['kategori']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sinopsis" placeholder="Sinopsis"
                                        value="<?php echo $data['sinopsis']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="gambar" placeholder="Link Gambar"
                                        value="<?php echo $data['gambar']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="harga" placeholder="Harga Buku"
                                        value="<?php echo $data['harga']; ?>">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn-style-one">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>