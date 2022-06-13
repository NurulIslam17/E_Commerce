<nav class="sidebar sidebar-offcanvas bg-primary" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      
      <ul class="nav">
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/addUser')}}">
            <span class="menu-icon">
            <i class="fa-solid fa-user-plus"></i>
            </span>
            <span class="menu-title text-white">Add User</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('viewUser')}}">
            <span class="menu-icon">
            <i class="fa-solid fa-users"></i>
            </span>
            <span class="menu-title text-white">View Users</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/addProduct')}}">
            <span class="menu-icon">
            <i class="fa-solid fa-cart-plus"></i>
            </span>
            <span class="menu-title text-white">Add Products</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/viewProduct')}}">
            <span class="menu-icon">
            <i class="fa-solid fa-basket-shopping"></i>
            </span>
            <span class="menu-title text-white">View Products</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/showOrder')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title text-white">Orders</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/icons/mdi.html">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title text-white">Icons</span>
          </a>
        </li>

      </ul>
    </nav>
