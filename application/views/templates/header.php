<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom styles for this page -->
  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/atlas/Atlas/'); ?>css/custom.css">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free-6/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script> -->

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    form.user .form-control-user {
      border-radius: 0;
    }

    form.user .form-control-user:focus {
      border-left: 3px solid blue;
      box-shadow: none;
    }
  </style>
  <!-- Leaflet's plugins-->
  <link rel="stylesheet" href="<?= base_url('leaflet/'); ?>leaflet.css" />
  <link rel="stylesheet" href="<?= base_url('leaflet/'); ?>leaflet-routing-machine/dist/leaflet-routing-machine.css" />
  <script src="<?= base_url('leaflet/'); ?>leaflet.js"></script>
  <script src="<?= base_url('leaflet/'); ?>leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
  <!-- <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script> -->
  <script>
    var baseUrl = '<?= base_url(); ?>';
  </script>
</head>

<body id="page-top">
  <div id="wrapper">