@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{ asset('colorAdmin/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')
<!-- begin page-header -->
			<h1 class="page-header hidden-print">Invoice <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			<!-- begin invoice -->
			<div class="invoice">
				<!-- begin invoice-company -->
				<div class="invoice-company">
					<span class="pull-right hidden-print">
						<a href="javascript:;" class="btn btn-sm btn-white m-b-10"><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
						<a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
					</span>
					Zuhal Distributor Enterprise,
				</div>
				<!-- end invoice-company -->
				<!-- begin invoice-header -->
				<div class="invoice-header">
					<div class="invoice-from">
						<small>from</small>
						<address class="m-t-5 m-b-5">
							<strong class="text-inverse">Zuhal Sales & Marketing</strong><br />
							NO 4-16-1 Dataran Putri,<br />
							Jalan Aman Damai H U17/H,<br>
							47000 Sungai Buloh, Selangor.<br />
							Phone: (123) 456-7890<br />
							Fax: (123) 456-7890
						</address>
					</div>
					<div class="invoice-to">
						<small>to</small>
						{{-- <address class="m-t-5 m-b-5">
							<strong class="text-inverse">{{Auth::user()->name}}</strong><br />
							<br />
							City, Zip Code<br />
							Phone: (123) 456-7890<br />
							Fax: (123) 456-7890
						</address> --}}
					</div>
					<div class="invoice-date">
						<small>Invoice / July period</small>
						<div class="date text-inverse m-t-5">August 3,2012</div>
						<div class="invoice-detail">
							#0000123DSS<br />
							Services Product
						</div>
					</div>
				</div>
				<!-- end invoice-header -->
				<!-- begin invoice-content -->
				<div class="invoice-content">
					<!-- begin table-responsive -->
					<div class="table-responsive">
						<table class="table table-invoice">
							<thead>
								<tr>
									<th>PRODUCT</th>
									<th class="text-center" width="10%">PRICE/UNIT</th>
									<th class="text-center" width="10%">QUANTITY</th>
									<th class="text-right" width="20%">LINE TOTAL</th>
								</tr>
							</thead>
							<tbody>
								@foreach(Cart::content() as $item)
								<tr>
									<td>
										<span class="text-inverse">{{$item->name}}</span><br />
										<small>{{$item->description}}</small>
									</td>
									<td class="text-center">{{$item->price}}</td>
									<td class="text-center">{{$item->qty}}</td>
									<td class="text-right">{{$item->price * $item->qty}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- end table-responsive -->
					<!-- begin invoice-price -->
					<div class="invoice-price">
						<div class="invoice-price-left">
							<div class="invoice-price-row">
								<div class="sub-price">
									<small>SUBTOTAL</small>
									<span class="text-inverse">{{Cart::subtotal()}}</span>
								</div>
								<div class="sub-price">
									<i class="fa fa-plus text-muted"></i>
								</div>
								<div class="sub-price">
									<small>PAYPAL FEE (0%)</small>
									<span class="text-inverse">MYR 0.00</span>
								</div>
							</div>
						</div>
						<div class="invoice-price-right">
							<small>TOTAL</small> <span class="f-w-600">MYR{{Cart::subtotal()}}</span>
							<input type="hidden" id="total" name="total" value="{{Cart::subtotal()}}">
						</div>
					</div>
					<!-- end invoice-price -->
					<a href="{{ route('payment') }}" class="btn btn-sm btn-success">Paypal Buy Now</a>
				</div>
				<!-- end invoice-content -->

				<div id="paypal-button-container"></div>
				
					
	
				<!-- begin invoice-note -->
				<div class="invoice-note">
					* Make all cheques payable to [Your Company Name]<br />
					* Payment is due within 30 days<br />
					* If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
				</div>
				<!-- end invoice-note -->
				<!-- begin invoice-footer -->
				<div class="invoice-footer">
					<p class="text-center m-b-5 f-w-600">
						THANK YOU FOR YOUR BUSINESS
					</p>
					<p class="text-center">
						<span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
						<span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
						<span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
					</p>
					<div class="text-center col-md-12"><div class="highlightable"><div class="payment-options-inner highlighted" id="payment-options-badges"><h4>Payment Options</h4><ul><li><img src="https://www.paypalobjects.com/web/res/3eb/bbe9a83ac219389906fd52295b978/img/paypal/cc-badges-US.png" alt="PayPal"></li></ul><div class="pointer"></div></div><div class="tipWrapperContainer"><div class="popover-markup alignElementCenter"><div class="getCodeWrapper"><div class="triangle-up"></div></div></div></div></div></div>
				</div>
				<!-- end invoice-footer -->
			</div>
			<!-- end invoice -->

@endsection
@section('scripts')
	<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
	    $('.delete-user').click(function(e){
	         e.preventDefault() // Don't post the form, unless confirmed
	         if (confirm('Are you sure?')) {
	             // Post the form
	             $(e.target).closest('form').submit() // Post the surrounding form
	         }
	    });
	</script>
	<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
	<script type="text/javascript">var total = document.getElementById("total").value </script>
	<script>
		 
		// Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: total
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
	</script>
@endsection

