<!-- Begin Page Content -->
<style>
  .alert-info {
    color: #dddfeb;
    background-color: #d7f1f530;
    border-color: #c7ebf1;
  }

  .btn-info:hover {
    background-color: #4e73df !important;
  }
</style>
<div class="card-body" style="background-image: url(<?= base_url('assets/atlas/Atlas/'); ?>img/banner-bk.jpg); background-size:cover">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue text-center font-weight:bold" style="font-family:  Bahnschrift; color:#ccc !important">Lokasi <span class="text-danger">Alternatif</span></h1>
  <hr class="sidebar-divider">
  <a class="btn btn-danger" href="<?= base_url('User/hasil_rekomendasi'); ?>"><i class="fas fa-angle-double-left"></i> Kembali</a>
  <!-- <div class="row">
    <div class="col-lg-2"> -->
  <button class="btn btn-info" onclick="getLokasi()" style="background-color:transparent;border:2px solid skyblue">Sesuaikan posisi otomatis</button>




  <!-- </div>
  </div> -->
  <br>
  <br>
  <div class="alert alert-info">
    Jika koordinat Tidak sesuai, reload halaman dan silahkan input Latitude dan Longitude secara manual<br>
    atau anda bisa menggeser mark penanda lokasi secara manual
  </div>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <label class="font-weight-bold text-white" for="inputlat">Latitude</label>
      <input class="form-control form-control-user" type="text" id='inputLat' placeholder="Masukkan Latitude">
    </div>
    <div class="col-sm-2">
      <label class="font-weight-bold text-white" for="inputLng">Longitude</label>
      <input class="form-control form-control-user" type="text" id='inputLng' placeholder="Masukkan Longitude">
    </div>
  </div>
  <button class="btn btn-info mt-3" onclick="showPositionS()" style="background-color:transparent;border:2px solid skyblue">Sesuaikan Posisi Manual</button>
  <br>
  <br>
  <!-- <div class="row"> -->
  <p id="lokasi"></p>
  <p id="tujuan"></p>
  <!-- </div> -->

  <body>
    <div id="map" style="height:600px;"></div>
    <script>
      var lat = <?= $lat; ?>;
      var lng = <?= $lng; ?>;

      var map = L.map('map', {
        zoomControl: true
      });

      //Deklarasi Lat & Lng Map
      var latLng = [-10.161769858944174, 123.6011564253331];

      //Deklarasi Icon Posisi User

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      var marker;
      var control = L.Routing.control({
        waypoints: [
          latLng
        ],
        routeWhileDragging: true,
        createMarker: function(i, waypoint, n) {
          var urlIcon;
          if (i == 0) {
            urlIcon = baseUrl + 'assets/img/icons/startMarker.png';
            i = 'Posisi anda sekarang';
          } else if ((i + 1) == n) {
            urlIcon = baseUrl + 'assets/img/icons/finishMarker.png';
            i = 'Posisi tujuan anda';
          } else {
            urlIcon = baseUrl + 'assets/img/icons/footstepsMarker.png';
          }
          marker = L.marker(waypoint.latLng, {
            draggable: true,
            bounceOnAdd: false,
            icon: L.icon({
              iconUrl: urlIcon,
              iconSize: [38, 40],
              iconAnchor: [22, 40],
              popupAnchor: [-3, -76],
              shadowSize: [68, 45],
              shadowAnchor: [22, 94]
            })
          });
          return marker.bindPopup('<b>' + i + '</b>', );
        }
      })
      control.addTo(map);

      function getLokasi() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        }
      }

      function showPosition(posisi) {
        $("#lokasi").html("<h5 class='mb-0'><b>Posisi anda sekarang : </b></h5>Latitude : " + posisi.coords.latitude + ", Longitude : " + posisi.coords.longitude + "<h5 class='mb-0'><b>Posisi tujuan anda : </b></h5>Latitude : " + lat + ", Longitude : " + lng);
        var latLng = [posisi.coords.latitude, posisi.coords.longitude];
        control.spliceWaypoints(0, 1, latLng);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, [lat, lng]);
        $("#inputLat").val('');
        $("#inputLng").val('');
        // map.panTo
      }

      function showPositionS() {
        var latS = $("#inputLat").val();
        var lngS = $("#inputLng").val();
        var latLngS = [latS, lngS];
        $("#lokasi").html("<h5 class='mb-0'><b>Posisi anda sekarang : </b></h5>Latitude : " + latLngS[0] + ", Longitude : " + latLngS[1] + "<h5 class='mb-0'><b>Posisi tujuan anda : </b></h5>Latitude : " + lat + ", Longitude : " + lng);
        control.spliceWaypoints(0, 1, latLngS);
        control.spliceWaypoints(control.getWaypoints().length - 1, 1, [lat, lng]);
      }
    </script>
    <hr class="sidebar-divider">
  </body>
</div>