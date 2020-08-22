@extends('pages.layout.layouts')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-social-dribbble font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Bảng chuyên khoa</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                <th>STT</th>
                                <th>Tên Chuyên Khoa</th>
                                <th>Tên Bệnh Viện</th>
                                <th width="280px">Action</th>
                                    @foreach ($chuyenkhoa as $key => $value)
                                        <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $value->tenchuyenkhoa }}</td>
                                        <td>{{ $value->benhvien->tenbenhvien}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('chuyenkhoa.edit',$value->id) }}">Edit</a>
                                        </td>
                                        </tr>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! $chuyenkhoa->links() !!}
    </div>
</div>
@endsection