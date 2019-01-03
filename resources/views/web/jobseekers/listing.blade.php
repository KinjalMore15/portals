@extends('web.master')
@section('web.banner')

<section id="inner-banner">
	<div class="container">
		<h1>JobSeekers</h1>
	</div>
</section>
 @include('web.popular_jobs.index')
 <section class="candidates-search-bar">
 	<div class="container">
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
 	</div>
 </section>
@stop
@section('web.main')
<section class="resumes-section padd-tb">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="resumes-content">
					<div class="check-filter">
						<form action="#">
							<ul>
								<li>
									<div class="checkboxArea" id="myCheckbox0"></div><input id="id1" type="checkbox" class=" outtaHere">
									<label>All Jobs</label>
								</li>
								<li>
									<div class="checkboxArea" id="myCheckbox1"></div><input id="id2" type="checkbox" class=" outtaHere">
									<label>Part Time</label>
								</li>
								<li>
									<div class="checkboxArea" id="myCheckbox2"></div><input id="id3" type="checkbox" class=" outtaHere">
									<label>Full Time</label>
								</li>
								<li>
									<div class="checkboxArea" id="myCheckbox3"></div><input id="id4" type="checkbox" class=" outtaHere">
									<label>Freelance</label>
								</li>
								<li>
									<div class="checkboxArea" id="myCheckbox4"></div><input id="id5" type="checkbox" class=" outtaHere">
									<label>Contract</label>
								</li>
								<li>
									<div class="checkboxArea" id="myCheckbox5"></div><input id="id6" type="checkbox" class=" outtaHere">
									<label>Internship</label>
								</li>
								<li>
									<div class="checkboxArea" id="myCheckbox6"></div><input id="id7" type="checkbox" class=" outtaHere">
									<label>Temporary</label>
								</li>
							</ul>
						</form>
					</div>
					<h2>Showing All Resumes</h2>
					<div class="box">
						<div class="frame"><a href="#"><img src="images/resumes/resumes-img-1.jpg" alt="img"></a></div>
						<div class="text-box">
							<h2><a href="#">Homer Simpson</a></h2>
							<h4>UX/UI Graphic Designer, Development (Mid Level)</h4>
							<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> <strong><i class="fa fa-globe"></i><a href="#">https://www.jobinn.com</a></strong> </div>
							<span class="price"><i class="fa fa-money"></i>$7000 - $7500</span>
							<div class="tags"> <a href="#"><i class="fa fa-tags"></i>Product Management,</a> <a href="#">Graphic Design,</a> <a href="#">HTML,</a> <a href="#">Development,</a> <a href="#">WordPress,</a> <a href="#">Content</a> </div>
							<div class="btn-row"> <a href="#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="#" class="contact">Contact</a> <a href="#" class="login">Login to Bookmark this Resume</a> </div>
						</div>
					</div>
					<div class="box">
						<div class="frame"><a href="#"><img src="images/resumes/resumes-img-2.jpg" alt="img"></a></div>
						<div class="text-box">
							<h2><a href="#">Rachael Smith</a></h2>
							<h4>Sales And Marketing Executive</h4>
							<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> <strong><i class="fa fa-globe"></i><a href="#">https://www.jobinn.com</a></strong> </div>
							<span class="price"><i class="fa fa-money"></i>$7000 - $7500</span>
							<div class="tags"> <a href="#"><i class="fa fa-tags"></i>Product Management,</a> <a href="#">Graphic Design,</a> <a href="#">HTML,</a> <a href="#">Development,</a> <a href="#">WordPress,</a> <a href="#">Content</a> </div>
							<div class="btn-row"> <a href="#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="#" class="contact">Contact</a> <a href="#" class="login">Login to Bookmark this Resume</a> </div>
						</div>
					</div>
					<div class="box">
						<div class="frame"><a href="#"><img src="images/resumes/resumes-img-3.jpg" alt="img"></a></div>
						<div class="text-box">
							<h2><a href="#">John Spectre</a></h2>
							<h4>Inspection And Quality Assurance Officer</h4>
							<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> <strong><i class="fa fa-globe"></i><a href="#">https://www.jobinn.com</a></strong> </div>
							<span class="price"><i class="fa fa-money"></i>$50/hr</span>
							<div class="tags"> <a href="#"><i class="fa fa-tags"></i>Product Management,</a> <a href="#">Graphic Design,</a> <a href="#">HTML,</a> <a href="#">Development,</a> <a href="#">WordPress,</a> <a href="#">Content</a> </div>
							<div class="btn-row"> <a href="#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="#" class="contact">Contact</a> <a href="#" class="login">Login to Bookmark this Resume</a> </div>
						</div>
					</div>
					<div class="box">
						<div class="frame"><a href="#"><img src="images/resumes/resumes-img-4.jpg" alt="img"></a></div>
						<div class="text-box">
							<h2><a href="#">Angela Haze</a></h2>
							<h4>Lead User Interface/Visual Designer</h4>
							<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> <strong><i class="fa fa-globe"></i><a href="#">https://www.jobinn.com</a></strong> </div>
							<span class="price"><i class="fa fa-money"></i>$6500 - $7000</span>
							<div class="tags"> <a href="#"><i class="fa fa-tags"></i>Product Management,</a> <a href="#">Graphic Design,</a> <a href="#">HTML,</a> <a href="#">Development,</a> <a href="#">WordPress,</a> <a href="#">Content</a> </div>
							<div class="btn-row"> <a href="#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="#" class="contact">Contact</a> <a href="#" class="login">Login to Bookmark this Resume</a> </div>
						</div>
					</div>
					<div class="box">
						<div class="frame"><a href="#"><img src="images/resumes/resumes-img-5.jpg" alt="img"></a></div>
						<div class="text-box">
							<h2><a href="#">Suzy Biggs</a></h2>
							<h4>Interactice &amp; Multimedia Tech Designer</h4>
							<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> <strong><i class="fa fa-globe"></i><a href="#">https://www.jobinn.com</a></strong> </div>
							<span class="price"><i class="fa fa-money"></i>$12000 - $13500</span>
							<div class="tags"> <a href="#"><i class="fa fa-tags"></i>Product Management,</a> <a href="#">Graphic Design,</a> <a href="#">HTML,</a> <a href="#">Development,</a> <a href="#">WordPress,</a> <a href="#">Content</a> </div>
							<div class="btn-row"> <a href="#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="#" class="contact">Contact</a> <a href="#" class="login">Login to Bookmark this Resume</a> </div>
						</div>
					</div>
					<div id="loadMore"> <a href="#" class="load-more"><i class="fa fa-user"></i>Load More Jobs</a></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<h2>Related People</h2>
				<aside>
					<div class="sidebar">
						<div class="related-people">
							<ul>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-1.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Bettymesfin</a></strong> <span><i class="fa fa-tags"></i>Developer</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-2.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Cammy</a></strong> <span><i class="fa fa-tags"></i>Front Desk Specialist</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-3.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Jane Doe</a></strong> <span><i class="fa fa-tags"></i>Marketing Online</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-4.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Angela Haze</a></strong> <span><i class="fa fa-tags"></i>Accountant</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-5.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Suzy Biggs</a></strong> <span><i class="fa fa-tags"></i>HR Manager Expert</span> <span><i class="fa fa-map-marker"></i>London, UK</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-6.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Rachael Smith</a></strong> <span><i class="fa fa-tags"></i>Lead Designer</span> <span><i class="fa fa-map-marker"></i>New York, NY</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-1.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Bettymesfin</a></strong> <span><i class="fa fa-tags"></i>Developer</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-2.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Cammy</a></strong> <span><i class="fa fa-tags"></i>Front Desk Specialist</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-3.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Jane Doe</a></strong> <span><i class="fa fa-tags"></i>Marketing Online</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-4.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Angela Haze</a></strong> <span><i class="fa fa-tags"></i>Accountant</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-5.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Suzy Biggs</a></strong> <span><i class="fa fa-tags"></i>HR Manager Expert</span> <span><i class="fa fa-map-marker"></i>London, UK</span> </div>
								</li>
								<li>
									<div class="frame"><a href="#"><img src="images/resumes/related-img-6.jpg" alt="img"></a></div>
									<div class="text-box"> <strong class="name"><a href="#">Rachael Smith</a></strong> <span><i class="fa fa-tags"></i>Lead Designer</span> <span><i class="fa fa-map-marker"></i>New York, NY</span> </div>
								</li>
							</ul>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
@stop