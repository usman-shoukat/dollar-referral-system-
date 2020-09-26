<x-homelink/>

    <body class="main-body app sidebar-mini dark-theme">
<x-homesidebar/>


		<!-- main-content -->
		<div class="main-content">

			     <div class="main-header  side-header">
                <div class="container-fluid">
                    <div class="main-header-left ">
                        <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                            <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
                        </div>
                        <div class="responsive-logo">
                            <a href="index.html"><img src="home/assets/img/brand/logo-white.png" class="logo-1"></a>
                            <a href="index.html"><img src="home/assets/img/brand/logo.png" class="logo-11"></a>
                            <a href="index.html"><img src="home/assets/img/brand/favicon-white.png" class="logo-2"></a>
                            <a href="index.html"><img src="home/assets/img/brand/favicon.png" class="logo-12"></a>
                        </div>
                        <ul class="header-megamenu-dropdown  nav">
                            <li class="nav-item">
                                <div class="btn-group dropdown">
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" type="button"><span><i class="fe fe-settings"></i> Settings </span></button>
                                    <div  class="dropdown-menu" >
                                        <div class="dropdown-menu-header header-img p-3">
                                            <div class="drop-menu-inner">
                                                <div class="header-content text-left d-flex">
                                                    <div class="text-white">
                                                        <h5 class="menu-header-title">Setting</h5>
                                                       
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-scroll">
                                            <div>
                                                <div class="setting-menu ">
                                                    <a  class="dropdown-item" href="#"><i class="mdi mdi-account-outline tx-16 mr-2 mt-1"></i>Profile</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-box-outline tx-16 mr-2"></i>Contacts</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-location tx-16 mr-2"></i>Accounts</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="typcn typcn-briefcase tx-16 mr-2"></i>About us</a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="setting-menu-footer flex-column pl-0">
                                            <li class="divider mb-0 pb-0 "></li>
                                            <li class="setting-menu-btn">
                                                <button class=" btn-shadow btn btn-success btn-sm">Cancel</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="main-header-right">
                        <div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="reset" class="btn btn-default">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button type="submit" class="btn btn-default nav-link">
                                            <i class="fe fe-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="nav nav-item  navbar-nav-right ml-auto">
                            <div class="nav-item full-screen fullscreen-button">
                                <a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
                            </div>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-header -->

            <!-- container -->
            <div class="container-fluid">

                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div>
                        <h4 class="content-title mb-2">Hi, welcome back!</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Project</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-auto">
                        <div class=" d-flex right-page">
                            
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <span class="d-block">
                                        <span class="label">PROFIT</span>
                                    </span>
                                    <span class="value">
                                        ${{$checkref}}
                                    </span>
                                </div>
                                <div class="ml-3 mt-2">
                                    <span class="sparkline_bar31"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /breadcrumb -->


				
				<br>	<br>	<br>	<br>	<br>	

				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Ocean Referral</div>
										<div class="h3 mt-2 mb-2"><b>{{$userReferral}}</b><span class="text-success tx-13 ml-2"></span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-eye project bg-primary-transparent text-primary "></i>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Sky Referral</div>
										<div class="h3 mt-2 mb-2"><b>{{$skrref}}</b><span class="text-success tx-13 ml-2"></span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-users project bg-pink-transparent text-pink "></i>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Heaven Referral</div>
										<div class="h3 mt-2 mb-2"><b>{{$heavenreferral}}</b><span class="text-success tx-13 ml-2"></span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-pulse project bg-warning-transparent text-warning "></i>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Total Revenue</div>
										<div class="h3 mt-2 mb-2"><b>${{$checkref}}</b><span class="text-success tx-13 ml-2"></span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-bar-chart-alt project bg-success-transparent text-success "></i>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-bar-chart project bg-primary-transparent mx-auto text-primary "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Ocean Revenue</h6>
								<h3 class="font-weight-semibold">${{$userReferral * 3.5 }}</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-pie-chart project bg-pink-transparent mx-auto text-pink "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Sky Revenue</h6>
								<h3 class="font-weight-semibold">${{$skrref * 5.5 }}</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-pulse  project bg-teal-transparent mx-auto text-teal "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Heaven Revenue</h6>
								<h3 class="font-weight-semibold">${{$heavenreferral * 7.5}}</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-sm-6 col-md-6">
						<div class="card text-center">
							<div class="card-body ">
								<div class="feature widget-2 text-center mt-0 mb-3">
									<i class="ti-stats-up project bg-success-transparent mx-auto text-success "></i>
								</div>
								<h6 class="mb-1 text-muted">Total Withdraw Amount</h6>
								<h3 class="font-weight-semibold">${{$withdrawapp}}</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				
			</div>
		</div>
		<!-- main-content closed -->

<x-homefooter/>