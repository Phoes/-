@extends('welcome')

@section('sidebar')
 <form class="form-horizontal" method="POST" role="form" action="{{url('partdata')}}">
   {!! csrf_field() !!}
   <fieldset><br><br>
<center><label>วันที่ต้องการดู</label>
@if(count($namedate)>0)
  <input type="date" name="namedate" id="namedate" value="{{$namedate}}" >
  @else
<input type="date" name="namedate" id="namedate" >
@endif
<button type="submit" name="submit" class="btn btn-success">search</button></center>
</fieldset>
</form>
<center><br>
<table>
    	<tr>
      		<th>อุณหภูมิ</th>
      		<th>ความขุ่น</th>
      		<th>วันที่ / เวลา</th>
    	</tr>
			@foreach ($Stations as $s)
    	<tr>
      		<td>{{$s->temperature}}</td>
      		<td>{{$s->turbidity}}</td>
      		<td>{{$s->timelog}}</td>
    	</tr>
    		@endforeach
</table><br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      </div>
   <div class="col-md-4">@if(count($_POST)>0)
     {{ $Stations->appends($_POST)->links() }}
     @else
     {{ $Stations->appends($_GET)->links() }}
     @endif
   </div>
   <div class="col-md-4">
   </div>  
  </div>
</div>

</center><br>
@endsection