@extends('pages.layout.layouts')
@section('title')
User Profile
@endsection
@section('content')
<head>
<meta charset="utf-8" />
<title></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<link href="assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/croppie.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="favicon.ico" /> </head>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-head">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-sidebar">
                        <div class="portlet light profile-sidebar-portlet bordered">
                            @if(Auth::check())
                            <div class="profile-userpic">
                            @if(Auth::user()->avatar)
                                <img  src="{{Auth::user()->avatar}}" class="img-responsive" alt=""> </div>
                                @else
                                <img  src="upload/avatar/default.jpg" class="img-responsive" alt=""> </div>
                            @endif
                            @endif
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{ $profile->hovaten}} </div>
                            </div>
                            <div class="profile-userbuttons">
                            <label class="btn btn-circle green btn-sm" style="cursor: pointer;">
                                Cập nhật avatar<input type="file" id="upload_image" style="display: none;">
                            </label>
                            </div>
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li>
                                    @foreach(Auth::user()->getRoleNames() as $v)
                                                    <p class="text-muted text-center">{{$v}}</p>
                                                @endforeach
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Thông tin</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane {{count($errors) > 0 ? '':'active'}}" id="tab_1_1">
                                                <form action="{{route('update-profile')}}" method="POST">
                                                @csrf
                                                    <div class="form-group">
                                                        <label class="control-label">User Name </label>
                                                        <input name ="username" type="text" placeholder="User Name" class="form-control" value="{{$profile->username}}"/> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Họ và tên</label>
                                                        <input name ="hovaten" type="text" placeholder="Họ và tên" class="form-control" value="{{$profile->hovaten}}"/> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input name= "email" type="email" placeholder="Email" class="form-control" value="{{$profile->email}}"/> </div>
                                                    <div class="form-group">
                                                        <label name = "diachi" class="control-label">Địa chỉ</label>
                                                        <input type="text" placeholder="Địa chỉ" class="form-control" value="{{$profile->diachi}}"/> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Password</label>
                                                        <input name = "password" type="password" placeholder="Password" class="form-control" /> </div>
                                                        <div class="form-group">
                                                        <label class="control-label">Confirm - Password</label>
                                                        <input name ="confirm-password" type="password" placeholder="Confirm-password" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Giới tính</label>
                                                        <select name = "gioitinh" class="form-control">
                                                            <option value="" default>--Chọn giới tính--</option>
                                                            <option value="1">Nam</option>
                                                            <option value="0">Nữ</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="margiv-top-10">
                                                        
                                                        <button type ="submit" class="btn green">Thay đổi</button>
                                                      
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
        </div>
    </div>
<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload & Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
       <div class="col-md-8 text-center">
        <div id="image_demo" style="width:350px; margin-top:30px"></div>
       </div>
       <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
        <button class="btn btn-success crop_image">Crop & Upload Image</button>
     </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
    </div>
</div>
@endsection
@section('script')
@parent
<script>  
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); 

 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"{{route('croppie')}}",
        type: "POST",
        data:{"upload_image": response},
        dataType:'JSON',
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          location.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
        
      });
    })
  });

});  
</script>
<script src="js/croppie.js"></script>
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
@endsection