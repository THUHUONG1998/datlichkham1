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
                            
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Thống kê
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><button  data-toggle="modal" data-target="#exportBN1"> Bệnh viện</button></li>
                                <li><button  data-toggle="modal" data-target="#exportBN2"> khung giờ</button></li>
                                <li><button  data-toggle="modal" data-target="#exportBN3"> khoảng ngày</button></li>
                                <li><button  data-toggle="modal" data-target="#exportBN4"> khoảng tháng</button></li>
                               
                            </ul>
                            </div>
                            <a class="btn" href="{{route('benhnhan.create')}}">
                               
                            </a>
                           
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
                                        <th>Ngày Khám</th>
                                        <th>Tên Bệnh Viện</th>
                                        <th>Tên Bác Sĩ</th>
                                        <th>Tên Chuyên Khoa</th>
                                        <th>Khung giờ khám</th>
                                        <th width="280px">Action</th>
                                        @foreach ($benhnhan as $key => $value)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $value->hovaten }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->ngaysinh)->format('d/m/Y') }}</td>
                                            <td>{{($value->gioitinh == 1)? 'Nam':'Nữ'}}</td>
                                            <td>{{ $value->sodienthoai }}</td>
                                            <td>{{ $value->email}}</td>
                                            <td>{{ Carbon\Carbon::parse($value->ngaykham)->format('d/m/Y') }}</td>
                                            <td>{{ $value->benhvien->tenbenhvien}}</td>
                                            <td>{{ $value->bacsi->tenbacsi }}</td>
                                            <td>{{ $value->chuyenkhoa->tenchuyenkhoa}}</td>
                                            <td>
                                                @if($value->khunggio)
                                                    {{ $value->khunggio->khunggio }}
                                                @else
                                                    Trống
                                                @endif
                                            </td>
                                            <td>    
                                                <a class="btn btn-primary" href="{{ route('benhnhan.edit',$value->id) }}">Edit</a>
                                                <a class="btn btn-info" href="{{ route('chitietbenhnhan',$value->id) }}">Chi tiết</a>
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
        <div class="modal modal-danger fade" id="exportBN1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{route('exportBN')}}" method="GET" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                       <select name="id_benhvien">
                           @foreach($benhvien as $value)
                            <option value="{{$value->id}}">{{$value->tenbenhvien}}</option>
                           @endforeach
                       </select>
                        <div class="modal-footer">
                            <button class="btn btn-success">Export User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     

        <div class="modal modal-danger fade" id="exportBN2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{route('exportBN')}}" method="GET" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                       <select name="id_benhvien">
                           @foreach($benhvien as $value)
                            <option value="{{$value->id}}">{{$value->tenbenhvien}}</option>
                           @endforeach
                       </select>
                        <div class="modal-footer">
                            <button class="btn btn-success">Export User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal modal-danger fade" id="exportBN3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{route('exportBN3')}}" method="GET" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <!-- <input class="form-control" data-provide="datepicker" name="start-date" data-toggle="datepicker" >
                        <input class="form-control" data-provide="datepicker" nname="end-date" data-toggle="datepicker" > -->
                        <input type="date" name="start-date" class="form-control">
                        <input type="date" name="end-date" class="form-control">
                        <div class="modal-footer">
                            <button class="btn btn-success">Export User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal modal-danger fade" id="exportBN4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
                    </div>
                    <form action="{{route('exportBN')}}" method="GET" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                       <select name="id_benhvien">
                            <option value="1">Tháng 1</option>
                            <option value="2">Tháng 2</option>
                            <option value="3">Tháng 3</option>
                            <option value="4">Tháng 4</option>
                            <option value="5">Tháng 5</option>
                            <option value="6">Tháng 6</option>
                            <option value="7">Tháng 7</option>
                            <option value="8">Tháng 8</option>
                            <option value="9">Tháng 9</option>
                            <option value="10">Tháng 10</option>
                            <option value="11">Tháng 11</option>
                            <option value="12">Tháng 12</option>
                       </select>
                        <div class="modal-footer">
                            <button class="btn btn-success">Export User Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection