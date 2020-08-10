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
                <div class="page-title">
                    <h1>New User Profile | Account
                        <small>user account page</small>
                    </h1>
                </div>
                <div class="page-toolbar">
                    <div class="btn-group btn-theme-panel">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-settings"></i>
                        </a>
                        <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <h3>THEME</h3>
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-default" data-theme="default">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Dark Header</span>
                                        </li>
                                        <li class="theme-color theme-color-light active" data-theme="light">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Light Header</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                    <h3>LAYOUT</h3>
                                    <ul class="theme-settings">
                                        <li> Theme Style
                                            <select class="layout-style-option form-control input-small input-sm">
                                                <option value="square">Square corners</option>
                                                <option value="rounded" selected="selected">Rounded corners</option>
                                            </select>
                                        </li>
                                        <li> Layout
                                            <select class="layout-option form-control input-small input-sm">
                                                <option value="fluid" selected="selected">Fluid</option>
                                                <option value="boxed">Boxed</option>
                                            </select>
                                        </li>
                                        <li> Header
                                            <select class="page-header-option form-control input-small input-sm">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </li>
                                        <li> Top Dropdowns
                                            <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                <option value="light">Light</option>
                                                <option value="dark" selected="selected">Dark</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Mode
                                            <select class="sidebar-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Menu
                                            <select class="sidebar-menu-option form-control input-small input-sm">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Position
                                            <select class="sidebar-pos-option form-control input-small input-sm">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </li>
                                        <li> Footer
                                            <select class="page-footer-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">User</span>
                </li>
            </ul>
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
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-home"></i> Overview </a>
                                    </li>
                                    <li class="active">
                                        <a href="page_user_profile_1_account.html">
                                            <i class="icon-settings"></i> Account Settings </a>
                                    </li>
                                    <li>
                                        <a href="page_user_profile_1_help.html">
                                            <i class="icon-info"></i> Help </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="portlet light bordered">
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 37 </div>
                                    <div class="uppercase profile-stat-text"> Projects </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 51 </div>
                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 61 </div>
                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                </div>
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
                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="{{count($errors) > 0 ? '':'active'}}">
                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                            </li>
                                            <li class="{{count($errors) > 0 ? 'active':''}}">
                                                <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                            </li>
                                        </ul>
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
                                                        <label name= "danhso" class="control-label">Danh số</label>
                                                        <input type="text" placeholder="Danh số" class="form-control" value="{{$profile->manhanvien}}"/> </div>
                                                    <div class="form-group">
                                                        <label name= "ngaysinh" class="control-label">Ngày sinh</label>
                                                        <input class="form-control" data-provide="datepicker" name="ngaysinh" data-toggle="datepicker" autocomplete="off" id="ngaysinh"  value="{{$profile->ngaysinh}}">
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
                                                    <div class="form-group">
                                                        <label class="control-label">Ghi chú</label>
                                                        <textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        
                                                        <button type ="submit" class="btn green">Save Changes</button>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane {{count($errors) > 0 ? 'active':''}}" id="tab_1_3">
                                                @include('pages.layout.errors')
                                                <form action="{{route('changePassword')}}">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input name = "old_password" type="password" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input type="password" name = "new_password" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input name ="confirm-password"  type="password" class="form-control" /> </div>
                                                    <div class="margin-top-10">
                                                        <button class="btn green"> Change Password </button>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
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