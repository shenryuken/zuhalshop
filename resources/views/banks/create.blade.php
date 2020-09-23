@extends('themes.colorAdmin.app')
@section('styles')
@endsection

@section('content')

<div>
	<div class="panel panel-inverse" data-sortable-id="ui-widget-1">
	  	<div class="panel-heading">
	    	<h4 class="panel-title">Bank</h4>
	    	<div class="panel-heading-btn">
	      		<a href="#" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
	        	<i class="fa fa-expand"></i>
	      		</a>
	      		...
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
		    <form method="Post" action="{{url('banks')}}" enctype="multipart/form-data">
		    	@csrf
		    	<fieldset>
		    		<legend class="m-b-10">Add Bank</legend>
		    		<div class="row">
		    			<div class="col" id="col-1">
			    			<div class="form-group row m-b-15">
							  	<label class="col-md-3 col-form-label">Name</label>
							  	<div class="col-md-9">
								    <input type="text" name="name" class="form-control" placeholder=""/>
								 </div>
							</div>
							<div class="form-group row m-b-15">
							  	<label class="col-md-3 col-form-label">Short Code</label>
							  	<div class="col-md-9">
								    <input type="text" name="short_code" class="form-control" placeholder=""/>
								 </div>
							</div>
							<div class="form-group row m-b-15">
								<label class="col-md-3 col-form-label">Country</label>
								<div class="col-md-9">
							        <select name="country_id" class="border shadow p-2 bg-white form-control col-md-3" >
							            <option value=''>Select Country</option>
							            @foreach($countries as $country)
							            <option value="{{$country->id}}">{{$country->name}}</option>
							            @endforeach
							        </select>
							    </div>
							</div>
							<div class="form-group row">
								<div class="col-md-7 offset-md-3">
									<button type="submit" class="btn btn-sm btn-primary m-r-5">Add</button>
									<button type="submit" class="btn btn-sm btn-default">Cancel</button>
								</div>
							</div>
			    		</div>
		    		</div>
		    	</fieldset>
		    </form>
		</div>
	</div>
</div>

@endsection
@section('scripts')

@endsection

