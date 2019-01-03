<!DOCTYPE html>
<html lang="en">	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Job Hill - Manage Your Dashboard</title>

		<!-- All Plugins Css -->
		<link rel="stylesheet" href="{{ asset('public/assets/plugins/css/plugins.css') }}">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">		

	</head>
	
	<body>
	
		<div id="wrapper" class="">
			<div class="fakeLoader"></div>
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="img-responsive" alt="Logo"></a>
				</div>
				<!-- /.navbar-header -->
				
				<ul class="nav navbar-top-links navbar-left header-search-form hidden-xs">
					<li><a class="menu-brand" id="menu-toggle"><span class="ti-view-grid"></span></a></li>
					<li class="hidden-sm hidden-xs">
						<div class="header-search-form input-group">
							<span class="input-group-addon"><span class="ti-search"></span></span>
							<input type="text" class="form-control" placeholder="Search & Enter">
						</div>
					</li>
				</ul>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle notification-show" data-toggle="dropdown" href="#">
							<i class="ti-email"></i>
							<span class="email-notify noti-count">4</span>
						</a>
						<ul class="dropdown-menu dropdown-messages right-swip">
							<li class="external">
								<h3><span class="bold">All Messages</span></h3>
								<span class="notification-label bg-success">New 6</span>
							</li>
							<li>
								<a href="messages.html">
									<div class="message-apt">
										<div class="user-img">
											<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="">
											<span class="profile-status online"></span>
										</div>
										<div class="message-body">
											<strong>John Smith</strong>
											<span class="pull-right text-muted">
												Just Now
											</span>
											<p>I am John Smith Ckeck My...</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="messages.html">
									<div class="message-apt">
										<div class="user-img">
											<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="">
											<span class="profile-status warning"></span>
										</div>
										<div class="message-body">
											<strong>Daniel Luke</strong>
											<span class="pull-right text-muted">
												2 Min Ago
											</span>
											<p>Can You Send Me your Bugdet...</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="messages.html">
									<div class="message-apt">
										<div class="user-img">
											<img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="">
											<span class="profile-status busy"></span>
										</div>
										<div class="message-body">
											<strong>Litha Lilly</strong>
											<span class="pull-right text-muted">
												7 Min Ago
											</span>
											<p>I have Check Your Design Like...</p>
										</div>
									</div>
								</a>
							</li>
							 <li>
								<a href="messages.html">
									<div class="message-apt">
										<div class="user-img">
											<img src="assets/img/user-4.jpg" class="img-responsive img-circle" alt="">
											<span class="profile-status offline"></span>
										</div>
										<div class="message-body">
											<strong>Adam Kruel</strong>
											<span class="pull-right text-muted">
												1 Hour Ago
											</span>
											<p>Heelo! I need best web design...</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="text-center" href="#">
									<strong>Read All Messages</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle notification-show" data-toggle="dropdown" href="#">
							<i class="ti-bell"></i>
							<span class="task-notify noti-count">7</span>
						</a>
						<ul class="task dropdown-menu dropdown-tasks right-swip">
							<li class="external">
								<h3><span class="bold">Show Notifications</span></h3>
								<span class="notification-label bg-success">New 4</span>
							</li>
							<li>
								<a href="#">
									<div class="task-overview">
										<div class="alpha-box alpha-a">
											<span>A</span>
										</div>
										<div class="task-detail">
											<p>Hello, I am Maryam.</p>
											<span class="task-time">2 Min Ago</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="task-overview">
										<div class="alpha-box alpha-d">
											<span>D</span>
										</div>
										<div class="task-detail">
											<p>Hello, I am Maryam.</p>
											<span class="task-time">2 Min Ago</span>
										</div>
									</div>	
								</a>
							</li>
							<li>
								<a href="#">
									<div class="task-overview">
										<div class="alpha-box alpha-g">
											<span>G</span>
										</div>
										<div class="task-detail">
											<p>Hello, I am Maryam.</p>
											<span class="task-time">2 Min Ago</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="task-overview">
										<div class="alpha-box alpha-h">
											<span>H</span>
										</div>
										<div class="task-detail">
											<p>Hello, I am Maryam.</p>
											<span class="task-time">2 Min Ago</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a class="text-center" href="#">
									<strong>See All Tasks</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-tasks -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="ti-announcement"></i>
						</a>
						<div class="dropdown-menu dropdown-grid animated flipInX">
							<a href="index.html" class="dropdown-item">
								<img src="assets/img/dashboard.png" class="img-responsive" alt="" />
								<span class="dropdown-title">Dashboard</span>
							</a>
							<a href="messages.html" class="dropdown-item">
								<img src="assets/img/chat.png" class="img-responsive" alt="" />
								<span class="dropdown-title">Chat</span>
							</a>
							<a href="settings.html" class="dropdown-item">
								<img src="assets/img/settings.png" class="img-responsive" alt="" />
								<span class="dropdown-title">Settings</span>
							</a>
							<a href="create-jobs.html" class="dropdown-item">
								<img src="assets/img/add-job.png" class="img-responsive" alt="" />
								<span class="dropdown-title">New Jobs</span>
							</a>
							<a href="freelancers.html" class="dropdown-item">
								<img src="assets/img/freelancers.png" class="img-responsive" alt="" />
								<span class="dropdown-title">Freelancers</span>
							</a>
							<a href="my-profile.html" class="dropdown-item">
								<img src="assets/img/profile.png" class="img-responsive" alt="" />
								<span class="dropdown-title">Profile</span>
							</a>
						</div>
						<!-- /.dropdown-alerts -->
					</li>
					<!-- /.dropdown -->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="user">
						</a>
						<ul class="dropdown-menu dropdown-user right-swip">
							<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
							<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
							<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
							
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<li><a id="right-sidebar-toggle" href="#" class="btn btn-lg toggle"><i class="spin ti-settings"></i></a></li>

					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->
				
				<!-- Sidebar Navigation -->
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
						
						   <li class="active"><a href="index.html"><i class="fa fa-bullseye"></i>Dashboard</a></li>
						   
							
							<li><a href="messages.html"><i class="ti ti-email"></i>Messages <b class="badge bg-purple pull-right">3</b></a></li>
							
							<li><a href="freelancers.html"><i class="ti ti-file"></i>freelancers</a></li>
							
							<li>
								<a href="javascript:void(0)"><i class="ti ti-user"></i>For Employer <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="manage-jobs.html">Manage Jobs</a>
									</li>
									<li>
										<a href="manage-candidate.html">Manage Candidate</a>
									</li>
								   <li>
										<a href="manage-freelancers.html">Manage Freelancers</a>
									</li>
									<li>
										<a href="managec-ompany.html">Manage Company</a>
									</li>
									<li>
										<a href="create-jobs.html">Create Jobs</a>
									</li>
									<li>
										<a href="add-freelancer.html">Add Freelancer</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="javascript:void(0)"><i class="ti ti-ruler-pencil"></i>For Candidate<span class="fa arrow"></span> <b class="badge bg-success pull-right">3</b></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="bookmarked-jobs.html">Bookmarked Jobs</a>
									</li>
									<li>
										<a href="manage-resumes.html">Manage Resumes</a>
									</li>
									<li>
										<a href="saved-company.html">Saved Company</a>
									</li>
									<li>
										<a href="create-resume.html">Create Resume</a>
									</li>
									
								</ul>
							</li>
							
							<li><a href="settings.html"><i class="ti ti-settings"></i>Settings</a></li>
							
							<li><a href="invoice.html"><i class="ti ti-clipboard"></i>Invoice</a></li>
							
							<li><a href="my-profile.html"><i class="ti ti-folder"></i>My Profile</a></li>
							
							<li><a href="create-membership.html"><i class="ti ti-star"></i>Create Membership</a></li>
							
							<li><a href="login.html"><i class="ti ti-shift-right"></i>Log Out</a></li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
			</nav>
			<!-- Sidebar Navigation -->

			<div id="page-wrapper">
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h3 class="text-themecolor">Home</h3>
					</div>
					<div class="col-md-7 align-self-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>
				</div>
				<div class="container-fluid">
				
					<!-- /row -->
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
					
					<!-- row -->
					<div class="row">
					
						<!-- Area Chart -->
						<div class="col-md-8 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="pull-right">
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
												<i class="ti-more"></i>
											</button>
											<ul class="dropdown-menu pull-right animated flipInX">
												<li><a href="#">This Month</a></li>
												<li><a href="#">Last Month</a></li>
												<li><a href="#">From 6 Month</a></li>
											</ul>
										</div>
									</div>
									<h4 class="mb-0">Your Profile Views</h4>
								</div>
								<div class="card-body">
									<ul class="list-inline text-center m-t-40">
										<li>
											<h5><i class="fa fa-circle m-r-5 cl-purple"></i>Page View</h5>
										</li>
										<li>
											<h5><i class="fa fa-circle m-r-5 cl-inverse"></i>Appy Job</h5>
										</li>
										<li>
											<h5><i class="fa fa-circle m-r-5 cl-success"></i>Registerd User</h5>
										</li>
									</ul>
									<div class="chart" id="profile-view" style="height: 300px;"></div>
								</div>
							</div>
						</div>
						
						<!-- Donut Chart -->
						<div class="col-md-4 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="mb-0">View</h4>
								</div>
								<div class="card-body">
									<ul class="list-inline text-center m-t-40">
										<li>
											<h5><i class="fa fa-circle m-r-5 cl-inverse"></i> 12 Sales</h5>
										</li>
										<li>
											<h5><i class="fa fa-circle m-r-5 cl-purple"></i> 20 Order</h5>
										</li>
										<li>
											<h5><i class="fa fa-circle m-r-5 cl-success"></i> 200 Store</h5>
										</li>
									</ul>
									<div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
								</div>
							</div>	
						</div>
						
					</div>
					<!-- /.row -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="social social-box">
								<div class="social-slick-4 facebook-box">
									<i class="fa fa-facebook"></i>
									<h3>1240</h3>
									<span>Facebook Shares</span>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="social social-box">
								<div class="social-slick-4 google-plus-box">
									<i class="fa fa-google-plus"></i>
									<h3>1872</h3>
									<span>G Plus Shares</span>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="social social-box">
								<div class="social-slick-4 twitter-box">
									<i class="fa fa-twitter"></i>
									<h3>1750</h3>
									<span>Twitter Shares</span>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="social social-box">
								<div class="social-slick-4 instagram-box">
									<i class="fa fa-instagram"></i>
									<h3>2187</h3>
									<span>Instagra Followers</span>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Row -->
					<div class="row">
						<!-- col-md-6 -->
						<div class="col-md-6">
							<div class="card">
							
								<div class="card-header">
									<h4>Popular Freelancer</h4>
								</div>
								
								<div class="card-body">
									<div class="todo-list todo-list-hover todo-list-divided">
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-warning"></span>
											</div>
											<h5 class="ct-title">Michel Chark<span class="ct-designation">UI/UX Designer</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-default btn-round btn-outline">Hire</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-status"></span>
											</div>
											<h5 class="ct-title">Michel Chark<span class="ct-designation">SEO Expert</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-round btn-success">Hired</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-danger"></span>
											</div>
											<h5 class="ct-title">Michel Chark<span class="ct-designation">PHP Expert</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-round btn-success">Hired</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img src="assets/img/user-4.jpg" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-success"></span>
											</div>
											<h5 class="ct-title">Michel Chark<span class="ct-designation">App Designer</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-default btn-round btn-outline">Hire</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img src="assets/img/user-5.jpg" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-warning"></span>
											</div>
											<h5 class="ct-title">Michel Chark<span class="ct-designation">Web Developer</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-round btn-success">Hired</a>
											</div>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<!-- /col-md-6 -->
						
						<!-- col-md-6 -->
						<div class="col-md-6">
							<div class="card">
							
								<div class="card-header">
									<h4>New Notification</h4>
								</div>
								
								<div class="card-body">
									<ul class="task">
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-a">
														<span>A</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Maryam.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-h">
														<span>H</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Maryam.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-d">
														<span>D</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Maryam.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>	
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-g">
														<span>G</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Maryam.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-h">
														<span>H</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Maryam.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
									</ul>	
								</div>
							
							</div>
						</div>
						<!-- /col-md-6 -->
					</div>
					
				</div>	
			</div>
			<!-- /#page-wrapper -->
			
			<div id="sidebar-wrapper">
				<a id="right-close-sidebar-toggle" href="#" class="theme-bg btn close-toogle toggle">
				Setting Pannel <i class="ti-close"></i></a>
				<div class="right-sidebar" id="side-scroll">
					<div class="user-box">
						<div class="profile-img">
							<img src="assets/img/user-3.jpg" alt="user">
							<!-- this is blinking heartbit-->
							<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
						</div>
						<div class="profile-text">
							<h4>Daniel Dax</h4>
							 <a href="#" class="user-setting"><i class="ti-settings"></i></a>
							 <a href="#" class="user-mail"><i class="ti-email"></i></a>
							 <a href="#" class="user-call"><i class="ti-headphone"></i></a>
							 <a href="#" class="user-logout"><i class="ti-power-off"></i></a>
						</div>
						<div class="tabbable-line">
							<ul class="nav nav-tabs ">
								<li class="active">
									<a href="#options" data-toggle="tab">
									<i class="ti-palette"></i> </a>
								</li>
								<li>
									<a href="#comments" data-toggle="tab">
									<i class="ti-bell"></i> </a>
								</li>
								<li>
									<a href="#freinds" data-toggle="tab">
									<i class="ti-comment-alt"></i> </a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="options">
									<div class="accept-request">
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status online"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Adam Dax <span class="task-time pull-right">Just Now</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status offline"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Rita Ray <span class="task-time pull-right">2 Min Ago</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status busy"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Daniel Mark <span class="task-time pull-right">7 Min Ago</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-4.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status offline"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Shruti Singh <span class="task-time pull-right">10 Min Ago</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="comments">
									<div class="task">
										<div class="task-overview">
											<div class="alpha-box alpha-a">
												<span>A</span>
											</div>
											<div class="task-detail">
												<p>Hello, I am Maryam.</p>
												<span class="task-time">2 Min Ago</span>
											</div>
										</div>
										<div class="task-overview">
											<div class="alpha-box alpha-d">
												<span>D</span>
											</div>
											<div class="task-detail">
												<p>Hello, I am Maryam.</p>
												<span class="task-time">2 Min Ago</span>
											</div>
										</div>
										<div class="task-overview">
											<div class="alpha-box alpha-s">
												<span>S</span>
											</div>
											<div class="task-detail">
												<p>Hello, I am Maryam.</p>
												<span class="task-time">2 Min Ago</span>
											</div>
										</div>
										<div class="task-overview">
											<div class="alpha-box alpha-h">
												<span>H</span>
											</div>
											<div class="task-detail">
												<p>Hello, I am Maryam.</p>
												<span class="task-time">2 Min Ago</span>
											</div>
										</div>
										<div class="task-overview">
											<div class="alpha-box alpha-g">
												<span>G</span>
											</div>
											<div class="task-detail">
												<p>Hello, I am Maryam.</p>
												<span class="task-time">2 Min Ago</span>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="freinds">
									<div class="accept-request">
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-1.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status online"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Adam Dax <span class="task-time pull-right">Just Now</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-2.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status offline"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Rita Ray <span class="task-time pull-right">2 Min Ago</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status busy"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Daniel Mark <span class="task-time pull-right">7 Min Ago</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
										<div class="friend-overview">
											<div class="friend-overview-img">
												<img src="assets/img/user-4.jpg" class="img-responsive img-circle" alt="">
												<span class="fr-user-status offline"></span>
											</div>
											<div class="fr-request-detail">
												<h4>Shruti Singh <span class="task-time pull-right">10 Min Ago</span></h4>
												<p>Accept Your Friend Request</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer"> ©Copyright 2018 Job Hill </footer>
		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="{{ asset('public/assets/plugins/js/jquery.min.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/metisMenu.min.js') }}"></script>	
		<script src="{{ asset('public/assets/plugins/js/jquery.slimscroll.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/sweetalert.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/datepicker.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/ckeditor.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/select2.min.js') }}"></script>
		<script src="{{ asset('public/assets/js/loader.js') }}"></script>
		
		<!-- Morris.js charts -->
		{{-- <script src="{{ asset('public/assets/plugins/js/raphael.min.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/js/morris.min.js') }}"></script>
 --}}
		<!-- Custom Theme JavaScript -->
		<script src="{{ asset('public/assets/js/custom.js') }}"></script>
		<script src="{{ asset('public/assets/js/dashboard-4.js') }}"></script>

	</body>

<!-- Mirrored from themezhub.com/demo/updated-jobhill-template/job-hill-live-preview/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Sep 2018 13:36:20 GMT -->
</html>


