@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('colorAdmin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-autofill-bs4/css/autofill.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-colreorder-bs4/css/colreorder.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-keytable-bs4/css/keytable.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-rowreorder-bs4/css/rowreorder.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('colorAdmin/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" />

	<link href="{{ asset('colorAdmin/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')

<div class="row">
    @foreach($data as $product)
    <div class="card-deck col-xl-3 col-sm-6">
        {{-- <div class="m-b-10 f-s-10 m-t-10"><b class="text-inverse">EXAMPLE</b></div> --}}
        <!-- begin card -->
        <div class="card m-10">
           {{--  <img class="card-img-top" src="{{asset('colorAdmin/img/gallery/gallery-1.jpg')}}" alt=""> --}}
            @if($product->image)
            <img class="card-img-top" src="{{asset('storage/'.$product->image)}}" alt="" height="300px">
            @else
            <img class="card-img-top" src="{{asset('storage/products/no-image.png')}}" alt="" height="300px">
            @endif
            <div class="card-body">
                <h4 class="card-title m-t-0 m-b-10">{{$product->name}}</h4>
                <h5>MYR {{$product->price}}</h5>
                <p class="card-text text-truncate">{{$product->description}}</p>
                
            </div>
            <div class="card-footer">
            	{{-- <form action="{{url('products/buynow')}}" method="Post" class="btn btn-sm">
            		@csrf
            		<input type="hidden" name="product_id" class="col-1">
            		<button type="submit" class="btn btn-sm btn-success">Buy Now</button>
            	</form> --}}
                {{-- <a href="{{url('products/buynow/'.$product->id)}}" class="btn btn-sm btn-success">Buy Now</a> --}}
                <a href="{{ route('payment') }}" class="btn btn-success">Pay $100 from Paypal</a>
                <a href="#" class="btn btn-sm btn-grey">Add To Cart</a> 
                @if(Auth::user()->isAdmin())
                <a href="javascript:;" class="btn btn-sm btn-warning float-right">Edit</a>
                @endif
            </div>
        </div>
        <!-- end card -->
    </div>
    @endforeach
</div>
<!-- end row -->

@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('colorAdmin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-autofill/js/dataTables.autofill.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js')}}"></script>
	<!-- <script src="{{ asset('colorAdmin/plugins/datatables.net-keytable/js/dataTables.keytable.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-keytable-bs4/js/keytable.bootstrap4.min.js')}}"></script> -->
	<script src="{{ asset('colorAdmin/plugins/datatables.net-rowreorder/js/dataTables.rowreorder.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-rowreorder-bs4/js/rowreorder.bootstrap4.min.js')}}"></script>
	<!-- <script src="{{ asset('colorAdmin/plugins/datatables.net-select/js/dataTables.select.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script> -->
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/pdfmake/build/pdfmake.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/pdfmake/build/vfs_fonts.js')}}"></script>
	<script src="{{ asset('colorAdmin/plugins/jszip/dist/jszip.min.js')}}"></script>
	<script src="{{ asset('colorAdmin/js/demo/table-manage-combine.demo.js')}}"></script>

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
@endsection

