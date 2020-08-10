@extends('pages.layout.layouts')
@section('content')
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-head">
                        <div class="page-title">
                            <h1>Users Datatables
                                <small>users datatable samples</small>
                            </h1>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Simple Table</span>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('benhvien.create') }}">Create new hospital</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                  <th>STT</th>
                                                  <th>Tên Bệnh Viện</th>
                                                  <th>Địa chỉ</th>
                                                  <th>Số điện thoại</th>
                                                  <th width="280px">Action</th>
                                                </tr>
                                                @foreach ($benhvien as $key => $value)
                                                  <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $value->tenbenhvien }}</td>
                                                    <td>{{ $value->diachi }}</td>
                                                    <td>{{$value->sodienthoai}}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('benhvien.edit',$value->id) }}">Edit</a>
                                                        <button class="btn btn-danger" data-userid= {{$value->id}} data-toggle="modal" data-target="#myModal{{ $i}}">Delete</button>
                                                    </td>
                                                  </tr>
                                                  <div class="modal modal-danger fade" id="myModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                                                          <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                                                        </div>
                                                        <form action="{{route('benhvien.destroy', $value->id)}}" method="post">
                                                            {{method_field('delete')}}
                                                            {{csrf_field()}}
                                                          <div class="modal-body">
                                                          <p class="text-center">
                                                            Bạn có chắc chắn muốn xóa bệnh viện <b> {{ $value->tenbenhvien }} </b> không?
                                                          </p>
                                                              <input type="hidden" name = "id_benhvien" id="benhvien_id" value="">

                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger" data-target="myModal{{ $i }}" >Xóa ngay</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                </div>

                                                @endforeach

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                </div>
            </div>
           

        <!-- END CONTAINER -->
@endsection