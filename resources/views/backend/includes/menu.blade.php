

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>



    <!-- Nav Item - Full Name -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('full-name') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Full Name</span></a>
    </li>

    <!-- Nav Item - Calculator -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('calculator-page') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Calculator</span></a>
    </li>

    <!-- Nav Item - Calculator -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.create') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Product</span>
        </a>
    </li>

    <!-- Nav Item - Manage Product -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.manage') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Product</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
