<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Zuhal | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/css/default/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url({{ asset('colorAdmin/img/login-bg/login-bg-11.jpg')}}"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Zuhal</b> Admin Page</h4>
					<p>
						The special and secret formulation of the many years of experience that has been shaped by the past can now be enjoyed by modern life.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>Zuhal</b> Admin
						<small>ZUHAL Tonic Juice Herbs</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="form-group m-b-15">
							<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group m-b-15">
							<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">
							Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40 text-inverse">
							Not a member yet? Click <a href="{{ route('register') }}">here</a> to register.
						</div>
						<hr />
						<p class="text-center text-grey-darker mb-0">
							&copy; Color Admin All Right Reserved 2020
						</p>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
		
		<!-- begin theme-panel -->
		<div class="theme-panel theme-panel-lg">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content">
				<h5>App Settings</h5><ul class="theme-list clearfix">
					<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{asset('colorAdmin/css/default/theme/red.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="{{asset('colorAdmin/css/default/theme/pink.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{asset('colorAdmin/css/default/theme/orange.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="{{asset('colorAdmin/css/default/theme/yellow.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="{{asset('colorAdmin/css/default/theme/lime.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="{{asset('colorAdmin/css/default/theme/green.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-teal" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="{{asset('colorAdmin/css/default/theme/aqua.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{asset('colorAdmin/css/default/theme/blue.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{asset('colorAdmin/css/default/theme/purple.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="{{asset('colorAdmin/css/default/theme/indigo.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="{{asset('colorAdmin/css/default/theme/black.min.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
				</ul>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Header Fixed</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="header-fixed" id="headerFixed" value="1" checked />
							<label class="custom-control-label" for="headerFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Header Inverse</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="header-inverse" id="headerInverse" value="1" />
							<label class="custom-control-label" for="headerInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Sidebar Fixed</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-fixed" id="sidebarFixed" value="1" checked />
							<label class="custom-control-label" for="sidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-6 control-label text-inverse f-w-600">Sidebar Grid</div>
					<div class="col-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-grid" id="sidebarGrid" value="1" />
							<label class="custom-control-label" for="sidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
					<div class="col-md-6 d-flex">
						<div class="custom-control custom-switch ml-auto">
							<input type="checkbox" class="custom-control-input" name="sidebar-gradient" id="sidebarGradient" value="1" />
							<label class="custom-control-label" for="sidebarGradient">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="divider"></div>
				
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-12">
						<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-inverse btn-block btn-rounded" target="_blank"><b>Documentation</b></a>
						<a href="javascript:;" class="btn btn-default btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b></a>
					</div>
				</div>
			</div>
		</div>
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('colorAdmin/js/app.min.js')}}"></script>
	<script src="{{asset('colorAdmin/js/theme/default.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>