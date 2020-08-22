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
                                    <i class="fa fa-gift"></i>Sửa khung giờ </div>
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
                               <form action="{{route('khunggio.update', $khunggio->id)}}" method="post" class="horizontal-form">
                                   @csrf

                                    <div class="form-body">
                                        <h3 class="form-section">Nhập thông tin</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Khung giờ</label>
                                                    <input  name = "khunggio" type="text" value="{{$khunggio->khunggio}}" class="form-control" placeholder="Họ và tên">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Bệnh viện</label>
                                                    <select name="id_benhvien" class="form-control">
                                                        <option value="" default>---Chọn bệnh viện---</option>
                                                        @foreach($benhvien as $value)
                                                        <option value="{{$value->id}}" {{($khunggio->id_benhvien == $value->id) ? 'selected': ''}}>{{$value->tenbenhvien}}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                </div>
                                        </div>
                                            <div class="form-actions right">
                                                <a href="{{route('khunggio.index')}}" class="btn default">Cancel</a>
                                                <button type="submit" class="btn blue">
                                                    <i class="fa fa-check"></i> Save</button>
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
