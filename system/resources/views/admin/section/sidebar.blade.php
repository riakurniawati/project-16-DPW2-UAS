@php 
    function checkRouteActive($route){
     if(Route::current()->uri == $route) return 'active';
    }
  @endphp
   
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public/assets') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ria Komputer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/assets') }}/img/foto.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if (Auth::check())
            {{ request()->user()->nama }}
            @elseif( Auth::guard('admin')->check())
            <strong> {{ Auth::guard('admin')->user()->nama }}</strong>
            <br>As Admin
            @elseif( Auth::guard('pengguna')->check())
            <strong> {{ Auth::guard('pengguna')->user()->nama }}</strong>
           <br> As Pengguna
            @else
              Silahkan Login
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
             </li>
            <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Product
                  </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{url('admin/kategori')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                  Kategori
                  </p>
                </a> 
              </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>