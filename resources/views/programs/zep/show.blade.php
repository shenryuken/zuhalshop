@extends('themes.colorAdmin.app')

@section('styles')
<link href="{{asset('css/jquery.orgchart.css')}}" rel="stylesheet" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
<style type="text/css">
    .orgchart { background: #fff; }
    .orgchart td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; }
    .orgchart td>.down { background-color: #aaa; }
    .orgchart .middle-level .title { background-color: #006699; }
    .orgchart .middle-level .content { border-color: #006699; }
    .orgchart .product-dept .title { background-color: #009933; }
    .orgchart .product-dept .orgchart-content { border-color: #009933; }
    .orgchart .rd-dept .title { background-color: #993366; }
    .orgchart .rd-dept .orgchart-content { border-color: #993366; }
    .orgchart .pipeline1 .title { background-color: #996633; }
    .orgchart .pipeline1 .orgchart-content { border-color: #996633; }
    .orgchart .frontend1 .title { background-color: #cc0066; }
    .orgchart .frontend1 .orgchart-content { border-color: #cc0066; }
  </style>
@endsection

@section('content')

    @php
      //var_dump(json_encode($descendants));
      $datasource = json_encode($tree);
      $output     = substr($datasource, 1, -1);

      // var_dump($output);
    @endphp
		<div id="chart-container"></div>



@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
   
<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
<script src="{{ asset('js/jquery.orgchart.js')}}"></script>

<!-- ================== END PAGE LEVEL JS ================== -->
<script>
var datasource = <?php echo $output;?>
 
$('#chart-container').orgchart({
  'data' : datasource,
  'depth': 10,
  'nodeContent': 'id',
  'exportButton': true,
  'exportFilename': 'MyOrgChart',
  'exportFileextension': 'pdf',
  'pan': true,
  'zoom': true
});
</script>
@endsection

