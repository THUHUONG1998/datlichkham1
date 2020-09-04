@extends('pages.layout.layouts')
@section('title')
Thêm một bệnh nhân mới
@endsection
@section('content')
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-head">
                        <div class="page-toolbar">
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line boxless tabbable-reversed">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="portlet box green">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Xuất đơn thuốc </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form action="{{route('exportdonthuoc', $chitietkham->id)}}" class="form-horizontal" >
                                                @csrf
                                                @method('PUT')
                                                    <div class="form-body">
                                                    <div class="form-group">
                                                        <label><b>Đơn thuốc</b> </label>
                                                        <textarea value ="donthuoc" rows="10" class="form-control"  name="donthuoc">{{$chitietkham->donthuoc}} </textarea>
                                                        @error('donthuoc')
                                                            <p style="color: red;"><i><b>{{$message}}</b></i></p>
                                                        @enderror
                                                    </div>   
                                                    <div class="form-actions top">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green">In đơn thuốc</button>
                                                                <a href ="{{route('chitietbenhnhan.index')}}" class="btn default">Cancel</a>
                                                            </div>
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
            @endsection
