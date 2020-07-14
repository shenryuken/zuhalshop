@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">{{$product->name}}
    <small>Activate your life!</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      {{-- <img class="img-fluid" src="http://placehold.it/750x500" alt=""> --}}
      	@if($product->image)
        	<img src="{{asset('storage/'.$product->image)}}" width="750px" height="500px" />
        @else
        	<img src="{{asset('storage/products/no-image.png')}}" width="750px" height="500px"/>
        @endif
    </div>

    <div class="col-md-4">
      <h3 class="my-3">{{$product->name}}</h3>
      <p>{{$product->description}}</p>
      <h3 class="my-3">Product Details</h3>
      <ul>
        <li><strong>Code:</strong> {{$product->code}}</li>
        <li><strong>Price:</strong> {{$product->price}}</li>
        <li><strong>Cost Price:</strong> {{$product->cost_price}}</li>
        <li><strong>Type :</strong> {{$product->type}}</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	
@endsection

