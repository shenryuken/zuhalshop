@extends('themes.colorAdmin.app')

@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="row my-2">
        <!-- edit form column -->
        <div class="col-lg-12 text-center">
            <p>
                <h2 class="text-center font-weight-light">User's Account</h2>
            </p>
        </div>
        <br>
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
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {!! session('success') !!}
            </div>
        @endif
        <div class="col-lg-12 order-lg-1 personal-info">
            <div class="alert alert-info">
                @if(Auth::user()->wallet->current_balance < 20 )
                <p><span>Your request is not valid. Your minimum amount balance in your wallet must above 20, and minimum withdrawal per request is MYR 50</span></p>
                <span>Your Current Balance : {{Auth::user()->wallet->current_balance}}</span><br>
                @else
                <p>
                    <span>Your Current Balance : {{Auth::user()->wallet->current_balance}}</span><br>
                    <span>Your maximum withdrawal available: {{Auth::user()->wallet->current_balance - 20}}</span></p>
                @endif
            </div>
            <form role="form" action="{{url('wallet/transfer')}}" method="Post">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Amount</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="amount" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Username</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="username" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <button type="reset" class="btn btn-outline-secondary" value="Cancel">Reset</button> 
                        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
                        <button type="submit" class="btn btn-primary" value="Save Changes">Transfer</button>
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
    $('.delete-user').click(function(e){
         e.preventDefault() // Don't post the form, unless confirmed
         if (confirm('Are you sure?')) {
             // Post the form
             $(e.target).closest('form').submit() // Post the surrounding form
         }
    });
</script>
@endsection