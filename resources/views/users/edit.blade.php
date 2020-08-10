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
                                    <i class="fa fa-gift"></i> </div>
                            </div>
                            <div class="portlet-body form">
                             
                               <form action="{{route('users.update', $user->id)}}" method="post" class="horizontal-form">
                               @csrf
                               @method('PATCH')
                                    <div class="form-body">
                                        <h3 class="form-section">Person Info</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">UserName</label>
                                                    <input  name = "username" value="{{$user->username}}" type="text" id="username" class="form-control" placeholder="Username" value="{{old('username')}}">
                                                </div>
                                                @error('username')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Họ và tên</label>
                                                    <input value="{{$user->hovaten}}" name="hovaten" type="text" id="hovaten" class="form-control" placeholder="Họ và Tên" value="{{old('hovaten')}}">
                                                </div>
                                                @error('hovaten')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Số điện thoại</label>
                                                    <input value="{{$user->sodienthoai}}" name="sodienthoai" type="text" id="sodienthoai" class="form-control" placeholder="Nhập Số điện thoại" value="{{old('sodienthoai')}}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Danh số</label>
                                                    <input value="{{$user->manhanvien}}" name="manhanvien" type="text" id="manhanvien" class="form-control" placeholder="Danh số" value= "{{old('manhanvien')}}">
                                                </div>
                                                @error('manhanvien')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Email</label>
                                                    <input value = "{{$user->email}}" name="email" type="text" id="lastName" class="form-control" placeholder="Nhập Email" value= "{{old('email')}}">
                                                </div>
                                                @error('email')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Giới tính</label>
                                                    <select name = "gioitinh" class="form-control">
                                                        <option value="1" {{($user->gioitinh == 1)? 'selected':'select'}}>Male</option>
                                                        <option value="0" {{($user->gioitinh == 0)? 'selected':'select'}}>Female</option>                                               
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày tháng năm sinh</label>
                                                    <input value="{{$user->ngaysinh}}" name = "ngaysinh" type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                            </div>
                                        </div>
                                            <h3 class="form-section">Địa chỉ thường trú</h3>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label>Địa chỉ </label>
                                                        <input name="diachi" type="text" class="form-control" placeholder="Nhập địa chỉ thường trú..." value="{{old('diachi')}}"> </div>
                                                </div>
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
