@extends('welcome')


@section('sidebar')
    <center>ข้อมูลการวัด <br>
    
    

<form class="form-horizontal" action="{{url('save')}}" method="POST" role="form" id='form'>
                    {!! csrf_field() !!}
                    <fieldset>
<table>
    <tr>
      <th>อุณหภูมิ</th>
      <th>ความขุ่น</th>
      <th>วันที่ / เวลา</th>
    </tr>

<?php
    //for ($i=0; $i < count($dataa->feeds) ; $i++) {
      //echo '<tr><td>'.$dataa->feeds[$i]->field1.'</td>';
      //echo '<td>'.$dataa->feeds[$i]->field2.'</td>'; 
      //echo '<td>'.$dataa->feeds[$i]->created_at .'<br/></td></tr>'; 
      
    //}
?>
    @foreach ($data->feeds as $item)
    <tr>
      <td>@if ($item->field1 > 29)
        <font color="red">{{$item->field1}}</font>
        @else {{$item->field1}} @endif
      </td>
      <td>@if ($item->field2 < 2.82)
        <font color="red">{{$item->field2}}</font>
        @else {{$item->field2}} @endif
      </td>
      <td>{{$item->created_at}}</td>
    </tr>
    @endforeach
</table><br>
<button id="submitButton" name="submitButton" class="btn btn-success">Save</button><br>
  </fieldset>
</form>



@stop