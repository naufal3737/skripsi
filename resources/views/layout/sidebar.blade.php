<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{asset('assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dashboard Sidebar</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-gradient-primary':''}}" href="{{route('dashboard.home')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        @can('user management')
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/user-management*') ? 'active bg-gradient-primary':''}}" href="{{route('dashboard.user.management')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">group_add</i>
            </div>
            <span class="nav-link-text ms-1">User Management</span>
          </a>
        </li>
        @endcan
        @can('validate')
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/validate-file*') ? 'active bg-gradient-primary':''}}" href="{{route('dashboard.validate')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">task</i>
            </div>
            <span class="nav-link-text ms-1">Validate File</span>
          </a>
        </li>
        @endcan
        @can('use audit')
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/audit*') ? 'active bg-gradient-primary':''}}" href="{{route('dashboard.audit')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">fact_check</i>
            </div>
            <span class="nav-link-text ms-1">Audit</span>
          </a>
        </li>

        @endcan
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
