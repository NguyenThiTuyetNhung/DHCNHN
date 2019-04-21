  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <div class="info" style=" position: absolute; right: 20px; ">
      <a href="{{ route('admin.logout') }}" class="d-block btn btn-primary" >Log Out</a>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
      <span class="brand-text font-weight-light">QL phụ tùng xe máy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
       <li class="nav-item has-treeview @if(Route::currentRouteName() == "admin.products.index" || Route::currentRouteName() == "admin.products.create") {{" menu-open"}} @endif">
        <a href="{{ route('admin.products.index') }}" class="nav-link @if(Route::currentRouteName() == "admin.products.index" || Route::currentRouteName() == "admin.products.create") {{" active"}} @endif">
          <i class="nav-icon fa fas fa-shopping-basket"></i>
          <p>
            Quản lý sản phẩm
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.products.index') }}" class="nav-link @if(Route::currentRouteName() == "admin.products.index") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Danh sách sản phẩm</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.products.create') }}" class="nav-link @if(Route::currentRouteName() == "admin.products.create") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Thêm sản phẩm</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview @if(Route::currentRouteName() == "admin.distributions.index" || Route::currentRouteName() == "admin.distributions.create") {{" menu-open"}} @endif">
        <a href="{{ route('admin.distributions.index') }}" class="nav-link  @if(Route::currentRouteName() == "admin.distributions.index" || Route::currentRouteName() == "admin.distributions.create") {{" active"}} @endif">
          <i class="nav-icon fa fas fa-users"></i>
          <p>
            Quản lý hãng
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.distributions.index') }}" class="nav-link  @if(Route::currentRouteName() == "admin.distributions.index") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Danh sách hãng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.distributions.create') }}" class="nav-link  @if(Route::currentRouteName() == "admin.distributions.create") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Thêm hãng</p>
            </a>
          </li>
        </ul>
      </li>  
      <li class="nav-item has-treeview">
        <a href="{{ route('admin.orders.index') }}" class="nav-link  @if(Route::currentRouteName() == "admin.orders.index") {{" active"}} @endif">
          <i class="nav-icon fa fas fa-shopping-cart"></i>
          <p>
            Quản lý đơn hàng
            <i class="right fa"></i>
          </p>
        </a>
      </li>
          <li class="nav-item has-treeview">
        <a href="{{ route('admin.statistics.index') }}" class="nav-link  @if(Route::currentRouteName() == "admin.statistics.index") {{" active"}} @endif">
          <i class="nav-icon fa fas fa-shopping-cart"></i>
          <p>
           Thống kê
            <i class="right fa"></i>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview @if(Route::currentRouteName() == "admin.users.index" || Route::currentRouteName() == "admin.members.index") {{" menu-open"}} @endif">
        <a href="#" class="nav-link @if(Route::currentRouteName() == "admin.users.index" || Route::currentRouteName() == "admin.members.index") {{" active"}} @endif">
          <i class="nav-icon fa fas fa-users"></i>
          <p>
            Quản lý tài khoản
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link @if(Route::currentRouteName() == "admin.users.index") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Danh sách khách hàng</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.members.index') }}" class="nav-link @if(Route::currentRouteName() == "admin.members.index") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Danh sách nhân viên</p>
            </a>
          </li>
        </ul>
      </li> 
      <li class="nav-item has-treeview @if(Route::currentRouteName() == "admin.users.index" || Route::currentRouteName() == "admin.members.index") {{" menu-open"}} @endif">
        <a href="#" class="nav-link @if(Route::currentRouteName() == "admin.users.index" || Route::currentRouteName() == "admin.members.index") {{" active"}} @endif">
          <i class="nav-icon fa fas fa-users"></i>
          <p>
            Quản lý danh mục
            <i class="right fa fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.group_products.index') }}" class="nav-link @if(Route::currentRouteName() == "admin.group_products.index") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Danh sách danh mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.group_products.create') }}" class="nav-link @if(Route::currentRouteName() == "admin.group_products.create") {{" active"}} @endif">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Thêm danh mục</p>
            </a>
          </li>
        </ul>
      </li> 
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>