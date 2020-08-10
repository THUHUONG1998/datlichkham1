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
                                
                            </div>
                            <div class="portlet-body form">
                             
                               <form action="{{route('benhvien.store')}}" method="post" class="horizontal-form">
                               @csrf
                                    <div class="form-body">
                                        <h3 class="form-section">Nhập thông tin bệnh viện</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên bệnh viện</label>
                                                    <input  name = "tenbenhvien" type="text" id="id_benhvien" class="form-control" placeholder="Tên bệnh viện" value="{{old('tenbenhvien')}}">
                                                </div>
                                                @error('tenbenhvien')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Địa chỉ</label>
                                                    <input name="diachi" type="text"  class="form-control" placeholder="Địa chỉ" value="{{old('sodienthoai')}}">
                                                </div>
                                                @error('diachi')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Số điện thoại</label>
                                                    <input name="sodienthoai" type="text"  class="form-control" placeholder="Số điện thoại" value="{{old('sodienthoai')}}">
                                                </div>
                                                @error('sodienthoai')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>  
                                         </div>         
                                    <div class="form-actions right">
                                        <button type="submit" class="btn blue"> <i class="fa fa-check"></i> Save</button>
                                        <a href="{{route('benhvien.index')}}" class="btn default"> Cancel </a>
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
