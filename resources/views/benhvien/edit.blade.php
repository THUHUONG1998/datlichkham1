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
                                    <i class="fa fa-gift"></i>Form Actions On Bottom </div>
                            </div>
                            <div class="portlet-body form">
                               <form action="{{route('benhvien.update', $benhvien->id)}}" method="post" class="horizontal-form">
                               @csrf
                               @method('PATCH')
                                    <div class="form-body">
                                        <h3 class="form-section">Person Info</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên bệnh viện</label>
                                                    <input value="{{$benhvien->tenbenhvien}}"  name = "tenbenhvien" type="text" id="id_benhvien" class="form-control" placeholder="Tên bệnh viện" value="{{old('username')}}">
                                                </div>
                                                @error('tenbenhvien')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Địa chỉ</label>
                                                    <input value="{{$benhvien->diachi}}" name="diachi" type="text"  class="form-control" placeholder="Địa chỉ" value="{{old('hovaten')}}">
                                                </div>
                                                @error('diachi')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Địa chỉ</label>
                                                    <input value="{{$benhvien->sodienthoai}}" name="sodienthoai" type="text"  class="form-control" placeholder="Số điện thoại" value="{{old('sodienthoai')}}">
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
