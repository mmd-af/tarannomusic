<nav class="navbar navbar-expand navbar-light adminTopbarColor topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-light d-md-none rounded-circle">
        <i class="fa fa-bars" style="margin-top: 4px;"></i>
    </button>


<!-- Topbar Navbar -->
    <ul class="navbar-nav mr-auto">

        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="ml-2 d-none d-lg-inline text-white small">{{auth()->user()->firstname}}</span>
                {{--                <img class="img-profile rounded-circle" src="{{ asset('/images/user.jpg') }}">--}}
                <i class="fas fa-user fa-sm fa-fw ml-2 text-gray-100"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-right"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw ml-2 text-gray-400"></i>
                    خروج
                </a>
            </div>
        </li>
    </ul>

</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{auth()->user()->firstname}}</h5>
                <button class="close ml-0" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"> آیا برای خروج مطمئن هستید...؟</div>
            <div class="modal-footer">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-primary" type="submit"> خروج</button>
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal"> لغو</button>
            </div>
        </div>
    </div>
</div>
