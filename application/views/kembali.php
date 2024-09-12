<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/14/books.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animated fadeInDown">BuyBooks<span>.id</span></h2>
              <p class="animated fadeInUp"><u>Cause Books Are Windows To Knowledge</u></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><!-- End Hero -->

<section class="service-overview section">
  <div class="container">
    <?php
    foreach ($transaksi as $tr) { ?>
      <form name="contact_form" class="default-form contact-form" action="<?php echo site_url('sistem/edit/' . $tr->kodeBuku); ?>" method="post">
        <div class="row">
          <div class="contact-area style-two">
            <div class="col-md-12">
              <div class="col-md-12 form-group">
                Nama<br>
                <input type="text" name="nama" value="<?php echo $tr->nama ?>" required="" readonly>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6 form-group">
                Kode Buku<br>
                <input type="text" name="kode" value="<?php echo $tr->kodeBuku ?>" required="" readonly>
              </div>
              <div class="col-md-6 form-group">
                Judul Buku<br>
                <input type="text" name="judul" value="<?php echo $tr->judulBuku ?>" required="" readonly>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6 form-group">
                Tanggal Pinjam<br>
                <input type="text" name="pinjam" value="<?php echo date('d-m-Y', strtotime($tr->tanggalPinjam)) ?>" required="" readonly>
              </div>
              <div class="col-md-6 form-group">
                Tanggal Kembali<br>
                <input type="text" name="kembali" value="<?php echo date('d-m-Y', strtotime($tr->tanggalKembali)) ?>" required="" readonly>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6 form-group">
                Tanggal Pengembalian<br>
                <input type="text" name="pengembalian" required="">
              </div>
              <div class="col-md-6 form-group">
                Denda<br>
                <input type="text" name="denda" required="">
              </div>
            </div>
          </div>
          <center><input type="submit" class="btn btn-info button" value="SUBMIT"></center>
        <?php } ?>
        </div>
      </form>
  </div>
</section>