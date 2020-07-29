@extends('themes.colorAdmin.app')

@section('styles')
@endsection

@section('content')

<div class="panel panel-inverse" data-sortable-id="ui-widget-1">
	<div class="panel-heading">
		<h4 class="panel-title">Withdrawal Request</h4>
		<div class="panel-heading-btn">
			<a href="#" class="btn btn-xs btn-icon btn-circle btn-default" 
				data-click="panel-expand">
				<i class="fa fa-expand"></i>
			</a>
		</div>
	</div>
  	<div class="panel-body">
		<dl class="row m-10 p-10">
		  	<dt class="col-sm-4 text-truncate">Request By</dt>
		  	<dd class="col-sm-8 text-truncate text-uppercase">{{$data->user->name}}</dd>
		  	<dt class="col-sm-4 text-truncate">Amount</dt>
		  	<dd class="col-sm-8 text-truncate text-uppercase">{{$data->amount}}</dd>
		  	<dt class="col-sm-4 text-truncate">Account No</dt>
		  	<dd class="col-sm-8 text-truncate text-uppercase">{{$data->account->acc_no}}</dd>
		  	<dt class="col-sm-4 text-truncate">Bank</dt>
		  	<dd class="col-sm-8 text-truncate text-uppercase">{{$data->account->bank->name}}</dd>
		  	<dt class="col-sm-4 text-truncate">Status</dt>
		  	<dd class="col-sm-8 text-truncate text-uppercase">
		  		@if($data->status === 0)
                <span class="badge badge-secondary badge-default">Pending</span>
                @elseif($data->status === 1)
                <span class="badge badge-secondary badge-warning">Cancel</span>
                @elseif($data->status === 2)
                <span class="badge badge-secondary badge-secondary">Processing</span>
                @elseif($data->status === 3)
                <span class="badge badge-secondary badge-success">Paid</span>
                @elseif($data->status === 4)
                <span class="badge badge-secondary badge-danger">Rejected</span>
                @endif
		  	</dd>
		  	@if($data->status === 3)
			<div class="row mx-auto d-block">
				<img src="{{asset('storage/'.$data->receipt)}}" class="img-rounded img-responsive " width="300px" height="360px">
			</div>
			@endif
		</dl>
		
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

@endsection