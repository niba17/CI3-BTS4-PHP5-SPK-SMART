<!-- Begin Page Content -->
<div class="card-body" style="background-image: url(<?= base_url('assets/atlas/Atlas/'); ?>img/banner-bk.jpg); background-size:cover">
  <style>
    .form-control {
      border: 2px solid grey;
      background-color: transparent;
      border: 0;
      border-radius: 0;
      color: aliceblue;
      -webkit-appearance: none;
      font-size: 13px;
      font-weight: lighter;
      transform: scale(1);
      border-bottom: 2px solid grey;
      padding: 0;

    }

    input {
      color: aliceblue;
      font-size: 13px;
      font-weight: 300;
    }

    .form-control:focus {
      box-shadow: none;
      background-color: transparent;
      border: 0;
      outline: 0;
    }

    .form-control:not(focus) {
      border-bottom: 2px solid grey;
      transform: scale(1);
      transition: all 0.5s linear;
    }

    label {
      color: lightskyblue;
    }

    p {
      font-size: small;
      margin-bottom: 0;
    }

    .alert-info {
      color: #dddfeb;
      background-color: #d7f1f530;
      border-color: #c7ebf1;
    }

    .form-control:focus+.line {
      transform: scale(1);
      transition: all 0.5s linear;
    }

    .line {
      background-color: #f53b57;
      height: .15em;
      left: .6rem;
      line-height: 1.5;
      margin-top: -1.1em;
      position: absolute;
      transform: scale(0, 1);
      transition: all 0.5s linear;
      width: 95%;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
  <?= $this->session->flashdata('pesan_error');
  if (isset($_SESSION['pesan_error'])) {
    unset($_SESSION['pesan_error']);
  } ?>

  <!-- Begin Page Content -->

  <h1 class="font-weight-bold display-4 hh text-center" style="color: #ccc;">Masukan Bobot <span class="text-danger">Kriteria</span></h1>
  <hr class="sidebar-divider">

  <body style="font-family: 'Bahnschrift';">
    <form action="<?= base_url('User/input_bobot_kriteria'); ?>" method="post">
      <div class="row justify-content-center">
        <div class="col-md-8 mb-2">
          <div class="alert alert-info">
            <h1 class="h6"> <i class="fa fa-info-circle"></i> Keterangan</h1>
            <p>1. Setiap bobot memeliki nilai maksimal 100</p>
            <p>2. Nilai bobot yang terbesar akan di prioritaskan</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class=" col-lg-8 mb-5">
          <?= $this->session->flashdata('pesan');
          if (isset($_SESSION['pesan'])) {
            unset($_SESSION['pesan']);
          }
          $this->db->empty_table('tabel_kriteria');
          ?>
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label class="font-weight-200" for="harga">Harga</label>
                <input type="number" class="form-control form-control-user mb-3" name="harga" min='0' length="3" max="100" placeholder="Masukkan Bobot Harga" required>
                <span class="line"></span>
              </div>
              <label class="font-weight-200" for="keramaian">Keramaian</label>
              <input type="number" class="form-control form-control-user mb-3" name="keramaian" min='0' placeholder="Masukkan Bobot Keramaian" required>
              <span class="line"></span>
              <label class="font-weight-200" for="keamanan">Keamanan</label>
              <input type="number" class="form-control form-control-user mb-3" name="keamanan" min='0' placeholder="Masukkan Bobot Keamanan" required>
              <span class="line"></span>
              <label class="font-weight-200" for="perijinan">Perijinan</label>
              <input type="number" class="form-control form-control-user mb-3" name="perijinan" min='0' placeholder="Masukkan Bobot Perijinan" required>
              <span class="line"></span>

            </div>

            <div class="col-md-6">
              <label class="font-weight-200" for="luas">Luas Bangunan</label>
              <input type="number" class="form-control form-control-user mb-3" name="luas" min='0' placeholder="Masukkan Bobot Luas" required>
              <span class="line"></span>
              <label class="font-weight-200" for="fasilitas">Fasilitas</label>
              <input type="number" class="form-control form-control-user mb-3" name="fasilitas" min='0' placeholder="Masukkan Bobot Fasilitas" required>
              <span class="line"></span>
              <label class="font-weight-200" for="kompetitor">Kompetitor</label>
              <input type="number" class="form-control form-control-user mb-3" name="kompetitor" min='0' placeholder="Masukkan Bobot Kompetitor" required>
              <span class="line"></span>
              <div class="row justify-content-end">
                <a href="<?= base_url('User/index'); ?>" class="btn btn-outline-danger mt-3 mr-1" style="font-size: 25px; ">
                  <i class="fas fa-angle-double-left"></i></a>
                <button type="submit" class="btn btn-primary btn-user mt-3"><i class="fas fa-search" style="font-size: 25px;"></i> Cek Lokasi</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</div>