<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
			<div class="sidebar-brand-icon">
				<i class="fas fa-store"></i>
			</div>
			<div class="sidebar-brand-text mx-7 ml-4">KickShop<sup></sup></div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url()?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>


		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-shoe-prints"></i>
				<strong>Kategori</strong>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Pilih Kategori:</h6>
					<?php echo anchor('welcome','<div class="btn btn-sm collapse-item">Semua kategori</div>')?>
					<?php echo anchor('dashboard/s_pria','<div class="btn btn-sm collapse-item">Sepatu Pria</div>')?>
					<?php echo anchor('dashboard/s_wanita','<div class="btn btn-sm collapse-item">Sepatu Wanita</div>')?>
					<?php echo anchor('dashboard/s_anak','<div class="btn btn-sm collapse-item">Sepatu Anak</div>')?>
				</div>
			</div>
		</li>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
				<i class="fas fa-fw fa-id-card"></i>
				<span>Profil</span>
			</a>
			<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Profil</h6>
					<a class="collapse-item" href="">Ubah profil</a>
					<a class="collapse-item" href="">Ubah kata sandi</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Tables -->
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('dashboard/cari')?>">
				<i class="fas fa-fw fa-money-bill"></i>
				<span>Konfirmasi pembayaran</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Topbar Search -->
				<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="<?php echo base_url('Welcome/search')?>">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>

				<div class="navbar">
					<ul class="nav navbar-nav navbar-right">
						<div class="btn-outline-dark btn">
							<li class="fa fa-cart-plus">
								<?php
								$keranjang = $this->cart->total_items().' items'
								?>
								<?php
								echo anchor('dashboard/detail_keranjang/', $keranjang) ;
								?>
							</li>
						</div>
					</ul>
				</div>

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">

					<!-- Nav Item - Search Dropdown (Visible Only XS) -->

					<div class="topbar-divider d-none d-sm-block">

					</div>

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 smal"><?php ?></span>
							<img class="img-profile rounded-circle" src="<?php echo base_url()?>./assets/img/default-user.jpg">
						</a>
						<!-- Dropdown - User Information
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div> -->
					</li>
				</ul>
				<ul class="na navbar-nav navbar-right">
					<?php if ($this->session->userdata('username')){?>
						<li><?= $user=$this->session->userdata('username')?></li>
						<li><div class="btn btn-outline-danger ml-3"><?= anchor('auth/logout','Logout')?></div></li>
					<?php } else {?>
						<li><div class="btn btn-outline-primary ml-3"><?= anchor('auth','Login')?></div></li>
					<?php }?>

				</ul>

			</nav>


			<!-- End of Topbar -->
			<!--Created by PhpStorm.
             * User: Heri
             * Date: 29/11/2019
             * Time: 19.47
             -->
