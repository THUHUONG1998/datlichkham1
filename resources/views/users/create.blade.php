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
                                    <i class="fa fa-gift"></i>Thêm user mới </div>
                            </div>
                            <div class="portlet-body form">
                             
                               <form action="{{route('users.store')}}" method="post" class="horizontal-form">
                               @csrf
                                    <div class="form-body">
                                        <h3 class="form-section">Nhập thông tin </h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">UserName</label>
                                                    <input  name = "username" type="text" id="username" class="form-control" placeholder="Username" value="{{old('username')}}">
                                                </div>
                                                @error('username')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Họ và tên</label>
                                                    <input name="hovaten" type="text" id="hovaten" class="form-control" placeholder="Họ và Tên" value="{{old('hovaten')}}">
                                                </div>
                                                @error('hovaten')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Số điện thoại</label>
                                                    <input name="sodienthoai" type="text" id="sodienthoai" class="form-control" placeholder="Nhập Số điện thoại" value="{{old('sodienthoai')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Email</label>
                                                    <input name="email" type="text" id="lastName" class="form-control" placeholder="Nhập Email" value= "{{old('email')}}">
                                                </div>
                                                @error('email')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Password</label>
                                                    <input name = "password" type="password" id="password" class="form-control" placeholder="Password">
                                                </div>
                                                @error('password')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Comfim-password</label>
                                                    <input name="confirm-password" type="password" id="comfimpassword" class="form-control" placeholder="Comfim-password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Giới tính</label>
                                                    <select name = "gioitinh" class="form-control">
                                                    <option value="" default>--Chọn giới tính--</option>
                                                        <option value="1">Male</option>
                                                        <option value="0">Female</option>
                                                    </select>
                                                    <span class="help-block"> Select your gender </span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <strong>Role:</strong>
                                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                            </div>                 
                                    <div class="form-actions right">
                                        <button type="submit" class="btn blue"> <i class="fa fa-check"></i> Save</button>
                                        <a href="{{route('users.index')}}" class="btn default"> Cancel </a>
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
