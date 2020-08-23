  <!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper"  >
    <div class="page-sidebar navbar-collapse collapse" >
        <ul class="page-sidebar-menu  " style = "height : 500px; " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="heading">        
                <h3 class="uppercase">Menu</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                    <span class="title">Admin</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">User</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{route('users.index')}}" class="nav-link " >Bảng User </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('users.create')}}" class="nav-link " > Thêm User mới </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('profile')}}" class="nav-link " > Thông tin cá nhân </a>
                            </li>
                        </ul>
                    </li>
                    @can('role-list')
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Roles</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{route('roles.index')}}" class="nav-link " >Bảng Roles </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('roles.create')}}" class="nav-link " > Thêm Roles mới </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('permission-list')
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <span class="title">Permissions</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{route('permission.index')}}" class="nav-link " >Bảng Permissions </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{route('permission.create')}}" class="nav-link " > Thêm Permissions mới </a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                    <span class="title">Bệnh viện</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('benhvien.index')}}" class="nav-link ">
                            <span class="title">Bảng bệnh viện</span>
                            <span class="badge badge-danger"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Chuyên khoa</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                @can('chuyenkhoa-list')
                    <li class="nav-item  ">
                        <a href="{{route('chuyenkhoa.index')}}" class="nav-link ">
                            <span class="title">Bảng chuyên khoa
                            </span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('chuyenkhoa.create')}}" class="nav-link ">
                            <span class="title">Thêm chuyên khoa mới
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                    <span class="title">Bác sĩ</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                @can('bacsi-list')
                    <li class="nav-item  ">
                        <a href="{{route('bacsi.index')}}" class="nav-link ">
                            <span class="title">Bảng bác sĩ</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('bacsi.create')}}" class="nav-link "> 
                            <span class="title">Thêm bác sĩ</span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="?p=" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                    <span class="title">Khung giờ</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                @can('khunggio-list')
                    <li class="nav-item  ">
                        <a href="{{route('khunggio.index')}}" class="nav-link ">
                            <span class="title">Bảng khung giờ</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('khunggio.create')}}" class="nav-link ">
                            <span class="title">Thêm khung giờ mới</span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                    <span class="title">Bệnh nhân</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('benhnhan.index')}}" class="nav-link ">
                            <span class="title">Bảng bệnh nhân</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('benhnhan.create')}}" class="nav-link ">
                            <span class="title">Thêm bệnh nhân mới</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('chitietbenhnhan.index')}}" class="nav-link ">
                            <span class="title">Chi tiết bệnh nhân</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
</div>
    