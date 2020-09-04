@extends('pages.layout.layouts')
@section('title')
Bảng khung giờ
@endsection
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Bảng khung giờ</span>
                        </div>
                        <div class="actions">
                        
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Khung giờ</th>
                                        <th>Tên Bệnh Viện</th>
                                        <th>Giới hạn</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($khunggio as $key => $value)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $value->khunggio }}</td>
                                        <td>{{ $value->benhvien->tenbenhvien}}</td>
                                        <td>{{ $value->gioihan}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('khunggio.edit',$value->id) }}">Edit</a>
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
    {!! $khunggio->links() !!}
    </div>

</div>






@endsection