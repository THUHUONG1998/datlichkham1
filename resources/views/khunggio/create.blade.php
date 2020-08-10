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
                               <form action="{{route('khunggio.store')}}" method="post" class="horizontal-form">
                               @csrf
                                    <div class="form-body">
                                        <h3 class="form-section">Person Info</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <span class="help-block"> Khung giờ được tạo từ  </span>
                                                    <label class="control-label">Khung giờ</label>
                                                    <input  name = "khunggio" type="text" class="form-control" placeholder="Khung Giờ" value="{{old('khunggio')}}">
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Bệnh viện</label>
                                                    <select name = "id_benhvien" class="form-control">
                                                    <option value="" default>--Chọn bệnh viện--</option>
                                                    @foreach($benhvien as $value)
                                                      <option value="{{$value->id}}" >{{$value->tenbenhvien}}</option>  
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Giới hạn</label>
                                                    <input  name = "gioihandat" type="text" class="form-control" placeholder="Giới hạn" value="{{old('gioihan')}}">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-actions right">
                                        <button type="submit" class="btn blue"> <i class="fa fa-check"></i> Save</button>
                                        <a href="{{route('khunggio.index')}}" class="btn default"> Cancel </a>
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
