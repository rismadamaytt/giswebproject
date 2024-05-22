<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">TV Digital <sup>Information</sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('qoedata') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Qoe Parameters</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('qosdata') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Qos Parameters</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('pemancar') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Data Pemancar</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('article') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Article List</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('surveylist') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> Survey List</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profile</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </ul>