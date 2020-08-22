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
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Sửa Permission </div>
                            </div>
                            <div class="portlet-body form">
                               <form action="{{route('permission.update', $permission->id)}}" method="post" class="horizontal-form">
                               @csrf
                               @method('PATCH')
                                    <div class="form-body">
                                        <h3 class="form-section">Person Info</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên Permission</label>
                                                    <input value="{{$permission->name}}"  name = "name" type="text" class="form-control"  value="{{old('username')}}">
                                                </div>
                                                @error('name')
                                                    <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                @enderror
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Guard_name</label>
                                                    <input value="{{$permission->guard_name}}" name="guard_name" type="text"  class="form-control"  value="{{old('guard_name')}}" readonly>
                                                </div>
                                               
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
