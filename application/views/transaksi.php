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
                            <h2 class="animated fadeInDown"><span>Tran</span>saksi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section><!-- End Hero -->

<!-- Contact Section -->
<section class="transaksi-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px; margin-bottom: 50px;">

                <center>
                    <table border="1" style="width:1000px;">
                        <tr>
                            <td>No Transaksi</td>
                            <td>Nama Lengkap</td>
                            <td>Kode Buku</td>
                            <td>Judul Buku</td>
                            <td>Harga</td>
                            <td>Alamat Pengiriman</td>
                        </tr>

                        <?php
                        global $i;
                        $i = 1;
                        foreach ($transaksi as $tr) { ?>
                        <tr>
                            <td><?php echo $tr->idTransaksi; ?></td>
                            <td><?php echo $tr->nama ?></td>
                            <td><?php echo $tr->kodeBuku ?></td>
                            <td><?php echo $tr->judul ?></td>
                            <td><?php echo $tr->harga ?></td>
                            <td><?php echo $tr->alamat ?></td>
                            <?php $i++;
                        } ?>
                    </table>
                </center>
            </div>
        </div>
    </div>
</section>