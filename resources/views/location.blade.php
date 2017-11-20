<!-- @extends('welcome') 
@section('sidebar')
<form class="form-horizontal" action="{{url('search')}}" method="POST" role="form">
    {!! csrf_field() !!}
    <fieldset>
    
     <p class="well col-md-6 col-xs-offset-3" style="color: red">กรุณากรอกสถานที่การตรวจวัด</p><br><br><br><br>
    <div class="form-group">
      <label class="col-sm-2 control-label col-xs-offset-3">สถานที่ :</label> 
      <div class="col-sm-3">
        <input type="text" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label col-xs-offset-3">ตำบล :</label> 
      <div class="col-sm-3">
        <input type="text" name="tambon">
        </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label col-xs-offset-3">อำเภอ   :</label> 
      <div class="col-sm-3">
        <input type="text" name="amphoe">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label col-xs-offset-3">จังหวัด  :</label> 
      <div class="col-sm-3">
        <input type="text" name="county">
      </div>
    </div>
    <center><button id="submitButton" name="submitButton" class="btn btn-success">Search</button></center> <br>
    </fieldset>
  </form>
  @stop
 -->