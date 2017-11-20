@extends('welcome') 
@section('sidebar')
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
              document.getElementById("lati").value = lat;
              document.getElementById("lngti").value = lng;
              document.getElementById("location").value = address;
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
<style>
      #map {
        margin-top: 50px;
        margin-left: 25%;
        position: absolute;
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
        margin-top: 50px;
        margin-left: 40%;
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
    <div id="floating-panel">
      <input id="address" type="text" name="location" value="กรุงเทพมหานคร">
      <button id="myBtn">ค้นหา</button> 
    </div>
    <form class="form-horizontal" action="{{url('newsave')}}" method="POST" role="form">
    {!! csrf_field() !!}
   <div>
      <input id="location" type="hidden" name="location" value="">
      <input type="hidden" id="lati" name="lat" value="lat">
      <input type="hidden" id="lngti" name="lng" value="lng">
    <div id="map"></div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
      <div class="col-md-5"></div>
       <div class="col-md-3">
           <input type="radio" name="name" value="บ่อปลานิล"> บ่อปลานิล<br>
           <input type="radio" name="name" value="บ่อกุ้ง">บ่อกุ้ง<br>
           <input type="radio" name="name" value="บ่อปลาทับทิม">บ่อปลาทับทิม<br>
           <input type="radio" name="name" >อื่น: <input type="text" name="names">
           <button id="submitButton" name="submitButton" class="btn btn-success">Save</button>
      </div>
       <div class="col-md-4"></div>
      

    </div>
      
    

   </div>
    <!-- <div style="text-align: center;"> -->
    <!-- ข้อมูลการวัด <br><br>
  <table>
    <tr>
      <th>อุณหภูมิ</th>
      <th>ความขุ่น</th>
      <th>ค่า pH</th>
      <th>วันที่ / เวลา</th>
    </tr>

    @foreach ($data->feeds as $data)
    <tr>
      <td>{{$data->field1}}</td>
      <td>{{$data->field2}}</td>
      <td>{{$data->field3}}</td>
      <td>{{$data->created_at}}</td>
    </tr>
    @endforeach

  </table> -->

  <!-- <button id="submitButton" name="submitButton" class="btn btn-success">Save</button> -->
 <!--  </div> -->
  </form>
  @stop
