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
                             
                               <form action="{{route('guimail', $benhnhan->id)}}" method="post" class="horizontal-form">
                               @csrf
                                    <div class="form-body">
                                        <h3 class="form-section">Person Info</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Họ và tên</label>
                                                    <input value="{{$benhnhan->hovaten}}" name = "hovaten"  type="text" id="username" class="form-control" placeholder="Username" value="{{old('username')}}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Ngày sinh</label>
                                                    <input value="{{$benhnhan->ngaysinh}}" name="ngaysinh" type="text" id="hovaten" class="form-control" placeholder="Họ và Tên" value="{{old('hovaten')}}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Số điện thoại</label>
                                                    <input  value="{{$benhnhan->sodienthoai}}" name="sodienthoai" type="text" id="sodienthoai" class="form-control" placeholder="Nhập Số điện thoại" value="{{old('sodienthoai')}}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Email</label>
                                                    <input value="{{$benhnhan->email}}" name="email" type="text" id="manhanvien" class="form-control" placeholder="Danh số" value= "{{old('manhanvien')}}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Ngày khám</label>
                                                    <input value="{{$benhnhan->ngaykham}}" name="ngaykham" type="text" id="lastName" class="form-control" placeholder="Nhập Email" value= "{{old('email')}}">
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Giới tính</label>
                                                    <select name = "gioitinh" class="form-control">
                                                    <option value="" default>--Chọn giới tính--</option>
                                                   
                                                        <option value="1" selected>Male</option>                                                          
                                                  
                                                        <option value="0" selected>Female</option>
                                                                                                     
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                          
                                        </div>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label>Địa chỉ </label>
                                                        <input value="{{$benhnhan->diachi}}" name="diachi" type="text" class="form-control" placeholder="Nhập địa chỉ thường trú..." value="{{old('diachi')}}"> </div>
                                                </div>
                                            </div>
                                                       
                                    <div class="form-actions right">
                                        <button type="submit" class="btn blue"> <i class="fa fa-check"></i> Save</button>
                                        <a href="#" class="btn default"> Cancel </a>
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
