<!-- Begin Page Content -->
<div class="card-body" style="background-image: url(<?= base_url('assets/atlas/Atlas/'); ?>img/banner-bk.jpg); background-size:cover">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-center" style="font-family:  Bahnschrift; color:#ccc">Rincian <span class="text-danger">Lokasi</span></h1>
  <hr class="sidebar-divider">

  <body>
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" src="<?= base_url('assets/img/') . $data_alternatif_dan_bobot['gambar']; ?>" style="width:100%;height:25em;border :5px solid grey;border-radius:5px">
      </div>
      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table text-center" id="" width="100%" cellspacing="0" style="font-family:  Bahnschrift; color:#ccc">
            <tbody class="text-left font-weight-bold text-white">
              <?php foreach ($data_alternatif_dan_bobot as $v => $d) : ?>
                <?php if ($v != 'id' && $v != 'gambar') : ?>
                  <tr>
                    <td style="width:200px;"><?= $v; ?> </td>
                    <td>:</td>
                    <td><?= $d; ?></td>
                  </tr>
                <?php endif; ?>
              <?php endforeach; ?>

              <!-- <tr>
                <td style="width:200px;">Alamat </td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['alamat']; ?></td>
              </tr>
              <tr>
                <td>Harga Sewa</td>
                <td style="width:50px;">:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_harga']; ?></td>
              </tr>
              <tr>
                <td>Luas Bangunan</td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_luas'] . 'm<sup>2</sup>'; ?></td>
              </tr>
              <tr>
                <td>Keramaian</td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_keramaian']; ?></td>
              </tr>
              <tr>
                <td>Fasilitas</td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_fasilitas']; ?></td>
              </tr>
              <tr>
                <td>Keamanan</td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_keamanan']; ?></td>
              </tr>
              <tr>
                <td>Jarak Kompetitor</td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_kompetitor']; ?></td>
              </tr>
              <tr>
                <td>Surat Ijin</td>
                <td>:</td>
                <td><?= $data_alternatif_dan_bobot['bobot_perijinan']; ?></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>


    </div>
    <hr class=" sidebar-divider mb-3">

    <a class="btn btn-warning mb-5" href="<?= base_url('User/hasil_rekomendasi'); ?>"><i class="fas fa-angle-double-left" style="font-size: 25px;"></i> Kembali</a>
  </body>
</div>