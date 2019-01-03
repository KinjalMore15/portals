@extends('employer.master')
@section('employer.titel')
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">View User</h3>
	</div>
	<div class="col-md-7 align-self-center">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
			<li class="breadcrumb-item active">Freelancers</li>
		</ol>
	</div>
</div>
@stop
@section('employer.container')
<div class="container-fluid">
	<!-- /row -->
	<div class="row">
		@include('flash::message')
						<div class="col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="pull-right">
										
									</div>
									<input type="text" class="form-control wide-width" placeholder="Search &amp; type">
								</div>
								
								<div class="card-body">
									<table class="table table-striped table-bordered" id="tblCustomers">
														<thead>
															<tr>
																<th><input name="product_all" class="checked_all" type="checkbox"></th>
																<th>Job Titel</th>
																<th>Location</th>
																<th>Candidate</th>
																<th>views</th>
																<th>Cost</th>
																<th>Status</th>
															</tr>
														</thead>
														<tbody>
															@foreach($jobs as $job)
															<tr>
																<td> <input class="checkbox" type="checkbox"> </td>
																<td>{{ $job->job_title }} <a href="{{ URL::to('employer/job_edit/'.$job->id) }}" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="ti-pencil-alt"></i></a> </td>
																<td>{{ $job->state }}, {{ $job->city }}</td>
																<td>500</td>
																<td>500</td>
																<td>free</td>
																<td>
																	<form action="{{ url("employer/job_change_status")   }}" method="post">
																		{{ csrf_field() }}
																	<input type="text" value="{{$job->id}}" name="job_id" hidden>	
																	<select class="form-control change"   name="job_status">
																	<option value="1" {{ $job->job_status = 1 ? 'select' : '' }}>Open</option>
																	<option value="2" {{ $job->job_status = "2" ? 'select' : '' }}>Paused</option>
																	<option value="0" {{ $job->job_status = 3 ? 'select' : '' }}>Close</option>	
																	</select>
																	<input type="submit" value="Submit" hidden>
																</form>
															</td>
															</tr>
															@endforeach
														</tbody>
													</table>

								</div>
							</div>
						</div>
	</div>
	<!-- /row -->
	</div>
@stop
@section('scripts')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

	$('.change').change(function () {		
     	this.form.submit();    	
	});

	$('div.alert').not('.alert-important').fadeIn(200).delay(3000).fadeOut(350);
	
 	$('.checked_all').on('change', function() {     
        $('.checkbox').prop('checked', $(this).prop("checked"));              
    });
   
</script>
@stop