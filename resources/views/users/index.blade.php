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
                                    <span class="caption-subject font-green bold uppercase">User Table</span>
                                </div>
                                <div class="col-sm-10">
                                    <div class="pull-right">
                                        <button class="btn btn-danger"  data-toggle="modal" data-target="#import">Import</button>
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
                                                <th>Giới tính</th>
                                                @can('user-list')
                                                <th>Số điện thoại</th>
                                                @endcan
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
                                                <td>{{($user->gioitinh == 1)? 'Nam':'Nữ'}}</td>
                                                @can('user-list')
                                                <td>{{$user->sodienthoai}}</td>
                                                @endcan
                                                <td>
                                                  @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                      <label class="badge badge-success">{{ $v }}</label>
                                                    @endforeach
                                                  @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
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