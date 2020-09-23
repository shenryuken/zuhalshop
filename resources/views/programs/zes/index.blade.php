@extends('themes.colorAdmin.app')

@section('styles')

<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{ asset('colorAdmin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-autofill-bs4/css/autofill.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-colreorder-bs4/css/colreorder.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-keytable-bs4/css/keytable.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-rowreorder-bs4/css/rowreorder.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('colorAdmin/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('colorAdmin/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
@endsection

@section('content')


<div class="panel panel-inverse">
    <div class="panel-heading">
        <h4 class="panel-title">Zes Program</h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Sorry!</strong> invalid input.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {!! session('success') !!}
            </div>
        @endif

        <br>
        <hr>
        <br>

        <div class="table-responsive-md">
            <table id="data-table-combine" class="table table-sm table-striped table-bordered table-td-valign-middle" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th width="1%">NO</th>
                    <th>NAME</th>
                    <th>PARENT NODE</th>
                    <th>LEFT</th>
                    <th>RIGHT</th>
                    <th>DEPTH</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            
            @foreach($data as $row)
                @if($loop->odd)
                <tr class="odd gradeX">
                @else
                <tr class="even gradeC">
                @endif
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>{{$row->parent_id}}</td>
                    <td>{{$row->lft}}</td>
                    <td>{{$row->rgt}}</td>
                    <td>{{$row->depth}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                    <td>
                        <button onclick="window.location='{{ url("programs/zes/".$row->id."/create-child") }}'" class="m-5 btn-sm btn-gray">Create Child</button>
                        <button onclick="window.location='{{ url("programs/zes/".$row->id) }}'" class="m-5 btn-sm btn-gray">Show</button>
                        <button onclick="window.location='{{ url("programs/zes/checkAncestors2/".$row->id) }}'" class="m-5 btn-sm btn-gray">Check</button>
                    </td>
                    {{-- <td class="row pl-5">
                        <button onclick="window.location='{{ url("products/".$row->id) }}'" class="m-5 btn-sm btn-gray">Show</button>
                        <button onclick="window.location='{{ url("products/".$row->id."/edit") }}'" class="m-5 btn-sm btn-primary">Edit</button> 
                            
                        <form id="delete-form" method="POST" action="{{url('products/'.$row->id)}}" class="delete-item">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn-sm btn-danger m-5" value="Delete">
                        </form>
                        
                    </td> --}}
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</div>


<!-- end row -->

@endsection
@section('scripts')
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('colorAdmin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-autofill/js/dataTables.autofill.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js')}}"></script>
    <!-- <script src="{{ asset('colorAdmin/plugins/datatables.net-keytable/js/dataTables.keytable.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-keytable-bs4/js/keytable.bootstrap4.min.js')}}"></script> -->
    <script src="{{ asset('colorAdmin/plugins/datatables.net-rowreorder/js/dataTables.rowreorder.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-rowreorder-bs4/js/rowreorder.bootstrap4.min.js')}}"></script>
    <!-- <script src="{{ asset('colorAdmin/plugins/datatables.net-select/js/dataTables.select.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script> -->
    <script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/js/demo/table-manage-combine.demo.js')}}"></script>

    <script src="{{ asset('colorAdmin/plugins/gritter/js/jquery.gritter.js')}}"></script>
    <script src="{{ asset('colorAdmin/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{ asset('colorAdmin/js/demo/ui-modal-notification.demo.js')}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $('.delete-item').click(function(e){
             e.preventDefault() // Don't post the form, unless confirmed
             if (confirm('Are you sure?')) {
                 // Post the form
                 $(e.target).closest('form').submit() // Post the surrounding form
             }
        });
    </script>
@endsection

