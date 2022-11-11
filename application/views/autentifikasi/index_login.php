<body class="login-bg" style="background-color:darkcyan;">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-6">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                    <?= $this->session->flashdata('message');
                    if (isset($_SESSION['message'])) {
                      unset($_SESSION['message']);
                    } ?>
                  </div>
                  <form class="user" method="post" action="<?= base_url('Autentifikasi/index_login'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" autocomplete="off" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" autocomplete="off" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block btn-log">
                      Login
                    </button>
                  </form>
                  <a class="nav-link text-center" href="<?= base_url('User/index'); ?>">
                    <span>Kembali</span></a>
                  <a class="nav-link text-center" href="#" onclick="l_password()">
                    <span>Lupa Password?</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>