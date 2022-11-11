<!-- Begin Page Content -->
<div class="card-body" style="background-image: url(<?= base_url('assets/atlas/Atlas/'); ?>img/banner-bk.jpg); background-size:cover">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold display-4  text-center" style="font-family:  Bahnschrift; color:#ccc">Rekomendasi <span class="text-danger">Lokasi</span></h1>
  <!-- <div class="row justify-content-center"> -->
  <a class="btn btn-danger" href="<?= base_url('User/index_input_bobot_kriteria'); ?>"><i class="fas fa-angle-double-left"></i> Kembali</a>
  <!-- </div> -->
  <hr class="sidebar-divider">

  <body style="font-family:  Bahnschrift;">
    <div class="row py-1">
      <?php
      $i = 0;
      foreach ($smart as $s) : ?>
        <div class="col-lg-3 col-md-3 col-sm-1">
          <div class="card mb-4">
            <div class="card-footer bg-dark-blue">
              <div class="card-header bg-dark-blue text-light text" style="font-size: small;border-bottom:none"><?= '<b>' . $s['alternatif'] . '</b><br>Ranking ke : ' . ++$i . ' ( ' . $s['perengkingan'] . ' )'; ?></div>
              <div class="card-body" style="padding: 0; overflow: hidden;">
                <img style="height: 300px; weight: 300px;" class="img-fluid card-img-top" src="<?= base_url('assets/img/') . $s['gambar']; ?>">
              </div>
              <br>
              <!-- <div class="row"> -->
              <a class="text-light py-0 btn btn-sm btn-outline-success" style="font-size: small;" href="<?= base_url('User/rincian_lokasi/' . $s['id']); ?>"><i class="fas fa-eye"></i> Lihat Rincian</a>
              <!-- <div class="col-md-6"> -->
              <!-- </div> -->
              <!-- <div class="text-right"> -->
              <a class="text-light py-0 btn btn-sm btn-outline-info" style="font-size: small;" href="<?= base_url('User/lihat_lokasi') . '?lat=' . urlencode($s['lat']) . '&lng=' . urlencode($s['lng']); ?>"><i class="fas fa-eye"></i> Lihat Lokasi</a>
              <!-- </div> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <hr class="sidebar-divider">
  </body>
</div>