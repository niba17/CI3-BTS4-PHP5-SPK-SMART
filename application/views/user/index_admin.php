<!-- Begin Page Content -->

<div class="card-body">
  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue text-center">Data Alternatif</h1>

  <div data-flash="<?= $this->session->flashdata('pesan') ?>" id="flash"></div>
  <a href="<?= base_url('User/index_tambah_data/' . $key = 'alternatif'); ?>" class="btn btn-md btn-primary shadow-sm"> <i class="fa-solid fa-circle-plus"></i> Tambahkan Alternatif</a>
  <a class="btn btn-primary" href="<?= base_url('User/index_atur_data_kriteria/' . $key = 'alternatif'); ?>"><i class="fa-solid fa-gear"></i> Atur Kriteria</a>
  <a class="btn btn-primary" href="<?= base_url('Autentifikasi/logout'); ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
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
            <?php foreach ($semua['kriteria'] as $rowK) : ?>
              <th><?= 'B ' . $rowK['kriteria'] ?></th>
            <?php endforeach; ?>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // print_r($semua['data_alternatif_dan_bobot']);
          $no = 1;
          foreach ($semua['data_alternatif_dan_bobot'] as $v1 => $d1) : ?>
            <tr>
              <td><?= $no; ?></td>
              <?php foreach ($semua['data_alternatif_dan_bobot'][$v1] as $v => $d) : ?>
                <?php if ($v != 'id' && $v != 'gambar') : ?>
                  <td><?= $d; ?></td>
                <?php endif; ?>
              <?php endforeach; ?>
              <td class="btn-group" style="vertical-align: baseline;">
                <a href="#modal-default<?= $d1['id'] ?>" class="btn btn-sm btn-success " data-toggle="modal"><i class="fas fa-eye"></i></a>
                <a href="#" class="btn btn-sm btn-primary shadow-sm" onclick="ubah('<?= $d1['alternatif'] ?>','alternatif','<?= $d1['id'] ?>')"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('User/hapus_data/') . $key = 'alternatif' . '/' . $d1['id']; ?>" class="btn btn-sm btn-danger shadow-sm " id="btn-hapus" data-pesan="<?= $d1['alternatif']; ?>"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php $no++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php foreach ($semua['data_alternatif_dan_bobot'] as $d) : ?>
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
                    <img class="img-fluid" src="<?= base_url('assets/img/') . $d['gambar']; ?>" style="width:1000px; height:500px;">
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead> </thead>
                      <tbody>
                        <tr>
                          <td> Alternatif : <b><?= $d['alternatif']; ?></b> </td>
                          <td> Bobot Harga : <b><?= $d['bobot_harga']; ?></b></td>
                        </tr>
                        <tr>
                          <td>Bobot luas : <b><?= $d['bobot_luas']; ?></b> </td>
                          <td>Bobot keramaian : <b><?= $d['bobot_keramaian']; ?></b></td>
                        </tr>
                        <tr>
                          <td>Bobot fasilitas : <b><?= $d['bobot_fasilitas']; ?></b></td>
                          <td>Bobot keamanan :<b><?= $d['bobot_keamanan']; ?></b> </td>
                        </tr>
                        <tr>
                          <td>Bobot kompetitor : <b><?= $d['bobot_kompetitor']; ?></b></td>
                          <td>Bobot perijinan : <b> <?= $d['bobot_perijinan']; ?></b></td>
                        </tr>
                        <!-- <tr>
                          <td>lat : <b><?= $d['lat']; ?></b></td>
                          <td>lng : <b><?= $d['lng']; ?></b></td>
                        </tr> -->
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
<script>
  function ubah(nama, key, id) {
    Swal.fire({
      title: '<h4><b>Yakin ingin mengubah data alternatif ' + nama + '?</b></h4>',
      // text: "You won't be able to revert this!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.replace(baseUrl + 'User/index_ubah_data/' + key + '/' + id);
      }
    })
  }
</script>