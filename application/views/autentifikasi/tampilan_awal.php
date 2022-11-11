<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPK-SMART</title>
  <meta name="description" content="Free bootstrap template Atlas">
  <link rel="icon" href="" sizes="32x32" type="image/png">
  <!-- custom.css -->
  <link rel="stylesheet" href="<?= base_url('assets/atlas/Atlas/'); ?>css/custom.css">
  <!-- bootstrap.min.css -->
  <link rel="stylesheet" href="<?= base_url('assets/atlas/Atlas/'); ?>css/bootstrap.min.css">
  <!-- font-awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/atlas/Atlas/'); ?>font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- AOS -->
  <link rel="stylesheet" href="<?= base_url('assets/atlas/Atlas/'); ?>css/aos.css">
  <style>
    .cari {
      border: 2px solid #183153;
      color: whitesmoke;
      font-weight: 400;
      box-shadow: rgba(0, 0, 0, .1)
    }

    .cari:hover {
      background-color: #ffd43b;
      color: #183153;
      border: none;

    }

    .jumbotron {
      background-size: cover;

    }
  </style>
</head>

<body class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(<?= base_url('assets/atlas/Atlas/'); ?>img/banner-bk.jpg); background-size:cover;">
  <!-- banner -->

  <div class="container text-center text-md-left mb-4">

    <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 font-weight-bold my-5" style="font-family: 'Bahnschrift'; color:#ccc">
      Aplikasi Pencari Distro Terbaik<br>
      Dengan Metode <span class="text-danger">SMART</span>
    </h1>
    <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4" style="font-family: 'Bahnschrift';">
      Metode
      Simple Multi Atribute Rating Technique (SMART) merupakan metode yang dalam penerapannya
      mempertimbangkan beberapa kriteria dan alternatif yang mampu membantu pengguna dalam menentukan
      pilihannya dengan lebih tepat sehingga dapat digunakan dalam sistem penunjang keputusan. Dengan adanya
      sistem pendukung keputusan pencari distro terbaik ini diharapkan dapat membantu user
      dalam menemukan distro terbaik dengan efisien.
      <!-- <br> Illum iusto laoreet his te. Lorem partiendo mel ex. Ad vitae admodum voluptatum per. -->
    </p>
    <a style="font-family: 'Bahnschrift';border: 2px solid #183153;" href="<?= base_url('Autentifikasi/index_login'); ?>" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn btn-danger my-4 font-weight-ligther atlas-cta cta-log ">Login</a>

    <a style="font-family: 'Bahnschrift'; border: 2px solid #183153;" href="<?= base_url('User/index_input_bobot_kriteria'); ?>" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cari  ">Cari Lokasi Distro <i class="fa fa-map"></i></a>
  </div><br>

  <!-- three-blcok -->
  <!-- <div class="container"> -->
  <!-- <h2 class="text-center font-weight-bold my-5" style="font-family: 'Bahnschrift';">Kepuasan anda adalah prioritas kami</h2> -->
  <!-- <div class="row"> -->
  <!-- <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center"> -->
  <!-- <img src="" alt="Anti-spam" class="mx-auto"> -->
  <!-- <h2 style="font-family: 'Bahnschrift';">Sekian</h2> -->
  <!-- <p>Lorem ipsum dolor sit amet porro his no his deleniti</p> -->
  <!-- </div> -->
  <!-- <div style="font-family: 'Bahnschrift';" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center"> -->
  <!-- <img src="" alt="Phishing Detect" class="mx-auto"> -->
  <!-- <h2>Dan</h2> -->
  <!-- <p>Ne error antiopam usu. Sed vocen concludaturque ea</p> -->
  <!-- </div> -->
  <!-- <div style="font-family: 'Bahnschrift';" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center"> -->
  <!-- <img src="" alt="Smart Scan" class="mx-auto"> -->
  <!-- <h2>Terimakasih</h2> -->
  <!-- <p>Et usu ocurreret elaboraret doctus prodesse assueverit.</p> -->
  <!-- </div> -->
  <!-- </div> -->
  <!-- </div> -->

  <!-- AOS -->
  <script src="<?= base_url('assets/atlas/Atlas/'); ?>js/aos.js"></script>
  <script>
    AOS.init({});
  </script>
</body>

</html>