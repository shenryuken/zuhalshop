<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Zuhal | Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('colorAdmin/css/default/app.min.css')}}" rel="stylesheet" />
	<link href="{{asset('colorAdmin/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
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
		<!-- begin register -->
		<div class="register register-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url({{('colorAdmin/img/login-bg/login-bg-15.jpg')}})"></div>
				<!-- <img src="{{asset('logo_1.jpeg')}}" style="z-index: 1;position: relative;text-align: center;"> -->
				<div class="news-caption">
					<h4 class="caption-title"><b>Zuhal</b> Admin Page</h4>
					<p>
						ZUHAL Tonic Juice Herbs are enriched with the world’s best natural herbs, these herbs have been formulated through laboratory tests and have been proven to for human body cells
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin register-header -->
				<h1 class="register-header">
					Sign Up
					<small>We are launching a closed <b>beta</b> soon!<br /> Sign up to try it before others and be the first to know when we <b>launch</b>.</small>
					<small>Create your Zuhal Account. It’s free (without extra benefit) and always will be.</small>
				</h1>
				<!-- end register-header -->
				<!-- begin register-content -->
				<div class="register-content">
					@if (count($errors) > 0)
			            <div class="alert alert-danger">
			                <a href="#" class="close" data-dismiss="alert">&times;</a>
			                <strong>Sorry!</strong> invalid input.<br><br>
			                <ul style="list-style-type:none;">
			                    @foreach ($errors->all() as $error)
			                        <li>{{ $error }}</li>
			                    @endforeach
			                </ul>
			            </div>
			        @endif
					<form method="POST" action="{{ route('register') }}" class="margin-bottom-0">
                        @csrf

                        <label for="name" class="control-label">{{ __('Country') }}</label>

                        <div class="row row-space-10">
							<div class="col-md-6 m-b-15">
	                            {{-- <select name="country_id" class="form-control @error('country_id') is-invalid @enderror"> --}}
	                            <select name="country_id" class="form-control selectpicker" data-size="10" data-live-search="true" @error('country_id') is-invalid @enderror">
	                                <option value="">-- {{ __('choose your country') }} --</option>
	                                @foreach ($countries as $country)
	                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
	                                @endforeach
	                            </select>

	                            @error('country_id')
	                            <span class="invalid-feedback" role="alert">
	                                    <strong>{{ $message }}</strong>
	                                </span>
	                            @enderror
	                        </div>
                        </div>
                        
						<label class="control-label">{{ __('Name') }}<span class="text-danger">*</span></label>
						<div class="row row-space-10">
							<div class="col-md-6 m-b-15">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<label class="control-label">{{ __('E-Mail Address') }}<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<label class="control-label">{{ __('Password') }}<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<label class="control-label">{{ __('Confirm Password') }}<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>
						<label class="control-label">{{ __('Referred By') }}<span class="text-primary"> (username of introducer)</span></label>
						<div class="row row-space-10">
							<div class="col-md-6 m-b-15">
								<input id="referred_by" type="text" class="form-control" name="referred_by" value="{{ old('referred_by') }}" autocomplete="referred_by" autofocus>
								<span class="text-primary"> (Leave blank if no introducer)</span>
                                @error('referred_by')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<div class="checkbox checkbox-css m-b-30">
								<input type="checkbox" id="agreement_checkbox" value="">
								<label for="agreement_checkbox">
								By clicking register, you agree to our <a href="javascript:;">Terms</a> and that you have read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie Use</a>.
								</label>
							</div>
						</div>
						<div class="register-buttons">
							<button type="submit" class="btn btn-primary btn-block btn-lg">{{ __('Register') }}</button>
						</div>
						<div class="m-t-30 m-b-30 p-b-30">
							Already a member? Click <a href="{{ route('login') }}">here</a> to login.
						</div>
						<hr />
						<p class="text-center mb-0">
							&copy; Color Admin All Right Reserved 2020
						</p>
					</form>
				</div>
				<!-- end register-content -->
			</div>
			<!-- end right-content -->
		</div>
		<!-- end register -->
		
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
	<script src="{{('colorAdmin/js/app.min.js')}}"></script>
	<script src="{{('colorAdmin/js/theme/default.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	<script src="{{('colorAdmin/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	
</body>
</html>