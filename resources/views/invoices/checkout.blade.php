@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{ asset('colorAdmin/plugins/smartwizard/dist/css/smart_wizard.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')
<!-- begin wizard-form -->
<form action="/" method="POST" class="form-control-with-bg">
    <!-- begin wizard -->
    <div id="wizard">
        <!-- begin wizard-step -->
        <ul>
            <li>
                <a href="#step-1">
                    <span class="number">1</span> 
                    <span class="info">
                        Personal Info
                        <small>Name, Address, IC No and DOB</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="#step-2">
                    <span class="number">2</span> 
                    <span class="info">
                        Enter your contact
                        <small>Email and phone no. is required</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="#step-3">
                    <span class="number">3</span>
                    <span class="info">
                        Login Account
                        <small>Enter your username and password</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="#step-4">
                    <span class="number">4</span> 
                    <span class="info">
                        Completed
                        <small>Complete Registration</small>
                    </span>
                </a>
            </li>
        </ul>
        <!-- end wizard-step -->
        <!-- begin wizard-content -->
        <div>
            <!-- begin step-1 -->
            <div id="step-1">
                <!-- begin fieldset -->
                <fieldset>
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-8 -->
                        <div class="col-xl-8 offset-xl-2">
                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Personal info about yourself</legend>
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">First Name</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="firstname" placeholder="John" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Last Name</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="lastname" placeholder="Smith" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Date of Birth</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="row row-space-6">
                                        <div class="col-4">
                                            <select class="form-control" name="year">
                                                <option>-- Year --</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control" name="month">
                                                <option>-- Month --</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-control" name="day">
                                                <option>-- Day --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">IC No</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="ic" placeholder="" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Address</label>
                                <div class="col-lg-9">
                                    <input type="text" name="address1" placeholder="Address 1" class="form-control m-b-10" />
                                    <input type="text" name="address2" placeholder="Address 2" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                        </div>
                        <!-- end col-8 -->
                    </div>
                    <!-- end row -->
                </fieldset>
                <!-- end fieldset -->
            </div>
            <!-- end step-1 -->
            <!-- begin step-2 -->
            <div id="step-2">
                <!-- begin fieldset -->
                <fieldset>
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-8 -->
                        <div class="col-xl-8 offset-xl-2">
                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">You contact info, so that we can easily reach you</legend>
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Phone Number</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="number" name="phone" placeholder="123-456-7890" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Email Address</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="email" name="email" placeholder="someone@example.com" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                        </div>
                        <!-- end col-8 -->
                    </div>
                    <!-- end row -->
                </fieldset>
                <!-- end fieldset -->
            </div>
            <!-- end step-2 -->
            <!-- begin step-3 -->
            <div id="step-3">
                <!-- begin fieldset -->
                <fieldset>
                    <!-- begin row -->
                    <div class="row">
                        <!-- begin col-8 -->
                        <div class="col-xl-8 offset-xl-2">
                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Select your login username and password</legend>
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Username</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" name="username" placeholder="johnsmithy" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Pasword</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="password" name="password" placeholder="Your password" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Confirm Pasword</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                        </div>
                        <!-- end col-8 -->
                    </div>
                    <!-- end row -->
                </fieldset>
                <!-- end fieldset -->
            </div>
            <!-- end step-3 -->
            <!-- begin step-4 -->
            <div id="step-4">
                <div class="jumbotron m-b-0 text-center">
                    <h2 class="display-4">Register Successfully</h2>
                    <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. <br />Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                    <p><a href="javascript:;" class="btn btn-primary btn-lg">Proceed to User Profile</a></p>
                </div>
            </div>
            <!-- end step-4 -->
        </div>
        <!-- end wizard-content -->
    </div>
    <!-- end wizard -->
</form>
<!-- end wizard-form -->
@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('colorFrontend/template/assets/js/e-commerce/app.min.js')}}"></script>

<script src="{{ asset('colorAdmin/plugins/smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/form-wizards.demo.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
@endsection

