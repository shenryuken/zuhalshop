
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Zuhal Distributor | Coming Soon Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/css/default/app.min.css')}}" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE CSS STYLE ================== -->
    <link href="{{ asset('colorAdmin/plugins/countdown/jquery.countdown.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE CSS STYLE ================== -->
</head>
<body class="bg-white pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="page-container fade">
      <!-- begin coming-soon -->
        <div class="coming-soon">
            <!-- begin coming-soon-header -->
            <div class="coming-soon-header">
                <div class="bg-cover"></div>
                <div class="brand">
                    <span class="logo"></span> <b>Zuhal</b> Distributor
                </div>
                <div class="desc">
                    Our website is almost there and it’s rebuilt from scratch! A lot of great new features <br />and improvements are coming.
                </div>
                <div class="timer">
                    <div id="timer"></div>
                </div>
            </div>
            <!-- end coming-soon-header -->
            <!-- begin coming-soon-content -->
            <div class="coming-soon-content">
                <div class="desc">
                    We are launching a closed <b>beta</b> soon!<br /> Sign up to try it before others and be the first to know when we <b>launch</b>.
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <form action="{{url('notifyme')}}" method="Post">
                    @csrf
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email Address" name="email" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-inverse">Notify Me</button>
                    </div>
                </div>
                </form>
                
                <p class="help-block m-b-25"><i>We don't spam. Your email address is secure with us.</i></p>
                <p>
                    Follow us on 
                    <a href="javascript:;" class="text-inverse"><i class="fab fa-twitter fa-lg fa-fw text-info"></i> Twitter</a> and 
                    <a href="javascript:;" class="text-inverse"><i class="fab fa-facebook-square fa-lg fa-fw text-blue"></i> Facebook</a>
                </p>
            </div>
            <!-- end coming-soon-content -->
        </div>
        <!-- end coming-soon -->
        
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
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{asset('colorAdmin/plugins/countdown/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('colorAdmin/plugins/countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('colorAdmin/js/demo/coming-soon.demo.js')}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>
