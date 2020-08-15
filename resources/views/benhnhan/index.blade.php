@extends('pages.layout.layouts')
@section('title')
Bảng bệnh nhân
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
            <div class="page-title">
                <h1>Patient Datatables
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
                <span class="active">Patient Tables</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        @if($error = Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                        @endif
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Simple Table</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-success" href="{{ route('benhnhan.create') }}">Thêm bệnh nhân mới</a>
                            
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
                                                <a class="btn btn-primary" href="{{ route('benhnhan.edit',$value->id) }}">Sửa TT</a>
                                                <a class="btn btn-warning" href="{{ route('exportdonthuoc') }}">Lịch sử</a>
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
       
@endsection