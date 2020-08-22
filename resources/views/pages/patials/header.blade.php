<div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <div class="page-logo">
                
            </div>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <div class="page-actions">
                <div class="btn-group">
                    <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="hidden-sm hidden-xs">TRUNG TÂM ĐẶT LỊCH ONLINE&nbsp;</span>
                            <i class="fa fa-angle-down"></i>
                        </button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-docs"></i>Hướng dẫn </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-tag"></i> Giới thiệu </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-top">
                
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="separator hide"> </li>
                        
                        <li class="separator hide"> </li>
                        
                        <li class="separator hide"> </li>
                       
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            @if(Auth::check())    
                            <span class="username username-hide-on-mobile"> {{Auth::user()->username}} </span>
                                @if(Auth::user()->avatar)
                                <img class="img-circle" src="{{Auth::user()->avatar}}" /> 
                                @else 
                                <img src="upload/avatar/default.jpg" class="img-circle" > 
                                @endif
                            @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{route('profile')}}">
                                        <i class="icon-user"></i> Thông tin của tôi </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                            <span class="sr-only">Toggle Quick Sidebar</span>
                            <i class="icon-logout"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>