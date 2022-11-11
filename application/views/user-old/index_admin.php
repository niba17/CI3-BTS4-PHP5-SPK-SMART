<!-- Begin Page Content -->
<div class="card-body">
  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue text-center">Daftar Lokasi</h1>

  <div data-flash="<?= $this->session->flashdata('pesan') ?>" id="flash"></div>
  <a class="btn btn-primary" href="<?= base_url('Autentifikasi/logout'); ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  <a href="<?= base_url('User/index_tambah_data/' . $key = 'alternatif'); ?>" class="btn btn-md btn-primary shadow-sm">Tambahkan Alternatif <i class="fa-solid fa-circle-plus"></i></a>
  <hr class="sidebar-divider">

  <body>
    <style>
      th {
        font-weight: lighter;
        border: 0;
        border-bottom: 0;
      }

      th:nth-child(1) {
        border-bottom-left-radius: 1.5rem;
        border-top-left-radius: 1.5rem;
        /* border: 0; */
        text-align: center;
        line-height: 1rem;
        /* border-radius: 5rem; */
      }

      th:nth-last-child(1) {
        border-bottom-right-radius: 1.5rem;
        border-top-right-radius: 1.5rem;
      }

      .table thead th {
        vertical-align: middle;
        border-bottom: 0;
      }

      .table tbody>tr>td {
        border-top: 0;
        /* margin-top: 30px; */
      }

      .table tbody>tr {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(58 59 69 / 15%) !important;
        padding-top: 30em;
      }
    </style>
    <div class="table-responsive">
      <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="table-primary text-white text-md">
          <tr>
            <th>No</th>
            <th>Alternatif</th>
            <th>B Harga</th>
            <th>B Luas</th>
            <th>B Keramaian</th>
            <!-- <th>B Fasilitas</th>
            <th>B Keamanan</th>
            <th>B Kompetitor</th>
            <th>B Perijinan</th> -->
            <!-- <th>Lat</th>
            <th>Lng</th>
            <th style="width:100px;">Gambar</th> -->
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;
          foreach ($semua['data_alternatif'] as $d) : ?>
            <tr>
              <td><?= ++$no; ?></td>
              <td><?= $d['alternatif']; ?></td>
              <td><?= $d['r_harga']; ?></td>
              <td><?= $d['r_luas']; ?></td>
              <td><?= $d['r_keramaian']; ?></td>
              <!-- <td><?= $d['r_fasilitas']; ?></td>
              <td><?= $d['r_keamanan']; ?></td>
              <td><?= $d['r_kompetitor']; ?></td>
              <td><?= $d['r_perijinan']; ?></td> -->
              <!-- <td><?= $d['lat']; ?></td>
              <td><?= $d['lng']; ?></td>
              <td style="max-height:100px;">
                <img class="img-fluid" src="<?= base_url('assets/img/') . $d['gambar']; ?>">
              </td> -->
              <td class="btn-group" style="vertical-align: baseline;">
                <a href="#modal-default<?= $d['id'] ?>" class="btn btn-sm btn-success " data-toggle="modal"><i class="fas fa-eye"></i></a>
                <a href=" <?= base_url('User/index_ubah_data/') . $key = 'alternatif' . '/' . $d['id']; ?>" class="btn btn-sm btn-primary shadow-sm " id="btn-edit" data-pesan="<?= $d['alternatif']; ?>"> <i class="fas fa-edit"></i></a>
                <a href="<?= base_url('User/hapus_data/') . $key = 'alternatif' . '/' . $d['id']; ?>" class="btn btn-sm btn-danger shadow-sm " id="btn-hapus" data-pesan="<?= $d['alternatif']; ?>"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php foreach ($semua['data_alternatif'] as $d) : ?>
      <div class="modal fade" id="modal-default<?= $d['id'] ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Alternatif</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <!-- <div class="col-md-6">
                  <img class="img-fluid" src="<?= base_url('assets/img/') . $d['gambar']; ?>">
                </div> -->
                <div class="col-md-12">
                  <div class="col-md-12 justify-content-center">
                    <img class="img-fluid" src="<?= base_url('assets/img/') . $d['gambar']; ?>" style="width:1000px; height:700px;">
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead> </thead>
                      <tbody>
                        <tr>
                          <td> Alternatif : <b><?= $d['alternatif']; ?></b> </td>
                          <td> Bobot Harga : <b><?= $d['r_harga']; ?></b></td>
                        </tr>
                        <tr>
                          <td>Bobot luas : <b><?= $d['r_luas']; ?></b> </td>
                          <td>Bobot keramaian : <b><?= $d['r_keramaian']; ?></b></td>
                        </tr>
                        <tr>
                          <td>Bobot fasilitas : <b><?= $d['r_fasilitas']; ?></b></td>
                          <td>Bobot keamanan :<b><?= $d['r_keamanan']; ?></b> </td>
                        </tr>
                        <tr>
                          <td>Bobot kompetitor : <b><?= $d['r_kompetitor']; ?></b></td>
                          <td>Bobot perijinan : <b> <?= $d['r_perijinan']; ?></b></td>
                        </tr>
                        <tr>
                          <td>lat : <b><?= $d['lat']; ?></b></td>
                          <td>lng : <b><?= $d['lng']; ?></b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </body>
</div>