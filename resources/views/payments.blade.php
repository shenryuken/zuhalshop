@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="{{ asset('colorAdmin/plugins/smartwizard/dist/css/smart_wizard.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->

@endsection

@section('content')
<div id="m2upay">
    
</div>
<script type="text/javascript" src="{{asset('js/m2upay_frontend.js')}}"></script>

<script>
  //TO BE PASS FROM getEncryptionString function.
  var encrypt_json = <?php echo $encrypt_json; ?>

  m2upay.initPayment(encrypt_json.encryptedString,encrypt_json.actionUrl, 'OT');
</script>

@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('colorFrontend/template/assets/js/e-commerce/app.min.js')}}"></script>

<script src="{{ asset('colorAdmin/plugins/smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/form-wizards.demo.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

@endsection