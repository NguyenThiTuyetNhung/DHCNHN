<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title></title>
	<base href="{{ asset('') }}">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="public/admin-fe/plugins/font-awesome/css/font-awesome.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="public/admin-fe/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
			</li>
		</ul>

	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="public/admin-fe/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					 style="opacity: .8">
			<span class="brand-text font-weight-light">QL phụ tùng xe máy</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="public/admin-fe/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">Nguyễn Nhung</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					<li class="nav-item has-treeview menu-open">
						<a href="#" class="nav-link @yield('active_users') ">
							<i class="nav-icon fa fas fa-shopping-basket"></i>
							<p>
								Quản lý người dùng
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLySanPham/DanhSachSanPham.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách người dùng</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLySanPham/ThemSP.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm người dùng</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_adv')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý Quảng cáo
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyHang/DanhSachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách Quảng cáo</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyHang/ThemHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm Quảng cáo</p>
								</a>
							</li>
						</ul>
					</li>  
					<li class="nav-item has-treeview">
						<a href="./pages/QuanLyDonHang/DanhSachDonHang.html" class="nav-link">
							<i class="nav-icon fa fas fa-shopping-cart"></i>
							<p>
								Quản lý đơn hàng
								<i class="right fa"></i>
							</p>
						</a>
					</li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_contact')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý công ty
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách công ty</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm công ty</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_companies')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý công ty
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách công ty</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm công ty</p>
								</a>
							</li>
						</ul>
					</li> 
					
					{{-- <li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_products')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý sản phẩm
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách sản phẩm</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm sản phẩm</p>
								</a>
							</li>
						</ul>
					</li>  --}}
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_group_products')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý nhóm sản phẩm
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách nhóm sản phẩm</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm nhóm sản phẩm</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_cart')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý giỏ hàng
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách giỏ hàng</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm giỏ hàng</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_distribution')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý hãng
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách hãng</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm hãng</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_statistive')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý thống kê
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách thống kê</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm thống kê</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_news')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý tin tức
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách tin tức</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm tin tức</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_order')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý đơn hàng
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách đơn hàng</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm đơn hàng</p>
								</a>
							</li>
						</ul>
					</li> 
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link @yield('active_size')">
							<i class="nav-icon fa fas fa-users"></i>
							<p>
								Quản lý kích thước
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachKhachHang.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Danh sách kích thước</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./pages/QuanLyTaiKhoan/DanhSachTaiKhoan.html" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Thêm kích thước</p>
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

