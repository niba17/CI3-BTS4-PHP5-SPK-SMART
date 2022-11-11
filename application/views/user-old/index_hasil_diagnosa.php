<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->

  <h1 class="font-weight-bold text-dark-blue">Data hasil diagnosa</h1> <?= $this->session->flashdata('pesan_simpan');
                                                                        if (isset($_SESSION['pesan_simpan'])) {
                                                                          unset($_SESSION['pesan_simpan']);
                                                                        } ?>
  <hr class="sidebar-divider">
  <div class="table-responsive">
    <?php if (count($CF_presentase_dan_kode_penyakit_dan_gejala) > 0) : ?>
      <?php if (count($CF_presentase_dan_kode_penyakit_dan_gejala) > 0) : ?>
        <h2 class="font-weight-bold">
          Gejala yang di inputkan user :
        </h2>
      <?php endif; ?>

      <h3>
        <p>
          <?php
          $no = 0;
          $save_no = 0;
          $save_nama_gejala = [];
          $save_kode_gejala = [];
          $save_keyakinan_user = [];
          foreach ($kepastian_user as $k) {
            foreach ($gejala as $g) {
              if ($k->nilai_kepastian > 0 && $g->kode_gejala == $k->kode_gejala_user) {

                $keyakinan_user = '';
                if ($k->presentase == '20%') {
                  $keyakinan_user = 'Tidak Tahu';
                } else if ($k->presentase == '40%') {
                  $keyakinan_user = 'Sedikit Yakin';
                } else if ($k->presentase == '60%') {
                  $keyakinan_user = 'Cukup Yakin';
                } else if ($k->presentase == '80%') {
                  $keyakinan_user = 'Yakin';
                } else if ($k->presentase == '100%') {
                  $keyakinan_user = 'Sangat Yakin';
                }
                echo ('<b>' . ++$no . '. </b>' .  $g->nama_gejala . ' <b>(' . $g->kode_gejala . ')</b>, dengan tingkat keyakinan user adalah : <b>' . $keyakinan_user . '</b>');
                echo ('<br>');
                $save_kode_nama_gejala_dan_presentase[$save_no] = $g->nama_gejala . '(' . $g->kode_gejala . ')' . ' : ' . $keyakinan_user;
                $save_no++;
              }
            }
          }
          // echo();
          // print_r($save_nama_gejala);
          // die;
          ?>
          <br>
          <?php if (count($CF_presentase_dan_kode_penyakit_dan_gejala) > 0) : ?>
        <h2 class="font-weight-bold"> Berdasarkan hasil diagnosa menggunakan metode <i>Certainty Factor</i>, terdapat penyakit :</h2>
      <?php endif; ?>
      <h3>
        <p>
          <?php
          $solusi_penyakit = '';
          $save_nama_kode_dan_presentase_penyakit = '';
          if (count($CF_presentase_dan_kode_penyakit_dan_gejala) > 0) {
            for ($i = 0; $i < count($penyakit); $i++) {
              for ($j = 0; $j < count($CF_presentase_dan_kode_penyakit_dan_gejala); $j++) {
                if ($penyakit[$i]->kode_penyakit == $CF_presentase_dan_kode_penyakit_dan_gejala[$j]['kode_penyakit']) {
                  echo ('<b>1.</b> <i>' . $penyakit[$i]->nama_penyakit . '</i> <b>(' . $penyakit[$i]->kode_penyakit . ')</b>' . ', dengan tingkat keyakinan : <b>' . $CF_presentase_dan_kode_penyakit_dan_gejala[$j]['CF_presentase'] . '%</b>');
                  $save_nama_kode_dan_presentase_penyakit = $penyakit[$i]->nama_penyakit . '(' . $penyakit[$i]->kode_penyakit . '): ' . $CF_presentase_dan_kode_penyakit_dan_gejala[$j]['CF_presentase'] . '%';
                  $solusi_penyakit = $penyakit[$i]->solusi_penyakit;
                  // $save_kode_penyakit = $penyakit[$i]->kode_penyakit;
                  // $save_presentase = $CF_presentase_dan_kode_penyakit_dan_gejala[$j]['CF_presentase'] . '%';

                  $i = count($penyakit);
                  $j = count($CF_presentase_dan_kode_penyakit_dan_gejala);
                }
              }
            }
          }
          ?>
        </p>
      </h3>

      <h2 class="font-weight-bold">
        <br>
        Solusi berdasarkan data pakar :
      </h2>
      <h3>
      <?= $solusi_penyakit; ?></h3>
      </h3>
      <hr class="sidebar-divider">
      <?php $save_kode_nama_gejala_dan_presentase = implode(",<br>", $save_kode_nama_gejala_dan_presentase); ?>
      <div class="row">
      <div class="col-lg-1">
      <form action="<?= base_url('User/simpan_data/' . $sidebar) ?>" method="post">
        <input type="hidden" name="nama_pemilik" value="<?= $nama_pemilik; ?>">
        <input type="hidden" name="nama_hewan" value="<?= $nama_hewan; ?>">
        <input type="hidden" name="usia_hewan" value="<?= $usia_hewan; ?>">
        <input type="hidden" name="save_nama_kode_dan_presentase_penyakit" value="<?= $save_nama_kode_dan_presentase_penyakit; ?>">
        <input type="hidden" name="save_kode_nama_gejala_dan_presentase" value="<?= $save_kode_nama_gejala_dan_presentase; ?>">
        <input type="hidden" name="save_date" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                      echo (date("d-M-Y")); ?>">
        <input type="hidden" name="save_date2" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                      echo (date("H:i")); ?>">
        <button class="btn btn-primary"><i class="fas fa-file-download mr-1" style="font-size: 25px;"></i> Simpan</button>
      </form>
      </div>
      <form action="<?= base_url('User/print') ?>" method="post">
        <input type="hidden" name="nama_pemilik" value="<?= $nama_pemilik; ?>">
        <input type="hidden" name="nama_hewan" value="<?= $nama_hewan; ?>">
        <input type="hidden" name="usia_hewan" value="<?= $usia_hewan; ?>">
        <input type="hidden" name="save_nama_kode_dan_presentase_penyakit" value="<?= $save_nama_kode_dan_presentase_penyakit; ?>">
        <input type="hidden" name="save_kode_nama_gejala_dan_presentase" value="<?= $save_kode_nama_gejala_dan_presentase; ?>">
        <input type="hidden" name="save_date" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                      echo (date("d-M-Y")); ?>">
        <input type="hidden" name="save_date2" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                      echo (date("H:i")); ?>">
        <input type="hidden" name="solusi_penyakit" value="<?= $solusi_penyakit; ?>">                                        
        <button class="btn btn-primary"><i class="far fa-save" style="font-size: 25px;"></i> Print</button>
      </form>
      </div>
    <?php endif; ?>
    <?php if (count($CF_presentase_dan_kode_penyakit_dan_gejala) == 0) : ?>
      <h2 class="font-weight-bold">Data gejala tidak ditemukan!</h2>
    <?php endif; ?>
    <br>
    <a href="<?= base_url('User/index_konsultasi') ?>" class="btn btn-primary"><i class="far fa-hand-point-left" style="font-size: 25px;"></i> Kembali</a>
    <br>
    <br>
  </div>
</div>
<!-- End of Main Content -->