@extends('themes.colorAdmin.app')

@section('styles')
@endsection

@section('content')
<div class="container">
    <div class="row my-2">
        <!-- edit form column -->
        <div class="col-lg-4">
            <h2 class="text-center font-weight-light">User Profile</h2>
        </div>
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
        <div class="col-lg-8 order-lg-1 personal-info">
            <form role="form" action="{{url('profiles')}}" enctype="multipart/form-data" method="Post">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="first_name" value="Jane" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="last_name" value="Bishop" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Date of Birth</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="date" name="dob" value="Bishop" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">NRIC</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="nric" type="text" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                    <div class="col-lg-9">
                        <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Mobile No</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="mobile_no" type="text" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Office No</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="contact_no_office" type="text" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Home No</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="contact_no_home" type="text" value="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">About Me</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="5">
                            
                        </textarea> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <button type="reset" class="btn btn-outline-secondary" value="Cancel">Cancel</button> 
                        <button type="submit" class="btn btn-primary" value="Save Changes">Create Profile</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 order-lg-0 text-center">
            <img src="http://localhost/zuhalshop/colorAdmin/img/user/user-13.jpg" class="mx-auto img-fluid rounded-circle" alt="avatar" />
            <h6 class="my-4">Upload a new photo</h6>
            <div class="input-group px-xl-4">
                <div class="form-group">
                    <label class="col-lg-3 col-form-label form-control-label" for="avatar" aria-describedby="avatar"></label>
                    <div class="col-lg-9">
                        <input type="file" class="form-control" id="avatar" name="avatar">
                    </div>
                    
                </div>
                {{-- <div class="input-group-append">
                    <button class="btn btn-secondary"><i class="fa fa-upload"></i></button>
                </div> --}}
            </div>
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