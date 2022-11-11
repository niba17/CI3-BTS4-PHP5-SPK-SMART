<!-- Begin Page Content -->
<div class="card-body">
  <!-- <?= $key ?> -->
  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue">Atur Kriteria</h1>
  <hr class="sidebar-divider">
  <!-- <?php print_r($semua['kriteria']); ?> -->

  <body>
    <form action="<?= base_url('User/tambah_data/' . $key = 'kriteria'); ?>" method="post">
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <label class="font-weight-bold" for="kriteria">Masukkan kriteria baru</label>
            <input type="text" class="form-control form-control-user" name="kriteria" placeholder="Masukkan kriteria..." required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label class="font-weight-bold" for="cMAX">Masukkan C MAX baru</label>
            <input type="number" class="form-control form-control-user" name="cMAX" placeholder="Masukkan C MAX..." required>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label class="font-weight-bold" for="cMIN">Masukkan C MIN baru</label>
            <input type="number" class="form-control form-control-user" name="cMIN" placeholder="Masukkan C MIN..." required>
          </div>
        </div>

        <div class="col-lg-3">
          <label class="font-weight-bold" for="utility">Utility</label>
          <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect01" name="utility" required>
              <option value="" selected>Pilih Utility...</option>
              <option value="benefit">Benefit</option>
              <option value="cost">Cost</option>
            </select>
          </div>
        </div>

      </div>
      <a class="btn btn-primary" href="<?= base_url('User/index_admin'); ?>"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
      <button type="submit" class="btn btn-primary btn-user" name="ubah">Tambah data alternatif <i class="fa-solid fa-circle-check"></i></button>
    </form>

    <div class="row mt-2">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-primary text-white text-md">
              <tr>
                <th>No</th>
                <th>Kriteria</th>
                <th>C MAX</th>
                <th>C MIN</th>
                <th>Utility</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0;
              foreach ($semua['kriteria'] as $rowD) : ?>
                <tr>
                  <td><?= ++$no; ?></td>
                  <td><?= $rowD['kriteria']; ?></td>
                  <td><?= $rowD['cMAX']; ?></td>
                  <td><?= $rowD['cMIN']; ?></td>
                  <td><?= $rowD['utility']; ?></td>
                  <td class="btn-group" style="vertical-align: baseline;">
                    <a href="<?= base_url('User/hapus_data/') . $key = 'kriteria' . '/' . $rowD['id']; ?>" class="btn btn-sm btn-danger shadow-sm " id="btn-hapus" data-pesan="<?= $rowD['kriteria']; ?>"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>