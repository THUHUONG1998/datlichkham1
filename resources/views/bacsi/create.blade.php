@extends('pages.layout.layouts')

@section('content')
<!-- BEGIN PAGE BASE CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
<div class="row">
        <div class="col-md-12">
            <div class="tabbable-line boxless tabbable-reversed">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Form Actions On Bottom </div>
                            </div>
                            <div class="portlet-body form">
                               <!-- BEGIN FORM-->
                               @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                </div>
                               @endif
                               @if($mess=Session::get('error'))
                                <div class="alert alert-danger">
                                <li>{{ $mess }}</li>
                                </div>
                                @endif
                               <form action="{{route('bacsi.store')}}" method="post" class="horizontal-form">
                                   @csrf
                                    <div class="form-body">
                                        <h3 class="form-section">Person Info</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên Bác Sĩ</label>
                                                    <input  name = "tenbacsi" type="text" id="hovaten" class="form-control" placeholder="Họ và tên">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="control-label">Học vị</label>
                                                    <input name="hocvi" type="text" id="sodienthoai" class="form-control" placeholder="Số điện thoại">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Bệnh viện</label>
                                                    <select name="id_benhvien" class="form-control">
                                                        <option value="" default>---Chọn bệnh viện---</option>
                                                        @foreach($benhvien as $bv)
                                                        <option value="{{$bv->id}}" >{{$bv->tenbenhvien}}</option>  
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Chuyên khoa</label>
                                                        <select name="id_chuyenkhoa" class="form-control">
                                                            <option value="" default>--Chọn chuyên khoa--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                            <div class="form-actions right">
                                                <a href="{{route('bacsi.index')}}" class="btn default">Cancel</a>
                                                <button type="submit" class="btn blue">
                                                    <i class="fa fa-check"></i> Save</button>
                                            </div>
                                        </form>
                                <!-- END FORM-->
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
@section('script')
@parent
<script type="text/javascript">
    var url = "{{route('show-chuyenkhoa')}}";
    $("select[name='id_benhvien']").change(function(){
        var id_benhvien = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: url,
            method: 'POST',
            data: {
              id_benhvien: id_benhvien,
                _token: token
            },
            success: function(data) {
                $("select[name='id_chuyenkhoa'").html('');
                $.each(data, function(key, value){
                    $("select[name='id_chuyenkhoa']").append(
                        "<option value=" + value.id + ">" + value.tenchuyenkhoa + "</option>"
                    );
                });
            }
        });
    });
</script>
@endsection
