@extends('welcome')


@section('sidebar')
    <center>กราฟแสดงข้อมูล <br>
      <center><h4>กราฟอุณหภูมิ</h4></center>
      <center><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/242711/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>
      </center><br><br>
      <center><h4>กราฟความขุ่น</h4></center>
      <center><iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/242711/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line"></iframe>
      </center><br><br>
@stop