<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?= base_url() ?>/template/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
              <?= $this->session->flashdata('message'); ?>
            <form class="user" method="post" action="<?= base_url('auth/indexuser'); ?>">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" value="<?= set_value('email'); ?>" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" value="<?= set_value('password'); ?>" class="control-label">Password</label>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
  
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
              Don't have an account? <a href="<?= base_url('Auth/registrasi')?>">Create One</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>