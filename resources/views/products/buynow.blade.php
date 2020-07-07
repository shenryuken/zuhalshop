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
                        Product Info
                        <small>Name, Quantity, Price</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="#step-2">
                    <span class="number">2</span> 
                    <span class="info">
                        Address
                        <small>Address is required</small>
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
        <div>
            <select name="payment_method">
                <option value="credit">Credit/Debit Card</option>
                <option value="m2upay">Maybank2U</option>
            </select>
        </div>
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
                        <div class="table-responsive">
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th class="text-center" width="10%">PRICE/UNIT</th>
                                    <th class="text-center" width="10%">QUANTITY</th>
                                    <th class="text-right" width="20%">LINE TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><strong>{{$product->name}}</strong></span><br>
                                        <span class="d-inline-block text-truncate" style="max-width: 400px;"><small>{{$product->description}}</small></span>
                                    </td>
                                    <td class="text-center cart_price">
                                        <p class="price_jq">{{$product->price}}</p>
                                    </td>
                                    <td class="text-center cart_quantity">
                                        <input type='button' value='-' class='qtyminus' field='quantity' />
                                        <input type='text' name='quantity' value='1' class='qty' />
                                        <input type='button' value='+' class='qtyplus' field='quantity' />
                                    </td>
                                    <td class="text-right"><div id="total"></div></table></td>
                                </tr>
                               
                            </tbody>
                        </table>
                        <div id="total"></div></table>
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
                                <label class="col-lg-3 text-lg-right col-form-label">Street</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="number" name="phone" placeholder="Sesame Street" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Postcode</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="number" name="phone" placeholder="43200" class="form-control" />
                                </div>
                            </div>
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            {{-- <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">City</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select>
                                        <option value="">Select City</option>
                                        @foreach($cities ?? '' as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                            </div> --}}
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            {{-- <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">State</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select>
                                        <option value="">Select state</option>
                                        @foreach($states as $state0)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                            </div> --}}
                            <!-- end form-group row -->
                            <!-- begin form-group row -->
                            {{-- <div class="form-group row m-b-10">
                                <label class="col-lg-3 text-lg-right col-form-label">Country</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select>
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                            </div> --}}
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
<script type="text/javascript">
    $(function() {
    $('.qtyplus').click(function(e){
        e.preventDefault();
        fieldName = $(this).attr('field');

        //Fetch qty in the current elements context and since you have used class selector use it.
        var qty = $(this).closest('tr').find('.qty');
        //var qty = $(this).closest('tr').find('input[name='+fieldName+']');

        var currentVal = parseInt(qty.val());
        if (!isNaN(currentVal)) {
            qty.val(currentVal + 1);
        } else {
            qty.val(0);
        }

        //Trigger change event
        qty.trigger('change');
    });

    $(".qtyminus").click(function(e) {
        e.preventDefault();
        fieldName = $(this).attr('field');

        //Fetch qty in the current elements context and since you have used class selector use it.
        var qty = $(this).closest('tr').find('.qty');
        //var qty = $(this).closest('tr').find('input[name='+fieldName+']');

        var currentVal = parseInt(qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            qty.val(currentVal - 1);
        } else {
            qty.val(0);
        }

        //Trigger change event
        qty.trigger('change');
    });     

    //Bind the change event
    $(".qty").change(function() {
        var sum = 0;
        var total = 0;
        $('.price_jq').each(function () {
            var price = $(this);
            var count = price.closest('tr').find('.qty');
            sum = (price.html() * count.val());
            total = total + sum;
            price.closest('tr').find('.cart_total_price').html(sum + "₴");
        });
        $('#total').html("<h3>£" + total + "</h3>");

    }).change(); //trigger change event on page load
});
</script>
<!-- ================== END PAGE LEVEL JS ================== -->
@endsection