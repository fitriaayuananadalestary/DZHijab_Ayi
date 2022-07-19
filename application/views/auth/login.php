<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?=base_url()?>/template/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <?= $this->session->flashdata('message'); ?>
            <div class="card card-primary">
              <div class="card-header"><h4>Halaman Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('Auth/cek_login'); ?>"  class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" tabindex="1" required autofocus>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                  <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" value="<?= set_value('password'); ?>" name="password" tabindex="2" required>
                   <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
             

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum Punya Akun? <a href="<?= base_url() ?>Auth/registrasi">Registrasi Yuk!</a>
            </div>
            <div class="simple-footer">
              Dz_HijubStore Pekanbaru
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>