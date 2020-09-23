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
        
        <div class="col-lg-8 order-lg-1 personal-info">
            <form role="form" action="{{url('accounts')}}" enctype="multipart/form-data" method="Post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Holder Name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="holder_name" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Account No</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="acc_no" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Bank</label>
                    <div class="col-lg-9">
                        <select class="form-control" name="bank_id">
                            @foreach($banks as $bank)
                            <option value="{{$bank->id}}">{{$bank->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <button type="reset" class="btn btn-outline-secondary" value="Cancel">Reset</button> 
                        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> Go Back</a>
                        <button type="submit" class="btn btn-primary" value="Save Changes">Create Account</button>
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