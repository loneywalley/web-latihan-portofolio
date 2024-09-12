<section id="hero">
      <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                  <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                  <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/14/books.jpg);">
                              <div class="carousel-container">
                                    <div class="carousel-content">
                                          <h2 class="animated fadeInDown"><span>Register</span></h2>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
</section><!-- End Hero -->

<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
      <div class="container">
            <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-area style-two">
                              <div class="section-title">
                                    <h3>Create<span> Account</span></h3>
                              </div>
                              <form name="contact_form" class="default-form contact-form" action="<?php echo site_url('sistem/cekKesamaanData'); ?>" method="post">
                                    <div class="row">
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <input type="text" name="nama" placeholder="Nama" required="">
                                                </div>
                                                <div class="form-group">
                                                      <input type="text" name="username" placeholder="Username" required="">
                                                </div>
                                                <div class="form-group">
                                                      <input type="password" name="password" placeholder="Password" required="">
                                                </div>
                                                <div class="form-group">
                                                      <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-group">
                                                      <input type="text" name="alamat" placeholder="Alamat" required="">
                                                </div>

                                          </div>
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group text-center">
                                                      <button type="submit" class="btn-style-one">Register</button><br>
                                                </div>
                                          </div>
                                    </div>
                              </form>

                              <center>
                                    <a href="<?php echo site_url('sistem/login') ?>">Sudah Punya Akun?</a> <br><br>
                              </center>
                        </div>
                  </div>
            </div>
      </div>
</section>
<!-- End Contact Section -->