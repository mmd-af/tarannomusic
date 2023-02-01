<ul class="navbar-nav adminSliderColor sidebar sidebar-dark accordion pr-0" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('site.home.index')}}">
        {{--        <div class="sidebar-brand-icon rotate-n-15">--}}
        {{--            <i class="fas fa-laugh-wink"></i>--}}
        {{--        </div>--}}
        <div class="sidebar-brand-text">taranomusic.ir</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> داشبورد </span></a>
    </li>

    <!-- Nav Item - teachers -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.teachers.index')}}">
            <i class="fas fa-window-restore"></i>
            <span>اساتید</span>
        </a>
    </li>
    <!-- Nav Item - instruments -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.instruments.index')}}">
            <i class="fas fa-window-restore"></i>
            <span>سازها</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.posts.index')}}">
            <i class="fas fa-window-restore"></i>
            <span>مقالات</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.messages.index')}}">
            <i class="fas fa-window-restore"></i>
            <span>پیام ها</span>
        </a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
