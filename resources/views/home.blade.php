@extends('welcome')


@section('sidebar')
<body style="background-color: #FFE4E1"  >
	<img src="/img/w.png" width="200"  height="250" align="right">
	<div class="row">
	<FONT FACE="AngsanaUPC,FixedDB Thaitext New" size="5">
     <div class="col-md-4 col-xs-offset-1"><h1><marquee behavior="alternate" width="10%">>></marquee>Station 1<marquee behavior="alternate" width="10%"><<</marquee></h1>
         <div>
               <p align="justify"> - station 1 เป็นการติดตั้งอุปกรณ์การตรวจวัดน้ำประปาที่หอพัก ตึก C อิรวดีเก็ตโฮ่ ตำบลกะกู้ อำเภอกะทู้ จังหวัดภูเก็ต โดยตัวติดตั้งจะทำการตรวจวัดค่าอุณหภูมิเเละค่าความขุ่นของน้ำ ซึ่งค่าการตรวจวัดจะสังเกตุได้จาก web application ดังนี้ </p>
            <div align="left"><i style="font-size:10px" class="fa">&#xf0c8;</i> ค่าน้ำปกติ  
            </div>
            <div align="left"><i style="font-size:10px;color: red" class="fa">&#xf0c8;</i> ค่าน้ำเสี่ยง
            </div>
         </div>
         <marquee style="border:#FF0033 2px SOLID">
           @foreach ($data->feeds as $item)
              อุณหภูมิ:
              @if ($item->field1 > 30 || $item->field1 < 23)
                    <font color="red"> {{$item->field1}}</font>
              @else  {{$item->field1}} @endif
              ความขุ่น: 
              @if ($item->field2 < 3.00)
                   <font color="red">{{$item->field2}}</font>
              @else {{$item->field2}} @endif

           @endforeach
         </marquee>
     </div>
     <div class="col-md-4 col-xs-offset-1"><h1><marquee behavior="alternate" width="10%">>></marquee>Mobile device<marquee behavior="alternate" width="10%"><<</marquee></h1>
         <div >
              <p align="justify"> - Mobile device เป็นเครื่องมือตรวจวัดสำหรับพกพานอกสถานที่ซึ่งจะตรวจวัดทั้งหมด 3 ค่าคือ ค่า pH, ค่าอุณหภูมิ และค่าความขุ่น โดยผู้ใช้สามารถดูค่าที่วัดได้จาก web application และค่าที่แสดงจะมีตัวอักษรสีดังนี้ </p>  
              <div align="left"><i style="font-size:10px" class="fa">&#xf0c8;</i> ค่าน้ำปกติ</div>
              <div align="left"><i style="font-size:10px;color: red" class="fa">&#xf0c8;</i> ค่าน้ำเสี่ยง</div>
         </div>
     </div>
    </FONT> 
</div>
</body>

@stop



