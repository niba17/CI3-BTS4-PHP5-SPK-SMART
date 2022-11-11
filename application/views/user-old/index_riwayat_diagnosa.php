<!-- Begin Page Content -->
<div class="card-body">
  <h1 class="font-weight-bold text-dark-blue">Data riwayat diagnosa</h1>
  <hr class="sidebar-divider">

  <body>
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="table-primary font-weight-bold text-white">
          <tr>
            <td>No</td>
            <td>Nama Pemilik</td>
            <td>Nama Hewan</td>
            <td>Usia Hewan</td>
            <td>Username</td>
            <td>Tanggal dan Waktu</td>
            <td>Gejala, Kode dan Tingkat keyakinan user</td>
            <td>Penyakit, Kode dan Presentase CF</td>

            <td>Aksi</td>

          </tr>
        </thead>
        <tbody>
          <?php $no = 0;
          foreach ($semua['data_simpan_data_konsultasi_user'] as $d) : if ($this->session->userdata('detail_user')->username == $d->username) : ?>
              <tr>
                <td><?= ++$no; ?></td>
                <td><?= $d->nama_pemilik ?></td>
                <td><?= $d->nama_hewan ?></td>
                <td><?= $d->usia_hewan ?></td>
                <td><?= $d->username ?></td>
                <td class="text-left"><?= $d->tanggal ?></td>
                <td class="text-left"><?= $d->nama_gejala_dan_tk ?></td>
                <td><?= $d->nama_kode_dan_presentase_p ?></td>

                <td>
                  <a href="<?= base_url('user/hapus_data/' . $sidebar . '/' . $d->id); ?>" class="btn btn-sm btn-primary shadow-sm" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                </td>

              </tr>
            <?php endif; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</div>