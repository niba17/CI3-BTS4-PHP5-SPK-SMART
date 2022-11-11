<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-dark-blue bg-light-blue topbar static-top shadow">

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <?php if ($this->session->userdata('nama')) : ?>
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="img-profile rounded-circle mr-2" src="<?= base_url('assets/') ?>img/profile/undraw_profile.svg">
            <span class="d-none d-lg-inline text-white medium"><b><?= $topbar_detail->username; ?></b></span>
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a href="<?= base_url('Autentifikasi/index_re_login'); ?>" class="dropdown-item">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Pengaturan Akun
            </a>
            <a class="dropdown-item" href="<?= base_url('Autentifikasi/logout') ?>">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
  <!-- End of Topbar -->