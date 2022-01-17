<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
    <img src="{{asset('img/bobobox logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Bobobox</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('img/g logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="https://medium.com/@bagusrama019" class="d-block">Guddd.</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-header">Pages</li>
        <li class="nav-item">
            <a href="#" class="nav-link active @if(!request()->is('/home/roomtype*')) collapsed @endif">
            <i class="nav-icon fas fa-fw fa-table"></i>
            <p>
                Roomtype
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview @if(request()->is('/home/roomtype*')) show @endif">
            <li class="nav-item">
                <a href="{{url('/home/roomtype/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/home/roomtype')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
                </a>
            </li>
            </ul>
        </li>

        <!-- RoomMaster -->
        <li class="nav-item">
            <a href="#" class="nav-link active @if(!request()->is('/home/rooms*')) collapsed @endif" data-toggle="collaspse" data-target="#roomMaster">
            <i class="nav-icon fas fa-fw fa-box"></i>
            <p>
                Room
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul id="roomMaster" class="nav nav-treeview @if(request()->is('/home/rooms*')) show @endif">
            <li class="nav-item">
                <a href="{{url('/home/rooms/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/home/rooms')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
                </a>
            </li>
            </ul>
        </li>

        <!-- CustomerMaster -->
        <li class="nav-item">
            <a href="#" class="nav-link active @if(!request()->is('/home/customer*')) collapsed @endif" data-toggle="collaspse" data-target="#CustomerMaster">
            <i class="nav-icon fas fa-fw fa-users"></i>
            <p>
            Customer
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul id="CustomerMaster" class="nav nav-treeview @if(request()->is('/home/customer*')) show @endif">
            <li class="nav-item">
                <a href="{{url('/home/customer/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/home/customer')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
                </a>
            </li>
            </ul>
        </li>

        <!-- DepartmentMaster -->
        <li class="nav-item">
            <a href="#" class="nav-link active @if(!request()->is('/home/department*')) collapsed @endif" data-toggle="collaspse" data-target="#DepartmentMaster">
            <i class="nav-icon fas fa-fw fa-users"></i>
            <p>
            Department
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul id="DepartmentMaster" class="nav nav-treeview @if(request()->is('/home/department*')) show @endif">
            <li class="nav-item">
                <a href="{{url('/home/department/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/home/department')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
                </a>
            </li>
            </ul>
        </li>

        <!-- StaffMaster -->
        <li class="nav-item">
            <a href="#" class="nav-link active @if(!request()->is('/home/staff*')) collapsed @endif" data-toggle="collaspse" data-target="#StaffMaster">
            <i class="nav-icon fas fa-fw fa-users"></i>
            <p>
            Staff
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul id="StaffMaster" class="nav nav-treeview @if(request()->is('/home/staff*')) show @endif">
            <li class="nav-item">
                <a href="{{url('/home/staff/create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/home/staff')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
                </a>
            </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('home/booking/create')}}">
                <i class="fas fa-fw fa-hotel"></i>
                <span>Booking</span>
            </a>
        </li>

        <!-- logout -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('home/adminlogin')}}">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
    <!-- <h5>Account, {{ Session::get('name') }}!</h5>
    <p class="text-center"><a href="/logout"><button type="submit" class="btn btn-primary">Log out</button></a></p>
    </div> -->
</aside>
<!-- /.control-sidebar -->