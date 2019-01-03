@extends('web.master')
@section('web.banner')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
	<section class="candidates-search-bar">

<form action="#">
<div class="row">
<div class="col-md-4">
<input type="text" placeholder="Enter Job Title, Skills or Company">
</div>
<div class="col-md-4">
<input type="text" placeholder="Enter City, State, Province or Country">
</div>
<div class="col-md-3">
<input type="text" placeholder="Category">
</div>
<div class="col-md-1">
<button type="submit"><i class="fa fa-search"></i></button>
</div>
</div>
</form>

</section>



@stop
@section('web.main')
<div class="container">
<section class="resumes-section padd-tb">
 			
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right">
	
	
		<div class="sidebar">			
				<h2>Jobs Search By</h2>
				<div class="sidebar-jobs">
					<ul>
						<li>
							<a href="#">Job By Location</a>
							<div class="checkboxAreaChecked" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Charlotte, NC</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Chicago, IL</label>
							<br>
							<div class="checkboxAreaChecked" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Dallas, Texas</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Greensboro, NC</label>
							<br>
						</li>
						<li>
							<a href="#">Job By Experience</a>
							<div class="checkboxAreaChecked" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Less than 1 Year</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>1 to 2 Years</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>2 to 3 Years</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>3 to 5 Years</label>
							<br>
						</li>
						<li>
							<a href="#">Job Type</a>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Full Time</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Part Time</label>
							<br>
							<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>permanant</label>
							<br>
							<div class="checkboxAreaChecked" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
							<label>Contaract</label>
							<br>
						</li>									
						
					</ul>
				</div>
			</div>
		
	</div>
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 push-left">
		
		<div id="content-area">
			<h2>Latest Jobs</h2>
			<ul id="myList">
				<li style="display: list-item;">
					<div class="box">
						
						<div class="text-col">
							<div class="hold">
								<h4><a href="#">Marketing Graphic Design / 2D Artist</a></h4>
								<p>Person usually begins a job by becoming an employee, volunteering, or starting a business. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
								<a href="#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2015 - Feb 20, 2016 </a> </div>
							</div>
							<strong class="price"><i class="fa fa-money"></i>$4000 - $5000</strong> <a href="#" class="btn-1 btn-color-1 ripple">Part Time</a> </div>
						</li>
						<li style="display: list-item;">
							<div class="box">
								
								<div class="text-col">
									<div class="hold">
										<h4><a href="#">Public Relation Executive Manager</a></h4>
										<p>Person usually begins a job by becoming an employee, volunteering, or starting a business. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
										<a href="#" class="text"><i class="fa fa-map-marker"></i>Nationwide</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2015 - Feb 20, 2016 </a> </div>
									</div>
									<strong class="price"><i class="fa fa-money"></i>$7000 - $7500</strong> <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a> </div>
								</li>
								<li style="display: list-item;">
							<div class="box">
								
								<div class="text-col">
									<div class="hold">
										<h4><a href="#">Public Relation Executive Manager</a></h4>
										<p>Person usually begins a job by becoming an employee, volunteering, or starting a business. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
										<a href="#" class="text"><i class="fa fa-map-marker"></i>Nationwide</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2015 - Feb 20, 2016 </a> </div>
									</div>
									<strong class="price"><i class="fa fa-money"></i>$7000 - $7500</strong> <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a> </div>
								</li>
								<li style="display: list-item;">
							<div class="box">
								
								<div class="text-col">
									<div class="hold">
										<h4><a href="#">Public Relation Executive Manager</a></h4>
										<p>Person usually begins a job by becoming an employee, volunteering, or starting a business. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
										<a href="#" class="text"><i class="fa fa-map-marker"></i>Nationwide</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2015 - Feb 20, 2016 </a> </div>
									</div>
									<strong class="price"><i class="fa fa-money"></i>$7000 - $7500</strong> <a href="#" class="btn-1 btn-color-2 ripple">Full Time</a> </div>
								</li>
							</ul>
						</div>
					</div>
								

</div>
</section>
</div>
@stop