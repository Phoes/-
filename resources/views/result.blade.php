@extends('welcome') 
@section('sidebar')
<form class="form-horizontal" action="{{url('newsave')}}" method="POST" role="form">
    {!! csrf_field() !!}
    <fieldset>


<center>ข้อมูลการวัด <br><br>
  <div class="col-xs-offset-3"> {{$name}} {{$tambon}} {{$amphoe}} {{$county}}</div><br>
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

  </table>
  
      <button id="submitButton" name="submitButton" class="btn btn-success">Save</button><br>
    </fieldset>
  </form>
  @stop
