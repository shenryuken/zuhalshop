@extends('themes.colorAdmin.app')

@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="row my-2">
        <!-- edit form column -->
        <div class="col-lg-12">
            <p>
                <h2 class="text-center font-weight-light">User's Account</h2>
            </p>
        </div>
        <br>
        <div class="col-lg-8 order-lg-1 personal-info">
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div><br />
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                @if(session('msg'))
                    <div class="alert alert-warning">
                        {!! session('msg') !!}
                    </div>
                @endif
            </div>
            <div class="alert alert-info">
                @if(Auth::user()->wallet->current_balance < 20 )
                <p><span>Your request is not valid. Your minimum amount balance in your wallet must above 20, and minimum withdrawal per request is MYR 50</span></p>
                @else
                <p>
                    <span>Your Current Balance : {{Auth::user()->wallet->current_balance}}</span><br>
                    <span>Your maximum withdrawal available: {{Auth::user()->wallet->current_balance - 20}}</span></p>
                @endif
            </div>
            <form role="form" action="{{url('withdraws/'.$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Amount</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="amount" value="{{$data->amount}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">To Account</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="to_account" value="{{$data->account->acc_no}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Action</label>
                    <div class="col-lg-9">
                        <select name="action" class="form-control">
                            <option value="1">Cancel</option>
                            @if(Auth::user()->isAdmin())
                            <option value="2">Process</option>
                            <option value="3">Paid</option>
                            <option value="4">Reject</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group row" id="receipt" style="display:none;">
                    <label class="col-lg-3 col-form-label form-control-label">Receipt</label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" type="text" name="receipt"/>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right"> 
                        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
   
<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="3"){
                    $("#receipt").show();
                } else {
                    $("#receipt").hide();                  
                }
            });
        }).change();
    });
</script>
@endsection