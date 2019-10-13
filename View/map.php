  <?php include("header.php"); ?>

    <div class="row main">
      <article id="map"></article>
    </div>


    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

        // var jsonData = <?php echo $data; ?>;
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
        //     var lat = latLong[0];
        //     var lng = latLong[1];
        //     var marker = L.marker([lat, lng]).addTo(myMap);
        //     marker.on("click", function(event) {
        //         myMap.setView([lat, lng], 14);
        //         var aTag = $("section[id='" + recordValue["dc:title"] + "']");
        //         $('html,body').animate({scrollTop: aTag.offset().top},'slow');
        //     })
        //     marker.bindPopup("<h3>" +
        //     recordValue["dc:title"] + "</h3><p>" +
        //     recordValue["dc:description"] + "</p><p><em>" + spatial + "</em></p>");
        //     }
        // });
    </script>
<?php include("footer.php"); ?>
