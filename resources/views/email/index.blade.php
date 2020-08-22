@extends('pages.layout.layouts')
@section('title')
Gửi email
@endsection
@section('content')
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Gửi email thông báo </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form action="{{route('guimail', $chitietbenhnhan->id)}}" class="form-horizontal" method="post">
                                                @csrf
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Họ và tên</label>
                                                            <div class="col-md-4">
                                                                <input value="{{$chitietbenhnhan->hovaten}}" name="hovaten" type="text" class="form-control spinner" placeholder="Họ và tên bệnh nhân"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Địa chỉ</label>
                                                            <div class="col-md-4">
                                                                <input  value="{{$chitietbenhnhan->benhnhan->diachi}}" name="diachi" type="text" class="form-control spinner" placeholder="Địa chỉ"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Email</label>
                                                            <div class="col-md-4">
                                                                <input value="{{$chitietbenhnhan->benhnhan->email}}" name="email" type="email" class="form-control spinner" placeholder="Email"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Ngày khám</label>
                                                            <div class="col-md-4">
                                                            <input value="{{date_format(date_create($chitietbenhnhan->ngaykham), "d-m-Y")}}" class="form-control spinner" data-provide="datepicker" name="ngaykham" autocomplete="off" id="ngaykham"  /></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Bệnh viện</label>
                                                            <div class="col-md-4">
                                                            <select name="id_benhvien" class="form-control">
                                                                    <option value="">--Chọn bệnh viện--</option>
                                                                    @foreach($benhvien as $value)
                                                                    <option value="{{$chitietbenhnhan->id_benhvien}}" {{($chitietbenhnhan->id_benhvien == $value->id)? 'selected':'select'}}>{{$value->tenbenhvien}}</option>
                                                                    @endforeach
                                                            </select>
                                                                @error('id_benhvien')
                                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                                @enderror 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Chuyên khoa</label>
                                                            <div class="col-md-4">
                                                            <select name="id_chuyenkhoa" class="form-control">
                                                                @foreach($chuyenkhoa as $value)
                                                                    <option value="{{$chitietbenhnhan->id_chuyenkhoa}}" {{($chitietbenhnhan->id_chuyenkhoa == $value->id)? 'selected':'select'}}>{{$value->tenchuyenkhoa}}</option>
                                                                @endforeach
                                                            </select>
                                                                @error('id_chuyenkhoa')
                                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                                @enderror 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Khung Giờ</label>
                                                            <div class="col-md-4">
                                                            <select name="id_khunggio" class="form-control">

                                                                 @foreach($khunggio as $value)
                                                                    <option value="{{$chitietbenhnhan->id_khunggio}}"{{($chitietbenhnhan->id_khunggio == $value->id)? 'selected':'select'}}>{{$value->khunggio}}</option>
                                                                @endforeach  
                                                                   
                                                            </select>
                                                                @error('id_bacsi')
                                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                                @enderror 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Bác sĩ</label>
                                                            <div class="col-md-4">
                                                            <select name="id_bacsi" class="form-control">
                                                                @foreach($bacsi as $value)
                                                                    <option value="{{$chitietbenhnhan->id_bacsi}}"{{($chitietbenhnhan->id_bacsi == $value->id)? 'selected':'select'}}>{{$value->tenbacsi}}</option>
                                                                @endforeach  
                                                                   
                                                            </select>
                                                                @error('id_bacsi')
                                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                                @enderror 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions top">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">Gửi email</button>
                                                               
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