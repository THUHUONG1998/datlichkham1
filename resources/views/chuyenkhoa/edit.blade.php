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
                                    <i class="fa fa-gift"></i>Sửa chuyên khoa </div>
                            </div>
                            <div class="portlet-body form">
                             
                               <form action="{{route('chuyenkhoa.update', $chuyenkhoa->id)}}" method="post" class="horizontal-form">
                               @csrf
                               @method('PATCH')
                                    <div class="form-body">
                                        <h3 class="form-section">Sửa thông tin chuyên khoa</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Chuyên Khoa</label>
                                                    <input value="{{$chuyenkhoa->tenchuyenkhoa}}" name = "chuyenkhoa" type="text" id="username" class="form-control" placeholder="Username" value="{{old('username')}}">
                                                </div>
                                                @error('chuyenkhoa')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
  
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="control-label">Bệnh viện</label>
                                                    <select   name = "id_benhvien" class="form-control">
                                                        @foreach ($benhvien as $key => $value)
                                                            <option value="$value->tenbenhvien" {{($chuyenkhoa->id_benhvien == $value->id)? 'selected':'select'}}>{{$value->tenbenhvien}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('id_benhvien')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="form-actions right">
                                        <button type="submit" class="btn blue"> <i class="fa fa-check"></i> Save</button>
                                        <a href="{{route('chuyenkhoa.index')}}" class="btn default"> Cancel </a>
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
