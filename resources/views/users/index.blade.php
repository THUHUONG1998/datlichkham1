@extends('pages.layout.layouts')
@section('title')
Bảng User
@endsection
@section('content')
        <div class="page-content-wrapper">
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
                <div class="col-sm-3">
                    <div class="pull-right">
                        <form class="search-form" action="{{route('users.index')}}" method="GET">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" name = "key" id = "key" class="form-control input-sm" placeholder="Search..." name="query">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                         
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-social-dribbble font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Simple Table</span>
                                </div>
                                <div class="col-sm-10">
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                                        <button class="btn btn-danger"  data-toggle="modal" data-target="#import">Import</button>
                                        <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                                        <button class="btn btn-warning"  data-toggle="modal" data-target="#export">Export</button>

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-scrollable">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Avatar</th>
                                                <th>Email</th>
                                                <th>Danh số</th>
                                                <th>Giới tính</th>
                                                <th>Số điện thoại</th>
                                                <th>Roles</th>
                                                <th width="150px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $user)
                                            <tr>
                                                <td>{{++$i }}</td>
                                                <td>{{$user->username }}</td>
                                                <td><img src="{{$user->avatar}}" width="70px" class="img-circle"></td>
                                                <td>{{$user->email }}</td>
                                                <td>{{$user->manhanvien}}</td>
                                                <td>{{($user->gioitinh == 1)? 'Nam':'Nữ'}}</td>
                                                <td>{{$user->sodienthoai}}</td>
                                                <td>
                                                  @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                      <label class="badge badge-success">{{ $v }}</label>
                                                    @endforeach
                                                  @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
                </div>
                    {!! $data->links() !!}
                
            </div>
        </div>
        <div class="modal modal-danger fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    <!-- {{method_field('delete')}} -->
                    {{csrf_field()}}
                        <input type="file" name="file" class="form-control">
                        <div class="modal-footer">
                            <button class="btn btn-success">Import User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal-export -->
        <div class="modal modal-danger fade" id="export" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{route('export')}}" method="GET" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <input type="date" name="start-date" class="form-control">
                        <input type="date" name="end-date" class="form-control">
                        <div class="modal-footer">
                            <button class="btn btn-success">Export User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection