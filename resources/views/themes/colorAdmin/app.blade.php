<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Zuhal Admin | Dashboard </title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/css/default/app.min.css')}}" rel="stylesheet" />
	<link href="{{asset('colorAdmin/plugins/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
	<link href="{{asset('colorFrontend/template/assets/css/e-commerce/app.min.css')}}" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@may-the-fourth/dist/alpine.min.js" defer></script>
	<!-- ================== END BASE CSS STYLE ================== -->
	@yield('styles')
	@livewireStyles
</head>
<body>
	<!-- begin #page-loader -->
	{{-- <div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div> --}}
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		@include('themes.colorAdmin.includes.header')
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include('themes.colorAdmin.includes.sidebar')
		{{-- @livewire('admin.sidemenu') --}}
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			@yield('content')
		</div>
		<!-- end #content -->
		
		<!-- begin theme-panel -->
		@include('themes.colorAdmin.includes.themes-panel')
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('colorAdmin/js/app.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/js/theme/default.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	@yield('scripts')
	@livewireScripts
</body>
</html>