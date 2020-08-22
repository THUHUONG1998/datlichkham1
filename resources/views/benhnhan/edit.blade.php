@extends('pages.layout.layouts')

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
                                    <i class="fa fa-gift"></i>Sửa bệnh nhân </div>
                            </div>
                                <div class="portlet-body form">
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
                                    <form action="{{route('benhnhan.update', $benhnhan->id)}}" method="post" class="horizontal-form">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-body">
                                            <h3 class="form-section">Nhập thông tin</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Họ và tên</label>
                                                        <input value ="{{$benhnhan->hovaten}}" name="hovaten" type="text" id="hovaten" class="form-control" placeholder="Nhập Họ và tên bệnh nhân..." value="{{old('hovaten')}}" >
                                                        @error('hovaten')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Số điện thoại</label>
                                                        <input value ="{{$benhnhan->sodienthoai}}" name="sodienthoai" type="text" id="sodienthoai" class="form-control" placeholder="Nhập Số điện thoại"  value="{{old('sodienthoai')}}">
                                                        @error('sodienthoai')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input value ="{{$benhnhan->email}}" name="email" type="text" id="email" class="form-control" placeholder="Nhập Email" name="email"  value="{{old('email')}}">
                                                        @error('email')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày tháng năm sinh</label>
                                                        <input value="{{date_format(date_create($benhnhan->ngaysinh), "d-m-Y")}}" class="form-control" data-provide="datepicker" name="ngaysinh" data-toggle="datepicker" autocomplete="off" id="ngaysinh"  >
                                                        @error('ngaysinh')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
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
                                                            <option value="1" {{($benhnhan->gioitinh == 1)? 'selected':'select'}}>Nam</option>
                                                            <option value="0" {{($benhnhan->gioitinh == 0)? 'selected':'select'}}>Nữ</option>
                                                        </select>
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
                                                        <input value ="{{$benhnhan->diachi}}" type="text" class="form-control" placeholder="Nhập địa chỉ thường trú..." name="diachi" value="" > </div>
                                                        @error('diachi')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror 
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
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
$('[data-toggle="datepicker"]').datepicker({
    format:"dd-mm-yyyy",
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
    format:"dd-mm-yyyy",
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