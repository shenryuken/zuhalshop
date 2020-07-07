@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{ asset('colorAdmin/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')
<script
    src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
<div class="row">
    @foreach($products as $product)
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
                <a href="{{ route('buynow',$product->id) }}" class="btn btn-sm btn-success">Paypal Buy Now</a>
                <a href="{{ route('add', [ $product->getRouteKey() ]) }}" class="btn btn-sm btn-grey">Add To Cart</a> 
                @if(Auth::user()->isAdmin())
                <a href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-sm btn-warning float-right">Edit</a>
                @endif
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="WM3MM2WY247MS">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

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

