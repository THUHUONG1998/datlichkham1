@extends('pages.layout.layouts')
@section('title')
Thêm một bệnh nhân mới
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#tab_1" data-toggle="tab"> 2 Columns </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_0">
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Form Actions On Bottom
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if($mess=Session::get('error'))
                                    <div class="alert alert-danger">
                                        <li>{{ $mess }}</li>
                                    </div>
                                    @endif
                                    <form action="{{route('benhnhan.store')}}" method="post" class="horizontal-form">
                                        @csrf
                                        <div class="form-body">
                                            <h3 class="form-section">Person Info</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Họ và tên</label>
                                                        <input name="hovaten" type="text" id="hovaten" class="form-control" placeholder="Nhập Họ và tên bệnh nhân..." value="{{old('hovaten')}}" >
                                                        @error('hovaten')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Số điện thoại</label>
                                                        <input name="sodienthoai" type="text" id="sodienthoai" class="form-control" placeholder="Nhập Số điện thoại"  value="{{old('sodienthoai')}}">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input name="email" type="text" id="email" class="form-control" placeholder="Nhập Email" name="email"  value="{{old('email')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày tháng năm sinh</label>
                                                        <input class="form-control" data-provide="datepicker" name="ngaysinh" data-toggle="datepicker" autocomplete="off" id="ngaysinh"  value="{{old('ngaysinh')}}">
                                                        <!-- <input name = "ng" type="text" class="form-control" placeholder="dd/mm/yyyy"> </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Giới tính</label>
                                                        <select name="gioitinh" class="form-control">
                                                            <option value="1">Male</option>
                                                            <option value="0">Female</option>
                                                        </select>
                                                        <span class="help-block"> Select your gender </span>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                            </div>
                                            <h3 class="form-section">Địa chỉ thường trú</h3>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label>Địa chỉ </label>
                                                        <input type="text" class="form-control" placeholder="Nhập địa chỉ thường trú..." name="diachi" value="" > </div>
                                                </div>
                                            </div>
                                            <h3 class="form-section">Thông tin đặt lịch</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày Khám</label>
                                                        <input class="form-control" data-provide="datepicker" name="ngaykham" autocomplete="off" id="ngaykham"  />
                                                        <!-- <input name = "ng" type="text" class="form-control" placeholder="dd/mm/yyyy"> </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Bệnh viện</label>
                                                                <select name="id_benhvien" class="form-control">
                                                                    <option value="">--Chọn bệnh viện--</option>
                                                                    @foreach($benhvien as $value)
                                                                    <option value="{{$value->id}}">{{$value->tenbenhvien}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Chuyên Khoa</label>
                                                                <select name="id_chuyenkhoa" class="form-control">
                                                                    <option value="">--Chọn chuyên khoa--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Khung giờ</label>
                                                                <select name="id_khunggio" class="form-control">
                                                                    <option value="" default>--Chọn khung giờ--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Bác sĩ</label>
                                                                <select name="id_bacsi" class="form-control">
                                                                <option value="" default>--Chọn bác sĩ--</option>
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="pull-right">
                                                                <a href = "{{route('benhnhan.index')}}" class="btn default">Cancel</a>
                                                                <button type="submit" class="btn blue">
                                                                    <i class="fa fa-check"></i> Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
@parent
<script type="text/javascript">
    var url = "{{route('show-chuyenkhoainbenhnhan')}}";
    $("select[name='id_benhvien']").change(function(){
        var id_benhvien = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url,
            method: 'POST',
            data: {
              id_benhvien: id_benhvien,
                _token: token
            },
            success: function(data) {
                $("select[name='id_chuyenkhoa'").html('');
                $.each(data, function(key, value){
                    $("select[name='id_chuyenkhoa']").append(
                        "<option value=" + value.id + ">" + value.tenchuyenkhoa + "</option>"
                    );
                });
            }
        });
    });
</script>
<script type="text/javascript">
    var url1 = "{{route('show-khunggioinbenhnhan')}}";
    $("select[name='id_benhvien']").change(function(){
        var id_benhvien = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url1,
            method: 'POST',
            data: {
              id_benhvien: id_benhvien,
                _token: token
            },
            success: function(data) {
                $("select[name='id_khunggio'").html('');
                $.each(data, function(key, value){
                    $("select[name='id_khunggio']").append(
                        "<option value=" + value.id + ">" + value.khunggio + "</option>"
                    );
                });
            }
        });
    });
</script>
<script type="text/javascript">
    var url2 = "{{route('show-bacsi')}}";
    $("select[name='id_chuyenkhoa']").change(function(){
        var id_chuyenkhoa = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url2,
            method: 'POST',
            data: {
                id_chuyenkhoa: id_chuyenkhoa,
                _token: token
            },
            success: function(data) {
                $("select[name='id_bacsi'").html('');
                $.each(data, function(key, value){
                    $("select[name='id_bacsi']").append(
                        "<option value=" + value.id + ">" + value.tenbacsi + "</option>"
                    );
                });
            }
        });
    });
</script>
<script type="text/javascript">
$('[data-toggle="datepicker"]').datepicker({
    format:"yyyy-mm-dd",
    minDate:0,
    endDate:'+0d',
    todayBtn:"linked",
    todayHighlight:true,
    orientation:"left",
    autoclose:true,
    beforeShowDay: function(d)
    {
      var day = d.getDay();
      return [(day!=0)];
    },
  });
  </script>
  <script type="text/javascript">
$('#ngaykham').datepicker({
    format:"yyyy-mm-dd",
    minDate:0,
    startDate:'+0d',
    todayBtn:"linked",
    todayHighlight:true,
    orientation:"left",
    autoclose:true,
    daysOfWeekDisabled:[0],
    beforeShowDay: function(d)
    {
      var day = d.getDay();
      return [(day!=0)]; //khong lay chu nhat
    },
  });
  </script>
@endsection