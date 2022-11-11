<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue">Input Bobot Kriteria Baru (MAX Total Bobot = 100)</h1>
  <hr class="sidebar-divider">

  <body>
    <form action="<?= base_url('User/ubah_data'); ?>" method="post">
      <div class="row">
        <div class="col-lg-6">
          <?= $this->session->flashdata('pesan');
          if (isset($_SESSION['pesan'])) {
            unset($_SESSION['pesan']);
          } ?>
          <label class="font-weight-bold" for="alternatif">Alternatif</label>
          <input type="text" class="form-control form-control-user mb-3" name="alternatif" value="<?= $detail['alternatif']; ?>" required>
          <label class="font-weight-bold" for="harga">Harga</label>
          <input type="number" class="form-control form-control-user mb-3" name="harga" value="<?= $detail['r_harga']; ?>" required>
          <label class="font-weight-bold" for="luas">Luas Bangunan</label>
          <input type="number" class="form-control form-control-user mb-3" name="luas" value="<?= $detail['r_luas']; ?>" required>
          <label class="font-weight-bold" for="keramaian">Keramaian</label>
          <input type="number" class="form-control form-control-user mb-3" name="keramaian" value="<?= $detail['r_keramaian']; ?>" required>
          <label class="font-weight-bold" for="fasilitas">Fasilitas</label>
          <input type="number" class="form-control form-control-user mb-3" name="fasilitas" value="<?= $detail['r_fasilitas']; ?>" required>
          <label class="font-weight-bold" for="keamanan">Keamanan</label>
          <input type="number" class="form-control form-control-user mb-3" name="keamanan" value="<?= $detail['r_keamanan']; ?>" required>
          <label class="font-weight-bold" for="kompetitor">Kompetitor</label>
          <input type="number" class="form-control form-control-user mb-3" name="kompetitor" value="<?= $detail['r_kompetitor']; ?>" required>
          <label class="font-weight-bold" for="perijinan">Perijinan</label>
          <input type="number" class="form-control form-control-user mb-2" name="perijinan" value="<?= $detail['r_perijinan']; ?>" required>
          <label class="font-weight-bold" for="perijinan">Latitude</label>
          <input type="text" class="form-control form-control-user mb-2" name="lat" value="<?= $detail['lat']; ?>" required>
          <label class="font-weight-bold" for="perijinan">Longitude</label>
          <input type="text" class="form-control form-control-user mb-2" name="lng" value="<?= $detail['lng']; ?>" required>
          <input type="hidden" class="form-control form-control-user mb-2" name="id" value="<?= $detail['id']; ?>">
          <input type="hidden" class="form-control form-control-user mb-2" name="key" value="<?= $key; ?>">
          <button type="submit" class="btn btn-primary btn-user mt-3" name="ubah">Ubah</button>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <hr class="sidebar-divider">
          <a class="btn btn-primary" href="<?= base_url('User/index_admin'); ?>"><i class="far fa-hand-point-left" style="font-size: 25px;"></i> Kembali</a>
        </div>
      </div>
    </form>
  </body>
</div>