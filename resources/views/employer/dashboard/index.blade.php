@extends('employer.master')
<style type="text/css">
	.freelance-box-thumb, .style-2 .freelance-box-thumb {
    border-radius: 0%!important;
}
.freelance-container {
	border: 1px solid #a1c636 !important;
	}
.freelance-inner-box {
    padding: 0px 20px 10px !important;
    text-align: center;
}
.style-2 .freelance-box {
    padding: 30px 20px 20px !important;
}
</style>
@section('employer.titel')
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
		<h3 class="text-themecolor">dashboard</h3>
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

						<!-- Single Freelancer -->
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									
									
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<i class="fa fa-edit" style="font-size:84px; color: #87a841;"></i>
										</div>
										<div class="freelance-box-detail">
											<h4>Post Jobs</h4>
											
										</div>
										
									</div>
								
									
								</div>
							</div>
						</div>
						
						<!-- Single Freelancer -->
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									
									
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<i class="fa fa-users" style="font-size:80px; color: #87a841;"></i>
										</div>
										<div class="freelance-box-detail">
											<h4>Candidates</h4>
											
										</div>
										
									</div>
								
									
								</div>
							</div>
						</div>
						
						<!-- Single Freelancer -->
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									
									
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<i class="fa fa-list-alt" style="font-size:80px; color: #87a841;"></i>
										</div>
										<div class="freelance-box-detail">
											<h4>Jobs</h4>
											
										</div>
										
									</div>
								
									
								</div>
							</div>
						</div>

						<!-- Single Freelancer -->
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									
									
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<i class="fa fa-search-plus" style="font-size:80px; color: #87a841;"></i>
										</div>
										<div class="freelance-box-detail">
											<h4>Resume Database</h4>
											
										</div>
										
									</div>
								
									
								</div>
							</div>
						</div>

						<!-- Single Freelancer -->
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									
									
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<i class="fa fa-envelope" style="font-size:80px; color: #87a841;"></i>
										</div>
										<div class="freelance-box-detail">
											<h4>Message</h4>
											
										</div>
										
									</div>
								
									
								</div>
							</div>
						</div>

						<!-- Single Freelancer -->
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									
									
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<i class="fa fa-building" style="font-size:80px; color: #87a841;"></i> 
										</div>
										<div class="freelance-box-detail">
											<h4>Hiring Companies</h4>
											
										</div>
										
									</div>
								
									
								</div>
							</div>
						</div>

						
						</div>	
					
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption info">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-briefcase"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>5246</h3>
												<span>Jobs Posted</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-info">
												<span style="width:72%;" class="bg-info widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption danger">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-happy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>5872</h3>
												<span>Active Members</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-danger">
												<span style="width:65%;" class="bg-danger widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption success">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-tools"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>9586</h3>
												<span>Tasks Posted</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-sucess">
												<span style="width:55%;" class="bg-success widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption warning">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-trophy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>870</h3>
												<span>World Award</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-warning">
												<span style="width:70%;" class="bg-warning widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					
					<!-- row -->
					
					</div>
					<!-- /.row -->
					
					<!-- Row -->
					
					
					<!-- Row -->
					
					
				</div>
@stop