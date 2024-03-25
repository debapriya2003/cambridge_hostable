<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Cambridge School | Dashboard</title>

	@include('dashboard.admins.includes.head')

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		@include('dashboard.admins.includes.header')
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		@include('dashboard.admins.includes.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="height: auto;">
			@yield('content')
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">

		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		@include('dashboard.admins.includes.footer')

	</div>
	<!-- ./wrapper -->
	@include('dashboard.admins.includes.footerjs')
	@yield('script')

</body>

</html>