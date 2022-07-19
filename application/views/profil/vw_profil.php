<!-- ======= Team Section ======= -->
<section id="team" class="team">
<p></p>
<div class="container" data-aos="fade-up">
  <header class="section-header">
          <p><?= $judul; ?></p>
        </header>

  <div class="row gy-4">

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <div class="member-img">
          <img src="<?= base_url('/template/assets/img/profil/') . $user['gambar']; ?>" class="img-fluid">

        </div>
        <div class="member-info">
          <h4><?= $user['nama']; ?></h4>
          <span><?= $user['email']; ?></span>
          <p>anggota sejak <?= date('d F Y', $user['date_created']); ?></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>