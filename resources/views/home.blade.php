@extends('welcome')


@section('sidebar')

<center><h1>station 1</h1></center>
<center><div style="height:200px; width:600px; background-color:#FFE4E1;">
<p align="justify"> - station 1 เป็นการติดตั้งอุปกรณ์การตรวจวัดน้ำประปาที่หอพัก ตึก C อิรวดีเก็ตโฮ่ ตำบลกะกู้ อำเภอกะทู้ จังหวัดภูเก็ต โดยตัวติดตั้งจะทำการตรวจวัดค่าอุณหภูมิเเละค่าความขุ่นของน้ำ ซึ่งค่าการตรวจวัดจะสังเกตุได้จาก web application ดังนี้ </p>
<div align="left"><i style="font-size:10px" class="fa">&#xf0c8;</i> ค่าน้ำปกติ</div>
<div align="left"><i style="font-size:10px;color: red" class="fa">&#xf0c8;</i> ค่าน้ำเสี่ยง</div>
</center><br><br>
<center><h1>Mobile device</h1></center>
<center><div style="height: 200px; width: 600px; background:#FFE4E1 ">
<p align="justify"> - Mobile device เป็นเครื่องมือตรวจวัดสำหรับพกพานอกสถานที่ซึ่งจะตรวจวัดทั้งหมด 3 ค่าคือ ค่า pH, ค่าอุณหภูมิ และค่าความขุ่น โดยผู้ใช้สามารถดูค่าที่วัดได้จาก web application และค่าที่แสดงจะมีตัวอักษรสีดังนี้ </p>  
<div align="left"><i style="font-size:10px" class="fa">&#xf0c8;</i> ค่าน้ำปกติ</div>
<div align="left"><i style="font-size:10px;color: red" class="fa">&#xf0c8;</i> ค่าน้ำเสี่ยง</div>
</div></center><br><br>
@stop


