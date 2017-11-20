@extends('welcome')

@section('sidebar')
 <form class="form-horizontal" method="POST" role="form" action="{{url('partmobli')}}">
   {!! csrf_field() !!}
   <fieldset><br><br>
 <center><label>วันที่ต้องการดู</label>
 @if(count($namedatemo)>0)
  <input type="date" name="namedatemo" id="namedatemo" value="{{$namedatemo}}" >
  @else
<input type="date" name="namedatemo" id="namedatemo" >
@endif
<button type="submit" name="submit" class="btn btn-success">search</button></center>
</fieldset>
</form><br>
<center><div style="color: red">{{$n}}</div></center>
<center><br>
<table>
    	<tr>
      		<th>อุณหภูมิ</th>
      		<th>ความขุ่น</th>
          <th>pH</th>
          <th>ประเภท</th>
          <th>location</th>
          <th>วันที่ / เวลา</th>
    	</tr>
			@foreach ($Devices as $a)
    	<tr>
      		<td>{{$a->temperature}}</td>
      		<td>{{$a->turbidity}}</td>
          <td>{{$a->ph}}</td>
          <td>{{$a->type}}</td>
          <td>{{$a->location}}</td>
      		<td>{{$a->timelog}}</td>
    	</tr>
    		@endforeach
</table><br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      </div>
   <div class="col-md-4">@if(count($_POST)>0)
     {{ $Devices->appends($_POST)->links() }}
     @else
     {{ $Devices->appends($_GET)->links() }}
     @endif
   </div>
   <div class="col-md-4">
   </div>  
  </div>
</div>

</center><br>
<!DOCTYPE html>
<center><div class="col-md-7 text-center">
                    <div class="box">
                        <div class="box-content">
                            <html>
                             <head>
                             <title>Simple Map</title>
                             <meta name="viewport" content="initial-scale=1.0">
                             <meta charset="utf-8">
                             <style>
                              /* Always set the map height explicitly to define the size of the div
                              * element that contains the map. */
                              #map {
                              height: 100%;
                             }
                             /* Optional: Makes the sample page fill the window. */
                             html {
                             height: 100%;
                              margin: 0;
                              padding: 0;
                              text-align: center;
                            }

                            #map {
                                height: 500px;
                                 width: 600px;
                            }
                          </style>
                        </head>
                             <body>
                              <div id="map"></div>
                             <script type="text/javascript">

                                    var locations = {!! $locations !!};
                                   </script>
                                   <script type="text/javascript">


                                      function initMap() {
                                        var mapOptions = {
                                          center: {lat: 7.8943767, lng: 98.35291280000001
                                         },
                                          zoom: 5,
                                        }
                
                          var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
            
                          var marker, i, info;

                          for (i = 0; i < locations.length; i++) {  

                           marker = new google.maps.Marker({
                              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                              map: maps,
                               title: locations[i][0]
                           });

                            info = new google.maps.InfoWindow();

                          google.maps.event.addListener(marker, 'click', (function(marker, i) {
                           return function() {
                             info.setContent(locations[i][0]);
                                       info.open(maps, marker);
                               }
                              })(marker, i));

                           }

                       }
                   </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSpPZW30mRB2LUWKF_XturWtL3ImWmuZM&callback=initMap               "
                   async defer></script> 
                </body>

                </html><br />
                </div>
        </div>
</center></div><br>


@endsection