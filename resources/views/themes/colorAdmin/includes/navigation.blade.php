<!-- begin sidebar nav -->
<ul class="nav"><li class="nav-header">Navigation</li>
	<li>
		<a href="{{url('dashboard')}}">
			<i class="fab fa-simplybuilt"></i>
			<span>Dashboard</span></span> 
		</a>
	</li>
	{{-- Banks --}}
	<li class="has-sub {{(request()->is('accounts*') ? 'active':'' )}}">
		
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Accounts</span>
		</a>
		
		<ul class="sub-menu">
			@if(Auth::user()->isAdmin())
			<li class="{{(request()->is('accounts') ? 'active':'' )}}"><a href="{{url('accounts')}}">List</a></li>
			@endif
			<li class="{{(request()->is('accounts/create') ? 'active':'' )}}"><a href="{{url('accounts/create')}}">Add New</a></li>
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Banks --}}
	{{-- Banks --}}
	<li class="has-sub {{(request()->is('banks*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Banks</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('banks') ? 'active':'' )}}"><a href="{{url('banks')}}">List</a></li>
			<li class="{{(request()->is('banks/create') ? 'active':'' )}}"><a href="{{url('banks/create')}}">Add New</a></li>
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Banks --}}
	{{-- Products --}}
	<li class="has-sub {{(request()->is('products*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Products</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('products') ? 'active':'' )}}"><a href="{{url('products')}}">List</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li> --}}
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li>
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Products --}}
	{{-- Orders --}}
	<li class="has-sub {{(request()->is('orders*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Orders</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('orders') ? 'active':'' )}}"><a href="{{url('orders')}}">All</a></li>
			<li class="{{(request()->is('orders') ? 'active':'' )}}"><a href="{{url('orders/delivered')}}">Delivered</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li>
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li> --}}
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Orders --}}
	{{-- Store --}}
	<li class="has-sub {{(request()->is('store*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Store</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('store') ? 'active':'' )}}"><a href="{{url('store')}}">Store</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li>
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li> --}}
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Store --}}
	{{-- Invoices --}}
	<li class="has-sub {{(request()->is('invoices*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Invoices</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('invoices') ? 'active':'' )}}"><a href="{{url('invoices')}}">List</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li>
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li> --}}
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Invoices --}}
	{{-- Withdraws --}}
	<li class="has-sub {{(request()->is('withdraws*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Withdraws</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('withdraws') ? 'active':'' )}}"><a href="{{url('withdraws')}}">List</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li>
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li> --}}
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Withdraws --}}
	{{-- Transactions --}}
	<li class="has-sub {{(request()->is('transactions*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Transactions</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('transactions') ? 'active':'' )}}"><a href="{{url('transactions')}}">List</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li>
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li> --}}
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Transactions --}}
	{{-- Transactions --}}
	<li class="has-sub {{(request()->is('programs*') ? 'active':'' )}}">
		<a href="javascript:;">
			{{-- <span class="badge pull-right">10</span> --}}
			<b class="caret"></b>
			<i class="fa fa-hdd"></i>
			<span>Programs</span>
		</a>
		<ul class="sub-menu">
			<li class="{{(request()->is('programs/zes') ? 'active':'' )}}"><a href="{{url('programs/zes')}}">Zes</a></li>
			<li class="{{(request()->is('programs/zeb') ? 'active':'' )}}"><a href="{{url('programs/zeb')}}">Zeb</a></li>
			{{-- <li class="{{(request()->is('products/cards') ? 'active':'' )}}"><a href="{{url('products/cards')}}">Cards</a></li>
			<li class="{{(request()->is('products/create') ? 'active':'' )}}"><a href="{{url('products/create')}}">Add New</a></li> --}}
			<!-- <li><a href="email_compose.html">Compose</a></li>
			<li><a href="email_detail.html">Detail</a></li> -->
		</ul>
	</li>
	{{-- End Transactions --}}
	<!-- begin sidebar minify button -->
	<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
	<!-- end sidebar minify button -->
</ul>
<!-- end sidebar nav -->

