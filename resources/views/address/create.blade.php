@extends('themes.colorAdmin.app')

@section('styles')
<link href="{{asset('colorAdmin/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row my-2">
        <!-- edit form column -->
        <div class="col-lg-8">
            <h2 class="text-center font-weight-light">User Address</h2>
        </div>
        <hr>
        <br>
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
        @if (session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
        @endif
        
        <div class="col-lg-8 order-lg-1 personal-info">
            <form role="form" action="{{url('address')}}" method="Post" class="text-capitalize">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Receiver Name</label>
                    <div class="col-lg-9">
                        <input class="form-control text-capitalize" type="text" name="receiver_name" 
                        value="{{Auth::user()->name}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Type</label>
                    <div class="col-lg-9">
                        <select name="type" class="form-control">
                            <option value="0">Select Address Type</option>
                            <option value="Billing">Billing</option>
                            <option value="Office">Office</option>
                            <option value="Home">Home</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Street</label>
                    <div class="col-lg-9">
                        <input class="form-control text-capitalize" type="text" name="street"/>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Postcode</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="postcode" type="text" value="" />
                    </div>
                </div>
               
                <!-- begin form-group row -->
                <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">Country</label>
                    <div class="col-lg-9 col-xl-6">
                        <select name="country" id="country" class="form-control selectpicker" data-size="10" data-live-search="true" @error('country_id') is-invalid @enderror">
                        <option value="">--Select Country--</option>
                        @foreach ($getCountries as $country => $value)
                        <option value="{{ $country }}"> {{ $value }}</option>   
                        @endforeach
                    </select>
                    </div>
                </div>
                <!-- end form-group row -->
                 <!-- begin form-group row -->
                <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">State</label>
                    <div class="col-lg-9 col-xl-6">
                        <select name="state" class="form-control" id="state">
                     

                        </select>
                    </div>
                </div>
                <!-- end form-group row -->
                <!-- begin form-group row -->
                <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">City</label>
                    <div class="col-lg-9 col-xl-6">
                        <select name="city" class="form-control" id="city">
                     

                        </select>
                    </div>
                </div>
                <!-- end form-group row -->
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right"> 
                        <a class="btn btn-outline-secondary" href="{{url()->previous()}}">Back</a>
                        <button type="submit" class="btn btn-primary" value="Save Changes">Add Address</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript"> 
    getCountries=<?php echo json_encode($getCountries) ?>;
</script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#country').on('change', function(){
        var countryId = $(this).val();
        if(countryId) {
            $.ajax({
                url: "{{url('getStates')}}/"+countryId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="state"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="state"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="state"]').empty();
            $('select[name="city"]').empty();
        }

    });

    $('#state').on('change', function(){
        var stateId = $(this).val();
        if(stateId) {
            $.ajax({
                url: "{{url('getCities')}}/"+stateId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="city"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="city"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="city"]').empty();
        }

    });

});
</script>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
   
<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

@endsection