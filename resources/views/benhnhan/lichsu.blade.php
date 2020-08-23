@extends('pages.layout.layouts')

@section('content')

 <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-head">
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Lịch sử</span>
                                    </div>
                                    <div class="pull-right">
                                        <a href = "{{route('benhnhan.index')}}" class="btn default">Trở về</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="mt-element-list">
                                        <div class="mt-list-head list-todo font-white bg-red">
                                            <div class="list-head-title-container">
                                           
                                                <h3 class="list-title">{{$chitietkham[0]->benhnhan->hovaten}}</h3>
                                                <div class="list-head-count">
                                                   
                                                </div>
                                            </div>
                                            <a href="javascript:;">
                                                <div class="list-count pull-right bg-red-mint">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mt-list-container list-todo">
                                            <div class="list-todo-line"></div>
                                            <ul>
                                            <?php $i = 1;?>
                                            @foreach($chitietkham as $value)
                                                <li class="mt-list-item">
                                                    <div class="list-todo-icon bg-white">
                                                        <i class="fa fa-paint-brush"></i>
                                                    </div>
                                                    <div class="list-todo-item">
                                                        <a class="list-toggle-container font-white" data-toggle="collapse" href="#task-{{$value->id}}" aria-expanded="false">
                                                            <div class="list-toggle done uppercase bg-dark">
                                                                <div class="list-toggle-title bold">Lần đi khám {{$i}}</div>
                                                            </div>
                                                        </a>
                                                        <div class="task-list panel-collapse collapse" id="task-{{$value->id}}">
                                                            <ul>
                                                                <li class="task-list-item done">
                                                                    <div class="task-icon">
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-file-image-o"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="task-status">
                                                                        <a class="done" href="javascript:;">
                                                                            <i class="fa fa-check"></i>
                                                                        </a>
                                                                        <a class="pending" href="javascript:;">
                                                                            <i class="fa fa-close"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="task-content">
                                                                        <h4 class="uppercase bold">
                                                                            <a href="javascript:;">Triệu chứng</a>
                                                                        </h4>
                                                                        <p>Ho, sốt</p>
                                                                    </div>
                                                                </li>
                                                                <li class="task-list-item done">
                                                                    <div class="task-icon">
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="task-status">
                                                                        <a class="done" href="javascript:;">
                                                                            <i class="fa fa-check"></i>
                                                                        </a>
                                                                        <a class="pending" href="javascript:;">
                                                                            <i class="fa fa-close"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="task-content">
                                                                        <h4 class="uppercase bold">
                                                                            <a href="javascript:;">Đơn thuốc</a>
                                                                        </h4>
                                                                        <p>{{$value->donthuoc}}</p>
                                                                    </div>
                                                                </li>
                                                                <li class="task-list-item done">
                                                                    <div class="task-icon">
                                                                        <a href="javascript:;">
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="task-status">
                                                                        <a class="done" href="javascript:;">
                                                                            <i class="fa fa-check"></i>
                                                                        </a>
                                                                        <a class="pending" href="javascript:;">
                                                                            <i class="fa fa-close"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="task-content">
                                                                        <h4 class="uppercase bold">
                                                                            <a href="javascript:;">Chi tiết</a>
                                                                        </h4>
                                                                        <p>Tên bệnh viện: {{$value->chitietbenhnhan->benhvien->tenbenhvien}}</p>
                                                                        <p>Tên chuyên khoa:{{$value->chitietbenhnhan->chuyenkhoa->tenchuyenkhoa}}</p>
                                                                        <p>Tên bác sĩ:{{$value->chitietbenhnhan->bacsi->tenbacsi}}</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="task-footer bg-grey">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <a class="task-trash" href="javascript:;">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <a class="task-add" href="javascript:;">
                                                                            <i class="fa fa-plus"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php $i++; ?>
                                             @endforeach
                                            </ul>
                                            
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

@endsection
