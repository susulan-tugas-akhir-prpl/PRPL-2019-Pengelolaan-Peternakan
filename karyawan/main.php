<?php
require '../config/koneksi.php'; session_start(); if(empty($_SESSION['id_krw'])){header('location:log.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<!--	<title>Top Menu Style - Ace Admin</title>-->

	<meta name="description" content="top menu &amp; navigation" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="../assets/css/dropzone.min.css" />

	<!-- page specific plugin scripts -->
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="../assets/js/dataTables.buttons.min.js"></script>
	<script src="../assets/js/buttons.flash.min.js"></script>
	<script src="../assets/js/buttons.html5.min.js"></script>
	<script src="../assets/js/buttons.print.min.js"></script>
	<script src="../assets/js/buttons.colVis.min.js"></script>
	<script src="../assets/js/dataTables.select.min.js"></script>

	<!-- text fonts -->
	<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.min.js"></script>
		<script src="../assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="" class="navbar-brand">
					<small>
						Daus Company
					</small>
				</a>

				<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
					<span class="sr-only">Toggle user menu</span>

					<img src="../assets/images/avatars/user.jpg" alt="Jason's Photo" />
				</button>

				<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
				<ul class="nav ace-nav">

					<li class="light-blue dropdown-modal user-min">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="../assets/images/avatars/avatar2.png" alt="Jason's Photo" />
							<span class="user-info">
								<small>Welcome</small>
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="profile.html">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="proscon/prosescon.php?thisposition=<?php echo base64_encode('logout'); ?>">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">

				<form class="navbar-form navbar-left form-search" role="search">
					<div class="form-group">
						<input type="text" placeholder="search" />
					</div>

					<button type="button" class="btn btn-mini btn-info2">
						<i class="ace-icon fa fa-search icon-only bigger-110"></i>
					</button>
				</form>
			</nav>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar      h-sidebar">

				<!--<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>--><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="hover">
						<a href="main.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="main.php?thisaction=<?php echo base64_encode('kebutuhan') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Form Kebutuhan </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="main.php?thisaction=<?php echo base64_encode('penjualan') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Form Penjualan </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="main.php?thisaction=<?php echo base64_encode('data_ayam') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Data Ayam </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="hover">
						<a href="main.php?thisaction=<?php echo base64_encode('data_telur') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Data Telur </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>
		</ul><!-- /.nav-list -->
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">
				<?php
				if (empty($_GET['thisaction'])){require 'page/home.php';}
				else{
					$act=base64_decode($_GET['thisaction']);
					if ($act=='kebutuhan'){
						require 'page/kebutuhan.php';
					}
					elseif ($act=='penjualan') {
						require 'page/penjualan.php';
					}
					elseif ($act=='data_ayam') {
						require 'page/data_ayam.php';
					}
					elseif ($act=='data_telur') {
						require 'page/data_telur.php';
					}
				}
				?>
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content./ -->

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="../assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

		<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="../assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="../assets/js/dropzone.min.js"></script>

<!-- ace scripts -->
<script src="../assets/js/ace-elements.min.js"></script>
<script src="../assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
</body>
</html>