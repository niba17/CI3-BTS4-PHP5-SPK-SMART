<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue">Input Bobot Kriteria Baru (MAX Total Bobot = 100)</h1>
  <hr class="sidebar-divider">

  <body>
    <?= form_open_multipart(base_url('User/ubah_data/' . $key = 'alternatif')); ?>
    <div class="row">
      <div class="col-lg-6">
        <?= $this->session->flashdata('pesan');
        if (isset($_SESSION['pesan'])) {
          unset($_SESSION['pesan']);
        } ?>
        <label class="font-weight-bold" for="alternatif">Alternatif</label>
        <input type="text" class="form-control form-control-user mb-3" name="alternatif" value="<?= $detail['alternatif']; ?>" required>
        <label class="font-weight-bold" for="alamat">Alamat</label>
        <input type="text" class="form-control form-control-user mb-3" name="alamat" value="<?= $detail['alamat']; ?>">
        <label class="font-weight-bold" for="harga">Harga</label>
        <input type="number" class="form-control form-control-user mb-3" name="harga" value="<?= $detail['r_harga']; ?>" required>
        <label class="font-weight-bold" for="luas">Luas Bangunan</label>
        <input type="number" class="form-control form-control-user mb-3" name="luas" value="<?= $detail['r_luas']; ?>" required>
        <label class="font-weight-bold" for="keramaian">Keramaian</label>
        <input type="number" class="form-control form-control-user mb-3" name="keramaian" value="<?= $detail['r_keramaian']; ?>" required>
        <label class="font-weight-bold" for="fasilitas">Fasilitas</label>
        <input type="number" class="form-control form-control-user mb-3" name="fasilitas" value="<?= $detail['r_fasilitas']; ?>" required>
        <label class="font-weight-bold" for="perijinan">Latitude</label>
        <input type="text" class="form-control form-control-user mb-3" name="lat" value="<?= $detail['lat']; ?>" required>
        <a class="btn btn-primary" href="<?= base_url('User/index_admin'); ?>"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
        <button type="submit" class="btn btn-primary btn-user mt-2 mb-2" name="ubah">Ubah data alternatif <i class="fa-solid fa-circle-check"></i></button>
      </div>
      <div class="col-lg-6">
        <label class="font-weight-bold" for="perijinan">Longitude</label>
        <input type="text" class="form-control form-control-user mb-3" name="lng" value="<?= $detail['lng']; ?>" required>
        <label class="font-weight-bold" for="keamanan">Keamanan</label>
        <input type="number" class="form-control form-control-user mb-3" name="keamanan" value="<?= $detail['r_keamanan']; ?>" required>
        <label class="font-weight-bold" for="kompetitor">Kompetitor</label>
        <input type="number" class="form-control form-control-user mb-3" name="kompetitor" value="<?= $detail['r_kompetitor']; ?>" required>
        <label class="font-weight-bold" for="perijinan">Perijinan</label>
        <input type="number" class="form-control form-control-user mb-3" name="perijinan" value="<?= $detail['r_perijinan']; ?>" required>
        <input type="hidden" class="form-control form-control-user mb-3" name="id" value="<?= $detail['id']; ?>">
        <input type="hidden" class="form-control form-control-user mb-3" name="key" value="<?= $key; ?>">
        <label class="font-weight-bold" for="gambar">Gambar</label>
        <br>
        <img class="mb-2" src="<?= base_url('assets/img/') . $detail['gambar']; ?>" width="160" height="170">
        <input type="file" name="gambar">
        <input type="hidden" name="gambar" value="<?= $detail['gambar']; ?>">
      </div>
    </div>
    <br>
    <!-- <hr class="sidebar-divider"> -->

    <?= form_close(); ?>
  </body>
</div>