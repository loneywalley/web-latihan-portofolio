<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/14/books.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown" style="font-family: pacifico;">Log<span>In</span></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><!-- End Hero -->



<section class="login-section section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="contact-area style-two">
          <form name="contact_form" class="default-form contact-form" action="<?php echo site_url('sistem/validasi') ?>" method="post">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <input type="text" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Password" required="">
                </div>

              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group text-center">
                  <button type="submit" class="btn-style-one">Login</button>
                </div>
              </div>
            </div>
          </form>

          <center>
            <a href="<?php echo site_url('sistem/register') ?>">Belum Punya Akun?</a>
          </center>
        </div>
      </div>
    </div>
  </div>
  <!--End single tab content-->
  </div>
  </div>
  </div>
  </div>
</section>