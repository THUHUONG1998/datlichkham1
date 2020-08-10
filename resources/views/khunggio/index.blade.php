@extends('pages.layout.layouts')
@section('title')
Bảng khung giờ
@endsection
@section('content')
<!-- BEGIN CONTAINER -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Users Datatables
                    <small>users datatable samples</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->

        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Tables</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Users Tables</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Simple Table</span>
                        </div>
                        <div class="actions">
                        <a class="btn btn-warning" href="{{route('khunggio.create')}}">Create Khung giờ</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Khung giờ</th>
                                        <th>Tên Bệnh Viện</th>
                                        <th>Giới hạn lượt đặt</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($khunggio as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->khunggio }}</td>
                                        <td>{{ $value->benhvien->tenbenhvien}}</td>
                                        <td>{{ $value->gioihandat}}</td>       
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('khunggio.edit',$value->id) }}">Edit</a>
                                           {!! Form::open(['method' => 'DELETE','route' => ['khunggio.destroy', $value->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                        </td>
                                    </tr>
                                         @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

    {!! $khunggio->links() !!}
    <!-- END SAMPLE TABLE PORTLET-->
</div>


<!-- END PAGE BASE CONTENT -->

<!-- END CONTENT BODY -->

<!-- END CONTENT -->


<!-- END CONTAINER -->
@endsection