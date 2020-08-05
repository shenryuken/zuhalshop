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


		<div id="chart-container"></div>



@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
   
<script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
<script src="{{ asset('js/jquery.orgchart.js')}}"></script>
<script type="text/javascript">
    $(function() {

    var datascource = {
      'name': 'Lao Lao',
      'title': 'general manager',
      'children': [
        { 'name': 'Bo Miao', 'title': 'department manager', 'className': 'middle-level',
          'children': [
            { 'name': 'Li Jing', 'title': 'senior engineer', 'className': 'product-dept' },
            { 'name': 'Li Xin', 'title': 'senior engineer', 'className': 'product-dept',
              'children': [
                { 'name': 'To To', 'title': 'engineer', 'className': 'pipeline1' },
                { 'name': 'Fei Fei', 'title': 'engineer', 'className': 'pipeline1' },
                { 'name': 'Xuan Xuan', 'title': 'engineer', 'className': 'pipeline1' }
              ]
            }
          ]
        },
        { 'name': 'Su Miao', 'title': 'department manager', 'className': 'middle-level',
          'children': [
            { 'name': 'Pang Pang', 'title': 'senior engineer', 'className': 'rd-dept' },
            { 'name': 'Hei Hei', 'title': 'senior engineer', 'className': 'rd-dept',
              'children': [
                { 'name': 'Xiang Xiang', 'title': 'UE engineer', 'className': 'frontend1' },
                { 'name': 'Dan Dan', 'title': 'engineer', 'className': 'frontend1' },
                { 'name': 'Zai Zai', 'title': 'engineer', 'className': 'frontend1' }
              ]
            }
          ]
        }
      ]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title'
    });

  });
  </script>
<!-- ================== END PAGE LEVEL JS ================== -->

@endsection