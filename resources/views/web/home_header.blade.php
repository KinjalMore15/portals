<header id="header">
			<div class="cp-burger-nav">
				<div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
					<div class="cp-top-bar">
						<h4>For any Queries: +800 123 4567</h4>
						<div class="login-section"> <a href="login.html" class="btn-login">Log in</a> <a href="signup.html" class="btn-login">Signup</a> </div>
					</div>
					<strong class="logo-2"><a href="{{ url('/home') }}"><img src="{{ asset('public/assets/images/sidebar-logo.png') }}" alt="img"></a></strong>
					<div class="content mCustomScrollbar">
						<div id="content-1" class="content">
							<div class="cp_side-navigation">
								<nav>
									<ul class="navbar-nav">
										<li class="active"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												
											</ul>
										</li>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobseeker<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="{{ url('') }}">Jobseeker Listing</a></li>
												<li><a href="{{ url('/job-seeker/profile') }}">Jobseeker Details</a></li>
												<li><a href="{{ url('/job-seeker/profile') }}">Jobseeker From</a></li>
											</ul>
										</li>
										<li><a href="employers.html">Employers</a></li>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><a href="{{ url('') }}">Jobs </a><span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="{{ url('') }}">Latest Jobs</a></li>
												<li><a href="{{ url('') }}">Jobs Details</a></li>
												<li><a href="{{ url('/job-seeker/register') }}">Jobs Form</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Companies<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="companies.html">Companies</a></li>
												<li><a href="{{ url('') }}">Company Details</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Categories</a></li>
										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blogs<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a tabindex="-1" href="#">Post a Job</a></li>
												<li><a tabindex="-1" href="companies.html">Companies</a></li>
												<li><a tabindex="-1" href="#">Resumes</a></li>
											</ul>
										</li>
										<li><a href="#">Features</a> </li>
										<li><a href="contact.html">Contact</a> </li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="cp-sidebar-social">
						<ul>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
						</ul>
					</div>
					<strong class="copy">JobInn &copy; 2016, All Rights Reserved</strong> </div>

				</div>

				<div class="container">

					<div class="navigation-col">
						<nav class="navbar navbar-inverse">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
								<strong class="logo"><a href="{{ url('') }}"><img src="{{ asset('public/assets/images/logo/opt-logo.png') }}" alt="logo"></a></strong> </div>
								<div id="navbar" class="collapse navbar-collapse">
									<ul class="nav navbar-nav" id="nav">
										<li><a href="{{ url('') }}">Home</a>
											<ul>
												
											</ul>
										</li>
										<li><a href="{{ url('/') }}">Jobseekers</a>
											<ul>
												<li><a href="{{ url('/') }}">Jobseeker Listing</a></li>
												<li><a href="{{ url('/') }}">Jobseeker Details</a></li>
												<li><a href="{{ url('/') }}">Jobseeker From</a></li>
											</ul>
										</li>
										<li><a href="{{ url('/') }}">Employers</a></li>
										<li><a href="{{ url('/') }}">Jobs</a>
											<ul>
												<li><a href="{{ url('/') }}">Latest Jobs</a></li>
												<li><a href="{{ url('/') }}">Jobs Details</a></li>
												<li><a href="{{ url('/') }}">Jobs Form</a></li>
											</ul>
										</li>
										<li><a href="companies.html">Companies</a>
											<ul>
												<li><a href="companies.html">Companies</a></li>
												<li><a href="{{ url('/') }}">Company Details</a></li>
											</ul>
										</li>
										<li><a href="#">Features</a>
											<ul>
												<li><a href="blog-full.html">Blogs<i class="fa fa-caret-right"></i></a>
													<ul>
														<li><a href="blog-medium.html">Blog Medium</a></li>
														<li><a href="blog-post.html">Blog Post</a></li>
														<li><a href="blog-detail.html">Blog Detail</a></li>
														<li><a href="#">Post a Job</a></li>
													</ul>
												</li>
												<li><a href="companies.html">Companies</a></li>
												<li><a href="#">Resumes</a></li>
												<li><a href="price.html">Job Plans &amp; Pricing</a></li>
												<li><a href="testimonials.html">Testimonials</a></li>
												<li><a href="privacy-policy.html">Privacy Policy</a></li>
												<li><a href="our-terms.html">Our Terms</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="signup.html">Register</a></li>
												<li><a href="privacy-policy.html">Privacy Policy</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="{{ url('job-seeker/logout') }}"> logout </a></li>
									</ul>
								</div>
							</nav>
						</div>

					</div>

				</header>
