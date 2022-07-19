<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>This is</h2>
    <p><?= $judul; ?></p>
  </header>

  <div class="row gy-4" data-aos="fade-left">
  <?php $i = 1; ?>
        <?php foreach ($buku as $us) : ?>
    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="box">
        <h3 style="color: #07d5c0;"><?= $us['judul'] ?></h3>
        <div class="price">Rp.<?= $us['harga'] ?></span></div>
        <img src="<?= base_url('template/assets/img/buku/') . $us['gambar']; ?>" class="img-fluid" style="width: 200px;" alt="">
        <ul>
          <li>Stok: <?= $us['stok'] ?></li>
          <li>Kondisi Buku: <?= $us['kondisi'] ?></li>

        </ul>
        <a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="btn-buy">Buy Now</a>
      </div>
    </div>

    <?php endforeach ?>
  </div>

</div>

</section><!-- End Pricing Section -->