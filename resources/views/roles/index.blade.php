@extends('pages.layout.layouts')
<style>
  table, thead, tbody{ 
    margin:auto;
    border: 1px solid rgb(179, 159, 165);
    background-color: rgb(170, 193, 199);
  }
  </style>
@section('title')
Bảng Role
@endsection
@section('content')
<div class="page-content-wrapper">
  <!-- BEGIN CONTENT BODY -->
  <div class="page-content">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Role Management</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
        </div>
      </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    
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
          <span class="active">Role Tables</span>
      </li>
  </ul>
    <table class="table table-hover" style="width:800px">
      <thead>
        <tr>
          <th style="border-bottom-color: rosybrown; background-color:rgb(95, 200, 207);" >No</th>
          <th style="border-bottom-color: rosybrown ; background-color:rgb(95, 200, 207);">Name</th>
          <th width="280px" style="border-bottom-color: rosybrown  ; background-color:rgb(95, 200, 207);">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($roles as $key => $role)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $role->name }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('roles.show',$role->id) }}">show</a>

            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>

            <button class="btn btn-danger" data-roleid="{{$role->id}}" data-toggle="modal" data-target="#deleteRole">Delete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
      <div class="modal modal-danger fade" id="deleteRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
              <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
            </div>
            <form action="{{route('roles.destroy1')}}" method="get">
              <!-- {{method_field('delete')}} -->
              {{csrf_field()}}
              <div class="modal-body">
                <p class="text-center">
                  Bạn có chắc chắn muốn xóa quyền này không?
                </p>
                <input type="hidden" id="role_id" name="id_role" value="">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-target="myModal{{ $i }}">Xóa ngay</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
              </div>
            </form>
          </div>
        </div>
      </div>  
    {!! $roles->render() !!}
  </div>
</div>




@endsection