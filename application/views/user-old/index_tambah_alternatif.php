<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue">Tambah Data Alternatif</h1>
  <?= $this->session->flashdata('pesan');
  if (isset($_SESSION['pesan'])) {
    unset($_SESSION['pesan']);
  } ?>
  <hr class="sidebar-divider">

  <body>
    <?= form_open_multipart(base_url('User/tambah_data/' . $key = 'alternatif')); ?>
    <div class="row">
      <div class="col-lg-6">
        <label class="font-weight-bold" for="alternatif">Nama Alternatif</label>
        <input type="text" class="form-control form-control-user mb-3" name="alternatif" placeholder="Masukkan Nama Alternatif" required>
        <label class="font-weight-bold" for="alamat">Alamat</label>
        <input type="text" class="form-control form-control-user mb-3" name="alamat" placeholder="Masukkan Alamat Alternatif">
        <label class="font-weight-bold" for="harga">Harga</label>
        <input type="number" class="form-control form-control-user mb-3" name="harga" placeholder="Masukkan Harga" required>
        <label class="font-weight-bold" for="luas">Luas</label>
        <input type="number" class="form-control form-control-user mb-3" name="luas" placeholder="Masukkan Luas" required>
        <label class="font-weight-bold" for="keramaian">Keramaian</label>
        <input type="number" class="form-control form-control-user mb-3" name="keramaian" placeholder="Masukkan Keramaian" required>
        <label class="font-weight-bold" for="fasilitas">Fasilitas</label>
        <input type="number" class="form-control form-control-user mb-3" name="fasilitas" placeholder="Masukkan Fasilitas" required>
      </div>
      <div class="col-lg-6">
        <label class="font-weight-bold" for="keamanan">Keamanan</label>
        <input type="number" class="form-control form-control-user mb-3" name="keamanan" placeholder="Masukkan Keamanan" required>
        <label class="font-weight-bold" for="kompetitor">Kompetitor</label>
        <input type="number" class="form-control form-control-user mb-3" name="kompetitor" placeholder="Masukkan Kompetitor" required>
        <label class="font-weight-bold" for="perijinan">Perijinan</label>
        <input type="number" class="form-control form-control-user mb-3" name="perijinan" placeholder="Masukkan Perijinan" required>
        <label class="font-weight-bold" for="Latitude">Latitude</label>
        <input type="text" class="form-control form-control-user mb-3" name="lat" placeholder="Masukkan Latitude" required>
        <label class="font-weight-bold" for="Longitude">Longitude</label>
        <input type="text" class="form-control form-control-user mb-3" name="lng" placeholder="Masukkan Longitude" required>
        <label class="font-weight-bold mb-2" for="gambar">Gambar</label>
        <br>
        <input type="file" name="gambar"><br>
      </div>
    </div>
    <!-- <label class="font-weight-bold" for="gambar">Foto Alternatif</label>
      <br>
      <input type="file" size="20" name="gambar"> -->

    <!-- <hr class="sidebar-divider"> -->
    <a class="btn btn-primary mt-0" href="<?= base_url('User/index_admin'); ?>"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary btn-user">Tambah Alternatif <i class="fa-solid fa-circle-plus"></i></button>
    <?= form_close(); ?>
    <!-- <br> -->
</div>
</body>
</div>