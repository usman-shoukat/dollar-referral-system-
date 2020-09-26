
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
                                       ${{auth()->user()->balance}}
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


				
			
			
				<br><br><br>
					<!-- row -->
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Thanks For Buy</h6>
									<p class="text-muted card-sub-title">We Active Your Package Within</p>
								</div>
								<div class="btn ripple btn-primary" >
									24 Hour
																	</div>
							</div>
						</div>
					</div>
			

				
			</div>
		</div>
		<!-- main-content closed -->

<x-homefooter/>