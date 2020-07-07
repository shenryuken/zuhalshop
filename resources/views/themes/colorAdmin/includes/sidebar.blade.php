<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
					<div class="image">
						@if(Auth::user()->avatar == '')
		                <img src="{{asset('colorAdmin/img/user/anonymous_avatar.png')}}" alt="">
		                @else
		                <img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="">
		                @endif
						{{-- <img src="{{ asset('colorAdmin/img/user/user-13.jpg')}}" alt="" /> --}}
					</div>
					<div class="info">
						<b class="caret pull-right"></b>{{Auth::user()->name}}
						<small>Admin Dashboard</small>
					</div>
				</a>
			</li>
			<li>
				<ul class="nav nav-profile">
					<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
					<li><a href="{{url('wallets/mywallet')}}"><i class="fa fa-pencil-alt"></i> My Wallet</a></li>
					<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
				</ul>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		@include('themes.colorAdmin.includes.navigation')
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->