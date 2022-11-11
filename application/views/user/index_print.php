<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HASIL DIAGNOSA</title>
</head>

<body>
  <center>
    <h2>HASIL DIAGNOSA</h2>
  </center>
  <hr class="sidebar-divider">
  <h3>Username : <?= $username ?></h3>
  <h3>Nama Pemilik Hewan : <?= $nama_hewan ?></h3>
  <h3>Nama Hewan : <?= $nama_hewan ?></h3>
  <h3>Usia Hewan : <?= $usia_hewan ?></h3>
  <h3><?= $tanggal?></h3>
  <!-- <h3>Alamat : RSH UPT Veteriner Dinas Peternakan Jl. Veteriner Kelapa Lima, Oesapa Barat</h3> -->
  <hr class="sidebar-divider">
  <h3>Berdasarkan gejala yang di inputkan user : </h3>
  <h3><?= $nama_gejala_dan_tk ?></h3>
  <br>
  <h3 class="font-weight-bold"> Berdasarkan hasil diagnosa menggunakan metode <i>Certainty Factor</i>, terdapat penyakit :</h3>
  <h3><?= $nama_kode_dan_presentase_p ?></h3>
  <br>
  <h3>Solusi berdasarkan data pakar :</h3>
  <h3><?= $solusi_penyakit ?></h3>
  <script>
    window.print();
  </script>
</body>

</html>