
@extends('pages.layout.layouts')
@section('title')
Bảng Permission
@endsection
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Simple Table</span>
                        </div>
                        <div class="col-sm-10">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('permission.create') }}"> Create New Permission</a>
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
                                    <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($permission as $key => $value)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->guard_name }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('permission.edit',$value->id) }}">Edit</a>
                                        
                                        <button class="btn btn-danger" data-permissionid = "{{$value->id}}" data-toggle="modal" data-target="#deletePermission">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="modal modal-danger fade" id="deletePermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                                            <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                                        </div>
                                        <form action="{{route('permission.destroy', '$value->id')}}" method="get">
                                            {{method_field('delete')}}
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                                <p class="text-center">
                                                Bạn có chắc chắn muốn xóa quyền này không?
                                                </p>
                                                    <input type="hidden" id="permission_id" value="">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" data-target="myModal{{ $i }}" >Xóa ngay</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
                <!-- END SAMPLE TABLE PORTLET--> 
            </div>
        </div>
        {!! $permission->links() !!}
    </div>
</div>
@endsection