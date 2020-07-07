<!-- begin #header -->
@php
use App\Models\Product;
@endphp
<div id="header" class="header navbar-default">
	<!-- begin navbar-header -->
	<div class="navbar-header">
		<a href="{{url('dashboard')}}" class="navbar-brand"><span class="navbar-logo"></span> <b>Zuhal</b> Admin</a>
		<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- end navbar-header --><!-- begin header-nav -->
	<ul class="navbar-nav navbar-right">
		<li class="navbar-form">
			<form action="" method="POST" name="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter keyword" />
					<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle f-s-14" data-toggle="dropdown">
				<i class="fa fa-shopping-bag"></i>
				<span class="label">{{Cart::count()}}</span>
			</a>
			<div class="dropdown-menu dropdown-menu-cart p-0 media-list dropdown-menu-right">
				<div class="cart-header">
					<h4 class="cart-title">Shopping Bag</h4>
				</div>
				<div class="cart-body">
					<ul class="cart-item">
						@foreach(Cart::content() as $item)
						<li>
							<div class="cart-item-image">
								@if(App\Models\Product::find($item->id)->image)
								<img src="{{asset('storage/'.App\Models\Product::find($item->id)->image)}}" alt="" height="60px" width="80px">
								@else
								<img src="{{asset('storage/products/no-image.png')}}" alt="" height="60px" width="80px">
								@endif
							</div>	
							<div class="cart-item-info">
								<h4>{{$item->name}}</h4>
								<p class="price">{{$item->price * $item->qty}} ({{$item->qty}}) </p>
							</div>
							<div class="cart-item-close">
								<a href="{{url('/remove/'.$item->rowId)}}" data-toggle="tooltip" data-title="Remove" data-original-title="" title="">×</a>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="cart-footer">
					<div class="row row-space-10">
						<div class="col-6">
							<a href="{{url('store/mycart')}}" class="btn btn-default btn-theme btn-block">View Cart</a>
						</div>
						<div class="col-6">
							<a href="{{url('store/checkout')}}" class="btn btn-inverse btn-theme btn-block">Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
				<i class="fa fa-bell"></i>
				<span class="label">5</span>
			</a>
			<div class="dropdown-menu media-list dropdown-menu-right">
				<div class="dropdown-header">NOTIFICATIONS (5)</div>
				<a href="javascript:;" class="dropdown-item media">
					<div class="media-left">
						<i class="fa fa-bug media-object bg-silver-darker"></i>
					</div>
					<div class="media-body">
						<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
						<div class="text-muted f-s-10">3 minutes ago</div>
					</div>
				</a>
				<a href="javascript:;" class="dropdown-item media">
					<div class="media-left">
						<img src="{{ asset('colorAdmin/img/user/user-1.jpg')}}" class="media-object" alt="" />
						<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
					</div>
					<div class="media-body">
						<h6 class="media-heading">John Smith</h6>
						<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
						<div class="text-muted f-s-10">25 minutes ago</div>
					</div>
				</a>
				<a href="javascript:;" class="dropdown-item media">
					<div class="media-left">
						<img src="{{ asset('colorAdmin/img/user/user-2.jpg')}}" class="media-object" alt="" />
						<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
					</div>
					<div class="media-body">
						<h6 class="media-heading">Olivia</h6>
						<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
						<div class="text-muted f-s-10">35 minutes ago</div>
					</div>
				</a>
				<a href="javascript:;" class="dropdown-item media">
					<div class="media-left">
						<i class="fa fa-plus media-object bg-silver-darker"></i>
					</div>
					<div class="media-body">
						<h6 class="media-heading"> New User Registered</h6>
						<div class="text-muted f-s-10">1 hour ago</div>
					</div>
				</a>
				<a href="javascript:;" class="dropdown-item media">
					<div class="media-left">
						<i class="fa fa-envelope media-object bg-silver-darker"></i>
						<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
					</div>
					<div class="media-body">
						<h6 class="media-heading"> New Email From John</h6>
						<div class="text-muted f-s-10">2 hour ago</div>
					</div>
				</a>
				<div class="dropdown-footer text-center">
					<a href="javascript:;">View more</a>
				</div>
			</div>
		</li>
		<li class="dropdown navbar-user">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<img src="{{ asset('colorAdmin/img/user/user-13.jpg')}}" alt="" /> 
				<span class="d-none d-md-inline">{{Auth::user()->name}}</span> <b class="caret"></b>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				{{--<a href="{!! route('profiles.show', [Auth::user()->id]) !!}" class="dropdown-item">Profile</a> --}}
				<a href="{{ url("profiles/".Auth::user()->id) }}" class="dropdown-item">My Profile</a>
				<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
				<a href="javascript:;" class="dropdown-item">Calendar</a>
				<a href="javascript:;" class="dropdown-item">Setting</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
			</div>
		</li>
	</ul>
	<!-- end header-nav -->
</div>
<!-- end #header -->