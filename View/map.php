  <?php include("header.php"); ?>

    <div class="row main">
      <article id="map"></article>
    </div>


    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script>

        //Setup the map as per the Leaflet instructions
        // https:://leafletjs.com/examples/quicl-start/

        var myMap = L.map('map').setView([-21, 148], 4);

        L.tileLayer("https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" , {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: "mapbox.streets"
        }).addTo(myMap);

        //
        // $.each(jsonData.result.records, function(recordKey, recordValue) {
        //     var spatial = recordValue["dcterms:spatial"];
        //     if (spatial) {
        //         console.log(spatial);
        //     }
        //
        //     var latLong = spatial.split(";");
        //     if (latLong.length == 2) {
        //     var latLong = latLong[1].trim().split(",");
        //
            var lat = -27.47;
            var lng = 153.02;
            var marker = L.marker([lat, lng]).addTo(myMap);
            marker.on("click", function(event) {
                myMap.setView([lat, lng], 14);
            });
            marker.bindPopup("<h3>Yugara</h3><p></p><p><em>Latitude: " + lat + ", Longitude: " + lng + "</em></p>");

            // }
        // });
    </script>
<?php include("footer.php"); ?>
