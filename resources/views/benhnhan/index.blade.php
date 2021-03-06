@extends('pages.layout.layouts')
@section('title')
Bảng bệnh nhân
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
    <div class="col-sm-3">
        <div class="pull-right">
            <form class="search-form" action="{{route('benhnhan.index')}}" method="GET">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name = "key1" id = "key1" class="form-control input-sm" placeholder="Search..." name="query">
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
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif
                    @if($error = Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endif
                            <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Bảng bệnh nhân</span>
                        </div>
                        <div class="actions">
                        <button class="btn btn-success"  data-toggle="modal" data-target="#exportbenhnhan">Export</button>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Bệnh Nhân</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th width="280px">Action</th>
                                        @foreach ($benhnhan as $key => $value)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $value->hovaten }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->ngaysinh)->format('d/m/Y') }}</td>
                                            <td>{{($value->gioitinh == 1)? 'Nam':'Nữ'}}</td>
                                            <td>{{ $value->sodienthoai }}</td>
                                            <td>{{ $value->email}}</td>
                                            <td>    
                                                <a class="btn btn-info" href="{{ route('benhnhan.edit',$value->id) }}">Sửa TT</a>
                                                <a class="btn btn-success" href="{{ route('lichsu',$value->id) }}" >Lịch sử</a>
                                                <a class="btn btn-light" href="{{ route('datlichkham',$value->id) }}">Đặt lịch</a>
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

    {!! $benhnhan->links() !!}
    </div>
</div>
</div>
<div class="modal modal-danger fade" id="exportbenhnhan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{route('exportbenhnhan')}}" method="GET" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                       
                        <div class="modal-footer">
                            <button class="btn btn-success">Export User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>     
@endsection