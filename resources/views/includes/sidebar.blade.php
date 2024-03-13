<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#roles" aria-expanded="false" aria-controls="roles">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Role</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="roles">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.role.create') }}">Add Role</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.role.list') }}">List Role</a></li>
          </ul>
        </div>
      </li> 
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#brnach_category" aria-expanded="false" aria-controls="brnach_category">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Branch Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="brnach_category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.branch_categorys.create') }}">Add Branch Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.branch_categorys.list') }}">List Branch Category</a></li>
          </ul>
        </div>
      </li> 
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#branch" aria-expanded="false" aria-controls="branch">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Branch</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="branch">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.branch.create') }}">Add Branch</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.branch.list') }}">List Branch</a></li>
          </ul>
        </div>
      </li> 
    </ul>
  </nav>