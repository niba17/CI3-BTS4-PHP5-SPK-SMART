<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue">Tambah Data Alternatif</h1>
  <?= $this->session->flashdata('pesan');
  if (isset($_SESSION['pesan'])) {
    unset($_SESSION['pesan']);
  } ?>
  <hr class="sidebar-divider">


  <?= form_open_multipart(base_url('User/tambah_data/' . $key = 'alternatif')); ?>
  <div class="row mb-4">
    <div class="col-md-6">
      <div class="form-group">
        <label class="font-weight-bold" for="alternatif">Nama Alternatif</label>
        <input type="text" class="form-control form-control-user mb-3" name="alternatif" placeholder="Masukkan Nama Alternatif" required>
      </div>
      <div class="form-group">
        <label class="font-weight-bold" for="alamat">Alamat</label>
        <input type="text" class="form-control form-control-user mb-3" name="alamat" placeholder="Masukkan Alamat Alternatif">
      </div>
      <?php
      if (count($semua['kriteria']) % 2 == 0) {
        $key = 1;
      } else {
        $key = 0;
      }
      ?>
      <?php for ($i = 0; $i < (count($semua['kriteria']) / 2) + $key; $i++) : ?>

        <div class="form-group">
          <label class="font-weight-bold" for="<?= $semua['kriteria'][$i]['kriteria'] ?>"><?= $semua['kriteria'][$i]['kriteria'] ?></label>
          <input type="number" class="form-control form-control-user mb-3" name="<?= $semua['kriteria'][$i]['kriteria'] ?>" min='0' length="3" <?php if ($semua['kriteria'][$i]['kriteria'] != 'harga' && $semua['kriteria'][$i]['kriteria'] != 'luas') {
                                                                                                                                                  echo 'max="100"';
                                                                                                                                                } ?> placeholder="Masukkan Bobot <?= $semua['kriteria'][$i]['kriteria'] ?>" required>
          <span class="line"></span>
        </div>

      <?php endfor; ?>
    </div>
    <div class="col-md-6">
      <?php for ($i = (count($semua['kriteria']) / 2) + 1; $i < count($semua['kriteria']); $i++) : ?>
        <div class="form-group">
          <label class="font-weight-bold" for="<?= $semua['kriteria'][$i]['kriteria'] ?>"><?= $semua['kriteria'][$i]['kriteria'] ?></label>
          <input type="number" class="form-control form-control-user mb-3" name="<?= $semua['kriteria'][$i]['kriteria'] ?>" min='0' length="3" <?php if ($semua['kriteria'][$i]['kriteria'] != 'harga' && $semua['kriteria'][$i]['kriteria'] != 'luas') {
                                                                                                                                                  echo 'max="100"';
                                                                                                                                                } ?> placeholder="Masukkan Bobot <?= $semua['kriteria'][$i]['kriteria'] ?>" required>
          <span class="line"></span>
        </div>
      <?php endfor; ?>
      <div class="form-group">
        <label class="font-weight-bold" for="Latitude">Latitude</label>
        <input type="text" class="form-control form-control-user mb-3" name="lat" placeholder="Masukkan Latitude" required>
      </div>
      <div class="form-group">
        <label class="font-weight-bold" for="Longitude">Longitude</label>
        <input type="text" class="form-control form-control-user mb-3" name="lng" placeholder="Masukkan Longitude" required>
      </div>
      <label class="font-weight-bold mb-2" for="gambar">Gambar</label>
      <br>
      <input type="file" name="gambar"><br>
    </div>
  </div>
  <a class="btn btn-primary mt-0" href="<?= base_url('User/index_admin'); ?>"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
  <button type="submit" class="btn btn-primary btn-user">Tambah Alternatif <i class="fa-solid fa-circle-plus"></i></button>
  <?= form_close(); ?>
  <!-- <br> -->
</div>