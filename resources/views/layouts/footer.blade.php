<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>SIMRW VERSION</b> 1.0.0
      <script>
        var map = L.map('map').setView([-6.1751, 106.865], 13); // Set the initial position and zoom level
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);
    </script>