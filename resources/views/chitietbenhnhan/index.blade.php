@extends('pages.layout.layouts')
@section('title')
Chỉnh sửa
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Bệnh viện Chợ Rẫy </a>
                    </li>
                    <li>
                        <a href="#tab_1_3" data-toggle="tab"> Phòng khám Phúc Ngọc </a>
                    </li>
                    
                    <div class="pull-right">
                    </div>
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                        <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        @if($message = Session::get('success'))
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @endif
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Bảng bệnh nhân</span>
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
                                        <th>Chuyên khoa</th>
                                        <th>Bác sĩ</th>
                                        <th>khung giờ</th>
                                        <th width="200px">Action</th>
                                        @foreach ($chitietbenhnhanchoray as $key => $value)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $value->hovaten }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->benhnhan->ngaysinh)->format('d/m/Y') }}</td>
                                            <td>{{($value->benhnhan->gioitinh == 1)? 'Nam':'Nữ'}}</td>
                                            <td>{{$value->chuyenkhoa->tenchuyenkhoa}}</td>
                                            <td>{{$value->bacsi->tenbacsi}}</td>
                                            <td>{{$value->khunggio->khunggio}}</td>
                                            <td>    
                                                <a class="btn btn-primary" href="{{ route('chitietkham',$value->id) }}">Chi tiết</a>
                                                <a class="btn btn-success" href="{{ route('lichsu',$value->id) }}" >Lịch sử</a>
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
                    </div>
                    <!--tab_1_2-->
                    <div class="tab-pane" id="tab_1_3">
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
                                        <th>Chuyên khoa</th>
                                        <th>Bác sĩ</th>
                                        <th>khung giờ</th>
                                        <th width="200px">Action</th>
                                        @foreach ($chitietbenhnhanphucngoc as $key => $value)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $value->hovaten }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->benhnhan->ngaysinh)->format('d/m/Y') }}</td>
                                            <td>{{($value->benhnhan->gioitinh == 1)? 'Nam':'Nữ'}}</td>
                                            <td>{{$value->chuyenkhoa->tenchuyenkhoa}}</td>
                                            <td>{{$value->bacsi->tenbacsi}}</td>
                                            <td>{{$value->khunggio->khunggio}}</td>
                                            <td>    
                                                <a class="btn btn-primary" href="{{ route('chitietkham',$value->id) }}">Chi tiết</a>
                                                <a class="btn btn-success" href="{{ route('lichsu',$value->id) }}" >Lịch sử</a>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection