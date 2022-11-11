<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark-blue sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3"><?php if ($this->session->userdata('detail_user')->role == 1) {
                                            echo ('Admin');
                                          } else {
                                            echo ('Member');
                                          } ?></div>
  </div>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php
                      if ($sidebar == "Dashboard") {
                        echo ('active');
                      } ?>">
    <a href=" <?= base_url('User/index_user') ?>" class="nav-link">
      <i class="fas fa-fw fa-tachometer-alt" style="font-size: 22px;"></i>
      <span style="font-size: 20px;">Dashboard</span></a>
  </li>
  <?php if ($this->session->userdata('detail_user')->role == 1) : ?>
    <li class="nav-item <?php
                        if ($sidebar == "Aturan") {
                          echo ('active');
                        } ?>">
      <a class="nav-link" href="<?= base_url('User/index_aturan') ?>">
        <i class="fas fa-fw fa-exclamation" style="font-size: 22px;"></i>
        <span style="font-size: 20px;">Aturan</span>
      </a>
    </li>

    <li class="nav-item <?php
                        if ($sidebar == "Penyakit") {
                          echo ('active');
                        } ?>">
      <a class="nav-link" href="<?= base_url('User/index_penyakit') ?>">
        <i class="fas fa-fw fa-viruses" style="font-size: 22px;"></i>
        <span style="font-size: 20px;">Penyakit</span>
      </a>
    </li>
  <?php endif; ?>
  <li class="nav-item <?php
                      if ($sidebar == "Konsultasi") {
                        echo ('active');
                      } ?>">
    <a class="nav-link" href="<?= base_url('User/index_konsultasi') ?>">
      <i class="fas fa-fw fa-comment-medical" style="font-size: 22px;"></i>
      <span style="font-size: 20px;">Konsultasi</span>
    </a>
  </li>

  <li class="nav-item <?php
                      if ($sidebar == "Riwayat") {
                        echo ('active');
                      } ?>">
    <a class="nav-link" href="<?= base_url('User/index_riwayat_diagnosa') ?>">
      <i class="fas fa-fw fa-notes-medical" style="font-size: 22px;"></i>
      <span style="font-size: 18px;">Riwayat Diagnosa</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item <?php
                      if ($sidebar == "Akun") {
                        echo ('active');
                      } ?>">
    <a class="nav-link" href="<?= base_url('User/pengaturan_akun') ?>">
      <i class="fas fa-users-cog" style="font-size: 22px;"></i>
      <span style="font-size: 19px;">Pengaturan Akun</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('Autentifikasi/logout') ?>" onclick="return confirm('yakin ingin Logout?')">
      <i class="fas fa-fw fa-sign-out-alt mt-5" style="font-size: 22px;"></i>
      <span style="font-size: 18px;">Logout</span>
    </a>
  </li>
</ul>

<!-- End of Sidebar -->