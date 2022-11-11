<!-- Begin Page Content -->
<div class="card-body">

  <!-- Begin Page Content -->
  <h1 class="font-weight-bold text-dark-blue text-center">Lokasi Alternatif</h1>
  <hr class="sidebar-divider">
  <div class="mb-2">
    <a class="btn btn-primary" href="<?= base_url('User/hasil_rekomendasi'); ?>"><i class="fa-solid fa-angles-left"></i> Kembali</a>
    <button class="btn btn-primary" onclick="getLokasi()">Sesuaikan posisi otomatis</button>
  </div>
  <span><i>Keakuratan koordinat bergantung pada stabilitas jaringan anda, <br>apabila tidak akurat anda bisa menginput Latitude dan Longitude secara manual atau menggeser mark penanda</i></span>
  <div class="row mt-1">
    <div class="col-sm-2">
      <label class="font-weight-bold" for="inputlat">Latitude</label>
      <input class="form-control form-control-user" type="text" id='inputLat' placeholder="Masukkan Latitude">
    </div>
    <div class="col-sm-2">
      <label class="font-weight-bold" for="inputLng">Longitude</label>
      <input class="form-control form-control-user" type="text" id='inputLng' placeholder="Masukkan Longitude">
    </div>
  </div>
  <button class="btn btn-primary mt-3 mb-2" onclick="showPositionS()">Sesuaikan Posisi Manual</button>

  <p id="lokasi"></p>

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
    <!-- <hr class="sidebar-divider"> -->
  </body>
</div>