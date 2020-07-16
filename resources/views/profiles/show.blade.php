@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{ asset('colorAdmin/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
<link href="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/bootstrap4-editable/css/bootstrap-editable.css')}}" rel="stylesheet" />
<link href="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/inputs-ext/address/address.css')}}" rel="stylesheet" />
<link href="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css')}}" rel="stylesheet" />
<link href="{{ asset('colorAdmin/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />

<!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection
@section('content')

<!-- begin profile -->
<div class="profile">
    <div class="profile-header">
        <!-- BEGIN profile-header-cover -->
        <div class="profile-header-cover"></div>
        <!-- END profile-header-cover -->
        <!-- BEGIN profile-header-content -->
        <div class="profile-header-content">
            <!-- BEGIN profile-header-img -->
            <div class="profile-header-img">
                @if(Auth::user()->avatar == '')
                <img src="{{asset('colorAdmin/img/user/anonymous_avatar.png')}}" alt="">
                @else
                <img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="">
                @endif
            </div>
            <!-- END profile-header-img -->
            <!-- BEGIN profile-header-info -->
            <div class="profile-header-info">
                <h4 class="mt-0 mb-1">{{Auth::user()->name}}</h4>
                {{-- <p class="mb-2">UXUI + Frontend Developer</p> --}}
                <p></p>
                <a href="#" class="btn btn-xs btn-yellow">Edit Profile</a>
            </div>
            <!-- END profile-header-info -->
        </div>
        <!-- END profile-header-content -->
        <!-- BEGIN profile-header-tab -->
        <ul class="profile-header-tab nav nav-tabs">
            {{-- <li class="nav-item"><a href="#profile-post" class="nav-link active" data-toggle="tab">POSTS</a></li> --}}
            <li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
            <li class="nav-item"><a href="#profile-address" class="nav-link" data-toggle="tab">ADDRESS</a></li>
            {{-- <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
            <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li> --}}
            <li class="nav-item"><a href="#profile-referrals" class="nav-link" data-toggle="tab">REFERRALS</a></li>
            <li class="nav-item"><a href="#profile-accounts" class="nav-link" data-toggle="tab">ACCOUNTS</a></li>
        </ul>
        <!-- END profile-header-tab -->
    </div>
</div>
<!-- end profile -->
<!-- begin profile-content -->
<div class="profile-content">
    <!-- begin tab-content -->
    <div class="tab-content p-0">
        <!-- begin #profile-about tab -->
        <div class="tab-pane fade" id="profile-about">
            @if(Auth::user()->profile)
            <!-- begin table -->
            <div class="table-responsive form-inline">
                <table class="table table-profile">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="field">
                                <h4>First Name</h4>
                            </td>
                            <td>
                                <h4>
                                    <a href="javascript:;" class="xedit" 
                                        data-pk="{{$data->id}}"
                                        data-name="first_name">
                                        {{$data->first_name}}
                                    </a>
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="field">
                                <small>Last Name</small>
                            </td>
                            <td>
                                <h4><small>
                                    <a href="javascript:;" class="xedit" 
                                        data-pk="{{$data->id}}"
                                        data-name="last_name">
                                        {{$data->last_name}}
                                    </a>
                                </small></h4>
                            </td>
                        </tr>
                        <tr class="highlight">
                            <td class="field">Mood</td>
                            <td><a href="javascript:;">Add Mood Message</a></td>
                        </tr>
                        <tr class="divider">
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td class="field">Date of Birth</td>
                            <td>
                                <i class="fa fa-lg m-r-5"></i>  
                                <a href="javascript:;" class="xedit" 
                                    id="dob" data-type="combodate"
                                    data-pk="{{$data->id}}"
                                    data-name="dob">
                                    {{$data->dob->format('d/m/Y')}}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="field">NRIC/Passport</td>
                            <td>
                                <i class="fa fa-lg m-r-5"></i> 
                                <a href="javascript:;" class="xedit" 
                                    data-pk="{{$data->id}}"
                                    data-name="nric">
                                    {{$data->nric}} 
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="field">Gender</td>
                            <td>
                               {{--  <a href="javascript:;" class="xedit" 
                                    id="gender" 
                                    data-type="select"
                                    data-pk="{{$data->id}}" 
                                    data-name="gender" 
                                    data-value="{{$data->gender or ''}}">
                                </a> --}}
                                <a href="javascript:;" class="xedit" 
                                    id="gender" data-type="select" 
                                    data-pk="{{$data->id}}" 
                                    data-name="gender"
                                    data-value="{{$data->gender}}">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="field">Mobile</td>
                            <td>
                                <i class="fa fa-mobile fa-lg m-r-5"></i> 
                                 <a href="javascript:;" class="xedit" 
                                    data-pk="{{$data->id}}"
                                    data-name="mobile_no">
                                    {{$data->mobile_no}} 
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="field">Home</td>
                            <td>{{-- @if(is_null($data->contact_no_home))
                                <a href="javascript:;">Add Number</a>
                                @else --}}
                                <a href="javascript:;" class="xedit" 
                                    data-pk="{{$data->id}}"
                                    data-name="contact_no_home">
                                    {{$data->contact_no_home}} 
                                </a>
                               {{--  @endif --}}
                            </td>
                        </tr>
                        <tr>
                            <td class="field">Office</td>
                            <td>{{-- @if(is_null($data->contact_no_office))
                                <a href="javascript:;">Add Number</a>
                                @else --}}
                                {{-- {{$data->contact_no_office}} --}}
                                <a href="javascript:;" class="xedit" 
                                    data-pk="{{$data->id}}"
                                    data-name="contact_no_office">
                                    {{$data->contact_no_office}} 
                                </a>
                               {{--  @endif --}}
                            </td>
                        </tr>
                        <tr class="divider">
                            <td colspan="2"></td>
                        </tr>
                        <tr class="highlight">
                            <td class="field">About Me</td>
                            <td>
                                {{-- <a href="javascript:;">Add Description</a> --}}
                                @if($data->about_me == '')
                                <a href="#modal-add-description" class="btn btn-sm btn-success" data-toggle="modal">Add Description</a>
                                @else
                                    <a href="javascript:;" class="xedit" 
                                    data-pk="{{$data->id}}"
                                    data-name="about_me">
                                    {{$data->about_me}}
                                </a>
                                @endif
                            </td>
                        </tr>
                        <tr class="divider">
                            <td colspan="2"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- end table -->
            @else
            Please create profile first before you can continue using the system.
            Thank You. <a href="{{url('profiles/create')}}">Create Profile</a>
            @endif
        </div>
        <!-- end #profile-about tab -->
        <!-- begin #profile-address tab -->
        <div class="tab-pane fade" id="profile-address">
            <h4 class="m-t-0 m-b-20">Address List ({{ Auth::user()->addresses->count() }})</h4>
            <a href="{{url('address/create')}}">Add Addresss</a>
            <!-- begin row -->
            <div class="row">
                @if(Auth::user()->addresses()->count() > 0)
                @foreach(Auth::user()->addresses as $address)
                <!-- with right icon -->
                <div class="note note-warning note-with-right-icon m-10">
                  <div class="note-icon"><i class="fa fa-envelope"></i></div>
                  <div class="note-content text-right">
                    <a href="{{url('address/'.$address->id.'/edit')}}">edit</a>
                    <h4><b>Address Type: {{$address->type}}</b></h4>
                    <dl class="row">
                      <dt class="text-inverse text-right col-4 text-truncate">Receiver Name</dt>
                      <dd class="col-8 text-truncate">{{$address->receiver_name}}</dd>
                      <dt class="text-inverse text-right col-4 text-truncate">Street</dt>
                      <dd class="col-8 text-truncate">{{$address->street}}</dd>
                      <dt class="text-inverse text-right col-4 text-truncate">City</dt>
                      <dd class="col-8 text-truncate">{{$address->city->name}}</dd>
                      <dt class="text-inverse text-right col-4 text-truncate">Postcode</dt>
                      <dd class="col-8 text-truncate">{{$address->postcode}}</dd>
                      <dt class="text-inverse text-right col-4 text-truncate">State</dt>
                      <dd class="col-8 text-truncate">{{$address->state->name}}</dd>
                      <dt class="text-inverse text-right col-4 text-truncate">Country</dt>
                      <dd class="col-8 text-truncate">{{$address->country->name}}</dd>
                    </dl>
                  </div>
                </div>
                
                @endforeach
                @else
                No address found. Please add at least one address. <a href="{{url('address/create')}}">Add Address</a>
                @endif
            </div>
            <!-- end row -->
        </div>
        <!-- end #profile-address tab -->
        <!-- begin #profile-friends tab -->
        <div class="tab-pane fade" id="profile-referrals">
            <h4 class="m-t-0 m-b-20">Referral List ({{ Auth::user()->referrals->count() }})</h4>
            <!-- begin row -->
            <div class="row row-space-6">
                @foreach(Auth::user()->referrals as $referral)
                <!-- begin col-6 -->
                <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                    <div class="p-10 bg-white rounded">
                        <div class="media media-xs overflow-visible align-items-center">
                            <a class="media-left" href="javascript:;">
                            <img src="../assets/img/user/user-1.jpg" alt="" class="media-object img-circle" />
                            </a>
                            <div class="media-body valign-middle">
                                <b class="text-inverse">{{$referral->name}}</b>
                            </div>
                            <div class="media-body valign-middle text-right overflow-visible">
                                <div class="btn-group btn-group-sm dropdown">
                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                    <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:;" class="dropdown-item">
                                            Total Referrals : {{$referral->referrals->count()}}
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <img src="{{asset('colorAdmin/img/product/300x267/healthy.png')}}" alt="" class="media-object img-circle" />
                                            Healthy :
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <img src="{{asset('colorAdmin/img/product/300x267/energy.png')}}" alt="" class="media-object img-circle" />
                                            Energy :
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:;" class="dropdown-item">
                                            <img src="{{asset('colorAdmin/img/product/300x267/activator.png')}}" alt="" class="media-object img-circle" />
                                            Avtivator :
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <img src="{{asset('colorAdmin/img/product/300x267/live.png')}}" alt="" class="media-object img-circle" />
                                            Life :
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-6 -->
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end #profile-friends tab -->
        <!-- begin #profile-accounts tab -->
        <div class="tab-pane fade" id="profile-accounts">
            <h4 class="m-t-0 m-b-20">My Accounts</h4>
            <!-- begin row -->
            <div class="row row-space-6">
                @if(Auth::user()->accounts()->count() != 0)
                @foreach(Auth::user()->accounts as $account)
                <!-- begin col-6 -->
                <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                    <div class="p-10 bg-white rounded">
                        <div class="media media-xs overflow-visible align-items-center">
                            <a class="media-left" href="javascript:;">
                            <img src="../assets/img/user/user-1.jpg" alt="" class="media-object img-circle" />
                            </a>
                            <div class="media-body valign-middle">
                                <b class="text-inverse">{{$account->bank->name}}</b>&nbsp
                                <b class="text-inverse">({{$account->acc_no}})</b>
                            </div>
                            <div class="media-body valign-middle text-right overflow-visible">
                                <div class="btn-group btn-group-sm dropdown">
                                    <a href="javascript:;" class="btn btn-default">History</a>
                                    <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="javascript:;" class="dropdown-item">
                                            Request Withrawal : {{$account->acc_no}}
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            {{-- <img src="{{asset('colorAdmin/img/product/300x267/healthy.png')}}" alt="" class="media-object img-circle" /> --}}
                                            Total Withrawals :
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-6 -->
                @endforeach
                @else
                Please key in your bank account info. <a href="{{url('profiles/account/create')}}">Click Here!</a>
                @endif
            </div>
            <!-- end row -->
        </div>
        <!-- end #profile-accounts tab -->
    </div>
    <!-- end tab-content -->
</div>
<!-- end profile-content -->

<!-- end row -->
<!-- #modal-dialog -->
<div class="modal fade" id="modal-add-description">

    <div class="modal-dialog">
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
        <form action="{{url('profiles/about-me')}}" method="Post">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">About Me</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            
            <div class="modal-body">
                @csrf
                <div class="form-group row"  id="cct_embed_counts">
                    <label class="col-lg-3 col-form-label form-control-label">About Me</label>
                    <div class="col-lg-9" >
                        <textarea class="form-control" rows="3" name="about_me" id="cct_embed_input_text">
                        </textarea>
                        <span><small>*255 Characters</small></span>
                        <div id="cct_embed_result"></div>
                        <div id="cct_powered_by">Powered by <a href="https://charactercounttool.com">Character Counter</a></div>
                        <script type="text/javascript" src="https://charactercounttool.com/cct_embed.min.js"></script>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-red" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>

</div>

@endsection
@section('scripts')

<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/bootstrap4-editable/js/bootstrap-editable.min.js')}}"></script>

<script src="{{ asset('colorAdmin/plugins/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/bootstrap4-editable/js/bootstrap-editable.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/inputs-ext/address/address.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/lib/typeahead.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/typeaheadjs.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/x-editable-bs4/dist/inputs-ext/wysihtml5/wysihtml5.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/jquery-mockjax/dist/jquery.mockjax.min.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/form-editable.demo.js')}}"></script>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
@if($errors->any())
    <script>
    $(function() {
        $('#modal-add-description').modal('show');
    });
    </script>
@endif
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });

        $('.xedit').editable({
            url: '{{url("profiles/inline-update")}}',
            title: 'Update',
            success: function (response, newValue) {
                console.log('Updated', response)
            }
        });
    })
</script>

@endsection
