<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue">Input Bobot Kriteria Baru (MAX Total Bobot = 100)</h1>
  <hr class="sidebar-divider">

  <body>
    <?= form_open_multipart(base_url('User/ubah_data_alternatif/' . 'alternatif' . '/' . $detail_alternatif['id'])); ?>
    <div class="row mb-4">
      <div class="col-md-6">
        <div class="form-group">
          <label class="font-weight-bold" for="alternatif">Nama Alternatif</label>
          <input type="text" class="form-control form-control-user mb-3" name="alternatif" value="<?= $detail_alternatif['alternatif'] ?>" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="alamat">Alamat</label>
          <input type="text" class="form-control form-control-user mb-3" name="alamat" value="<?= $detail_alternatif['alamat'] ?>">
        </div>
        <?php if (count($semua['kriteria']) % 2 == 0) {
          $key = 1;
        } else {
          $key = 0;
        }
        ?>
        <?php for ($i = 0; $i < (count($semua['kriteria']) / 2) + $key; $i++) : ?>
          <div class="form-group">
            <label class="font-weight-bold" for="harga"><?= $semua['kriteria'][$i]['kriteria'] ?></label>
            <input type="number" class="form-control form-control-user mb-3" name="<?= $semua['kriteria'][$i]['kriteria'] ?>" min='0' length="3" <?php if ($semua['kriteria'][$i]['kriteria'] != 'harga' && $semua['kriteria'][$i]['kriteria'] != 'luas') {
                                                                                                                                                    echo 'max="100"';
                                                                                                                                                  } ?> value="<?= $detail_bobot_kriteria['bobot_' . $semua['kriteria'][$i]['kriteria']] ?>" required>
            <span class="line"></span>
          </div>
        <?php endfor; ?>
      </div>
      <div class="col-md-6">
        <?php for ($i = (count($semua['kriteria']) / 2) + 1; $i < count($semua['kriteria']); $i++) : ?>
          <div class="form-group">
            <label class="font-weight-bold" for="harga"><?= $semua['kriteria'][$i]['kriteria'] ?></label>
            <input type="number" class="form-control form-control-user mb-3" name="<?= $semua['kriteria'][$i]['kriteria'] ?>" min='0' length="3" <?php if ($semua['kriteria'][$i]['kriteria'] != 'harga' && $semua['kriteria'][$i]['kriteria'] != 'luas') {
                                                                                                                                                    echo 'max="100"';
                                                                                                                                                  } ?> value="<?= $detail_bobot_kriteria['bobot_' . $semua['kriteria'][$i]['kriteria']] ?>" required>
            <span class="line"></span>
          </div>
        <?php endfor; ?>
        <div class="form-group">
          <label class="font-weight-bold" for="Latitude">Latitude</label>
          <input type="text" class="form-control form-control-user mb-3" name="lat" value="<?= $detail_alternatif['lat'] ?>" required>
        </div>
        <div class="form-group">
          <label class="font-weight-bold" for="Longitude">Longitude</label>
          <input type="text" class="form-control form-control-user mb-3" name="lng" value="<?= $detail_alternatif['lng'] ?>" required>
        </div>
        <label class="font-weight-bold mb-2" for="gambar">Gambar</label>
        <img class="mb-1" src="<?= base_url('assets/img/' . $detail_alternatif['gambar']) ?>" alt="<?= $detail_alternatif['gambar'] ?>" style="width:200px;">
        <input type="file" name="gambar"><br>
      </div>
    </div>
    <hr>
    <a class="btn btn-primary mt-0" href="<?= base_url('User/index_admin'); ?>"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-primary btn-user">Ubah Alternatif <i class="fa-solid fa-circle-plus"></i></button>
    <?= form_close(); ?>
  </body>
</div>