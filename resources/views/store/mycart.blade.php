@extends('themes.colorAdmin.app')
@section('styles')
@endsection

@section('content')
<div>
    <div class="panel panel-inverse" {{-- data-sortable-id="ui-widget-1" --}}>
        <div class="panel-heading">
            <h4 class="panel-title">In Your Cart</h4>
            <div class="panel-heading-btn">
                <a href="#" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                <i class="fa fa-expand"></i>
                </a>
                ...
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="pull-right">(<strong>{{Cart::count()}}</strong>) item/s</span>
                            <h5>Items in your cart</h5>
                        </div>
                        @foreach(Cart::content() as $item)
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table shoping-cart-table">
                                    <tbody>
                                    <tr>
                                        <td width="90">
                                            @if(App\Models\Product::find($item->id)->image)
                                            <img src="{{asset('storage/'.App\Models\Product::find($item->id)->image)}}" alt="" height="60px" width="80px">
                                            @else
                                            <img src="{{asset('storage/products/no-image.png')}}" alt="" height="60px" width="80px">
                                            @endif
                                        </td>
                                        <td class="desc">
                                            <h3>
                                            <a href="#" class="text-navy">
                                                {{$item->name}}
                                            </a>
                                            </h3>
                                            <p class="small">
                                                {{$item->description}}
                                            </p>
                                            <dl class="small m-b-none">
                                                <dt>Description lists</dt>
                                                <dd>A description list is perfect for defining terms.</dd>
                                            </dl>

                                            <div class="m-t-sm">
                                                <a href="{{url('/remove/'.$item->rowId)}}" class="text-muted">
                                                    <i class="fa fa-trash"></i> Remove item
                                                </a>
                                            </div>
                                        </td>

                                        <td>
                                            {{$item->price}}
                                            {{-- <s class="small text-muted">$230,00</s> --}}
                                        </td>
                                        <td width="65">
                                            <input id="item{{$item->id}}" type="text" class="form-control" placeholder="1">
                                        </td>
                                        <td>
                                            <h4>
                                                {{$item->price}}
                                            </h4>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="ibox-content">
                            <button class="btn btn-primary pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                            <button class="btn btn-white"><i class="fa fa-arrow-left"></i> Continue shopping</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Cart Summary</h5>
                        </div>
                        <div class="ibox-content">
                            <span>
                                Shipping Cost
                            </span>
                            <h2 class="font-bold">
                                Free
                            </h2>
                            <span>
                                Sub-Total
                            </span>
                            <h2 class="font-bold">
                                {{Cart::subtotal()}}
                            </h2>
                            <span>
                                Tax
                            </span>
                            <h2 class="font-bold">
                                0.00
                            </h2>

                            <hr>
                            <span>
                                Total
                            </span>
                            <h2 class="font-bold">
                                {{Cart::subtotal()}}
                            </h2>
                            {{-- <span class="text-muted small">
                                *For United States, France and Germany applicable sales tax will be applied
                            </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Checkout</a>
                                <a href="#" class="btn btn-white btn-sm"> Cancel</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')

@endsection




