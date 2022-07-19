
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?=base_url()?>/template/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>   Registrasi </h4></div>

              <div class="card-body">
              <form class="user" method="POST" action="<?= base_url('auth/registrasi') ?>">

                    <div class="form-group">
                      <label for="nama">Nama Lengkap nya kaka</label>
                      <input id="nama" value="<?= set_value('nama'); ?>" type="text" class="form-control" name="nama">
                      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" value="<?= set_value('email'); ?>" name="email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password Baru</label>
                      <input id="password1" type="password"  value="<?= set_value('password1'); ?>" class="form-control pwstrength" name="password1">
                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Passwordnya Sekali Lagi</label>
                      <input id="password2" type="password" value="<?= set_value('password2'); ?>" class="form-control" name="password2">
                      <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>

                  </div>
                  <center>
                  Udah Punya Akun? <a href="<?=base_url('Auth')?>">Login Disini</a>
                  </center>
                </form>
              </div>
            </div>
            <div class="simple-footer">
               Dz_HijubStore Pekanbaru 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
