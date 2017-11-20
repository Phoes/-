@extends('welcome')

@section('sidebar')


<center><div class="col-md-7 text-center">
                    <div class="box">
                        <div class="box-content">
                         <iframe src="https://www.google.com/maps/d/embed?mid=1R6ylmU9sQC8nAf14DdS-Mtt8Ois" width="640" height="480"></iframe><br><br>
         <div align="center"><i style="font-size:10px" class="fa">&#xf0c8;</i> ค่าน้ำปกติ</div>
         <div align="center"><i style="font-size:10px;color: red" class="fa">&#xf0c8;</i> ค่าน้ำเสี่ยง</div>
         <div align="center"><i style="font-size:10px;color: blue" class="fa">&#xf0c8;</i> ค่าน้ำเย็น</div><br>
         <marquee style="border:#FF0033 2px SOLID">
           @foreach ($data->feeds as $item)
             [ อุณหภูมิ:
              @if ($item->field1 > 30)
                 <font color="red">{{$item->field1}}</font>
              @elseif($item->field1 < 20 )
                    <font color="#0066FF">{{$item->field1}}</font>
              @else {{$item->field1}} @endif
              ความขุ่น: 
              @if ($item->field2 < 4.95)
                <font color="red">{{$item->field2}}</font>
              @else {{$item->field2}} @endif
              @if ($item->field1 > 30 && $item->field2 < 4.95 )
                  <font color="red"> นำ้เสี่ยง </font>
              @elseif($item->field1 < 20  && $item->field2 < 4.95)
                    <font color="red">น้ำเสี่ยง </font>
              @elseif ($item->field1 < 20 && $item->field2 > 4.95)
                  <font color="#0066FF"> น้ำเย็น </font>
              @elseif ($item->field1 > 30 && $item->field2 > 4.95)
                   <font color="red">น้ำร้อน </font>
              @elseif (($item->field1 >20  || $item->field1 < 30 ) && $item->field2 < 4.95)
                   <font color="red">น้ำขุ่น </font>
              @else น้ำปกติ @endif ]

           @endforeach
         </marquee>

                </div>
        </div>
</center></div><br>




@endsection