<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Syntax | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="Public/themes/AdminLTE/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="Public/themes/AdminLTE/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="Public/themes/AdminLTE/dist/css/skins/_all-skins.min.css">
	<!-- jQuery 2.2.0 -->
	<script src="Public/themes/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js"></script>

</head>
<body class="skin-red sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="index.php" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>D</b>SX</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>DEMO</b>SYNTAX</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="Public/themes/AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Administrator</span>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-sign-out"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

	</div>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="Public/themes/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Administrator</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li class="active">
					<a href="index.php">
						<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="View/credits.php" rel='tab'>
						<i class="fa fa-play"></i> <span>Credits</span>
					</a>
				</li>
			</ul>
		</section>
	</aside>

	<div class="content-wrapper" id="content">
		<?php include 'View/home.php'; ?>
	</div>

	<!-- Bootstrap 3.3.6 -->
	<script src="Public/themes/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="Public/themes/AdminLTE/dist/js/app.min.js"></script>
	<!-- AdminLTE App -->
	<script src="Public/js/main.js"></script>