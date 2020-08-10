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
                                    <i class="fa fa-gift"></i>Thêm chuyên khoa </div>
                            </div>
                            <div class="portlet-body form">
                               <form action="{{route('chuyenkhoa.store')}}" method="post" class="horizontal-form">
                                   @csrf
                                    <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên chuyên khoa</label>
                                                    <input  name = "tenchuyenkhoa" type="text" id="tenchuyenkhoa" class="form-control" placeholder="Tên chuyên khoa">
                                                </div>
                                                @error('tenchuyenkhoa')
                                                <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Bệnh viện:</label>
                                                    <select name="id_benhvien" class="form-control">
                                                        <option value="" default>---Chọn bệnh viện---</option>
                                                        @foreach($benhvien as $bv)
                                                        <option value="{{$bv->id}}" >{{$bv->tenbenhvien}}</option>  
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                    @error('id_benhvien')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        <div class="form-actions right">
                                            <button type="submit" class="btn blue">
                                                <i class="fa fa-check"></i> Save</button>
                                                <a class="btn default" href="{{ route('benhnhan.index') }}"> Cancel</a>
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


