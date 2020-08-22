@extends('pages.layout.layouts')
@section('title')
Bảng User
@endsection
@section('content')
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-head">
                </div>
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
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-social-dribbble font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Roles Table</span>
                                </div>
                                <div class="col-sm-10">
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Roles</a>
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
                                                <th>Guard_name</th>
                                                <th width="150px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $key => $value)
                                            <tr>
                                                <td>{{++$i }}</td>
                                                <td>{{$value->name }}</td>
                                                <td>{{$value->guard_name }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('roles.edit',$value->id) }}">Edit</a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $value->id],'style'=>'display:inline']) !!}
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
                    {!! $roles->links() !!}
                
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