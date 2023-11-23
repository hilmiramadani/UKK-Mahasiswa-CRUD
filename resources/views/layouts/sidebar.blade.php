<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <i class="bi bi-person-vcard" style="font-size: 45px;"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
      <div class="row text-center">
        <div class="col px-2">
          <div class="text-left">Harvard</div>
        </div>
        <div class="col px-2">
          <div class="text-left">University</div>
        </div>
      </div>
    </div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('products') }}">
      <i class="bi bi-mortarboard-fill"></i>
      <span>Data Mahasiswa</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="bi bi-person-fill"></i>
      <span>Profile</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>