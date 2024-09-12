<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/14/books.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown"><span>Add</span> Books</h2>
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
          <form name="contact_form" class="default-form contact-form" action="<?php echo site_url('sistem/tambah'); ?>" method="post">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <tr>
                    <td>

                    </td>
                  </tr>
                </div>
                <div class="form-group">
                  <input type="text" name="judul" placeholder="Judul Buku" required="yes">
                </div>
                <div class="form-group">
                  <input type="text" name="penerbit" placeholder="Penerbit" required="">
                </div>
                <div class="form-group">
                  <input type="text" name="pengarang" placeholder="Pengarang" required="yes">
                </div>
                <div class="form-group">
                  <input type="text" name="kategori" placeholder="Kategori" required="yes">
                </div>
                <div class="form-group">
                  <input type="text" name="sinopsis" placeholder="Sinopsis" required="yes">
                </div>
                <div class="form-group">
                  <input type="text" name="gambar" placeholder="Link Gambar" required="y">
                </div>
                <div class="form-group">
                  <input type="text" name="harga" placeholder="Harga Buku" required="">
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group text-center">
                  <button type="submit" class="btn-style-one">Insert</button>
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