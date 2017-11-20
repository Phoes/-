<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
        width: 50%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>

    <div id="floating-panel">
      <input id="address" type="text" name="location" value="ใส่สถานที่">
      <input type="text" id="lat" name="lat" value="lat">
      <input type="text" id="lng" name="lng" value="lng">
      <button id="myBtn">Try it</button> 
    </div>
    <div id="map"></div>
    <script>

      var map;
      var position={lat: 13.7563309, lng: 100.5017651}
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: position,
          zoom: 10
        });

        var geocoder = new google.maps.Geocoder();

        document.getElementById('myBtn').addEventListener('click', function() {
            geocodeAddress(geocoder, map);
        });

      }


      function geocodeAddress(geocoder, resultsMap){
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
              var lat = results[0].geometry.location.lat();
              var lng = results[0].geometry.location.lng();
              document.getElementById("lat").value = lat;
              document.getElementById("lng").value = lng;
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Noooo!!!!!' + status);
          }
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSpPZW30mRB2LUWKF_XturWtL3ImWmuZM&callback=initMap"
    async defer></script>
  </body>
</html>