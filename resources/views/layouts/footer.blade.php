<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>SIMRW VERSION</b> 1.0.0
      <script>
        var map = L.map('map').setView([-7.936882159858191, 112.61242419736436], 20); // Set the initial position and zoom level
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        L.marker([-7.93688215985819, 112.61242419736436]).addTo(map)
    .bindPopup('RW 5 Desa Jatimulyo.<br> Kecamatan Lowokwaru Kota Malang')
    .openPopup();

    </script>