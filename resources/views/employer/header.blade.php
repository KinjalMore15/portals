<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><h1>OPT<span style="color:#8ca930;">nation</span></h1></a>
				</div>
				<!-- /.navbar-header -->
				
				<ul class="nav navbar-top-links navbar-left header-search-form hidden-xs">
					<li><a class="menu-brand" id="menu-toggle"><span class="ti-view-grid"></span></a></li>
					<li class="hidden-sm hidden-xs">
						<div class="header-search-form input-group">
							<span class="input-group-addon"><span class="ti-search"></span></span>
							<input type="text" class="form-control" placeholder="Search &amp; Enter">
						</div>
					</li>
				</ul>
				<ul class="nav navbar-top-links navbar-right in">					
					
					<!-- /.dropdown -->
					<li class="dropdown ">
						<a class="dropdown-toggle active" data-toggle="dropdown" href="{{ url('employer/logout') }}" aria-expanded="true">
							Logout
						</a>
						<ul class="dropdown-menu dropdown-user right-swip in">
							<li><a href="#" class="active"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
							<li class="dropdown-menu dropdown-user left-swip in"><a class="dropdown-toggle active" data-toggle="dropdown" href="{{ url('employer/logout') }}" aria-expanded="true">
							Logout
						</a>
						<ul class="dropdown-menu dropdown-user right-swip in">
							<li><a href="#" class="active"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
							<li class="dropdown-menu dropdown-user left-swip in"><a href="#" class="active"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
							<li><a href="{{ url('employer/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>							
						</ul>
							</li>
							<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
							
						</ul>
						<!-- /.dropdown-user -->
					</li>
					

					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->
				
				<!-- Sidebar Navigation -->
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
						
						   <li class="active"><a href="{{ url('/employer/dashboard') }}"><i class="fa fa-bullseye"></i>Dashboard</a></li>						   						
							
							<li><a href="{{ url('/employer/add_job') }}"><i class="ti ti-plus"></i>Add Jobs </a></li>						
							<li><a href="{{ url('/employer/job_lists') }}"><i class="ti ti-eye"></i>View Jobs </a></li>
							<li>
								<a href="{{ url('/employer/add_emp') }}">Add User</a>
							</li>
							<li>
								<a href="{{ url('employer/emp_lists') }}">Veiw User</a>
							</li>
								   
							
				
							<li class="">
								<a href="javascript:void(0)"><i class="ti ti-ruler-pencil"></i>For Candidate<span class="fa arrow"></span> <b class="badge bg-success pull-right">3</b></a>
								<ul class="nav nav-second-level collapse " aria-expanded="false" style="height: 0px;">
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
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
			</nav>