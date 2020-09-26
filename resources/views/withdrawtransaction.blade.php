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


                
                

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="">Perfect Money</div>
                                        <br>
                                         <?php  $Bitcoin1 = 'perfectmoney'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $Bitcoin1])}}"><img   src="assets/img/8d85d6c8-7ab5-4de9-aec7-2e647cb6a975.jpg" style="border-radius: 10px;"></a>

                                      
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
                                        <div class="">Bitcoin</div>
                                        <br>
                                            <?php  $Bitcoin = 'Bitcoin'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $Bitcoin])}}"><img   src="assets/img/4a08bf7f-97d3-4bca-87b2-dac1667284bc.jpg" style="border-radius: 10px;"></a>
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
                                        <div class="">AdvCash</div>
                                        <br>
                                            <?php  $AdvCash = 'AdvCash'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $AdvCash])}}"><img   src="assets/img/ab8926f7-d462-4706-b252-2bb1e0982bfb.jpg" style="border-radius: 10px;"></a>
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
                                        <div class="">Cash Maal</div>
                                        <br>
                                            <?php  $CashMaal = 'CashMaal'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $CashMaal])}}"><img   src="assets/img/ce118dda-965b-438d-96fe-e17f33edbf21.jpg" style="border-radius: 10px;"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <br><br><br>
                    <!-- row -->
                <div class="row row-sm">
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="">Jazz Cash</div><br>
                                            <?php  $Jazz = 'Jazz'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $Jazz])}}"><img   src="assets/img/5eef39b0-ad6a-435e-b0e4-0d645a8ddead.jpg" style="border-radius: 10px;"></a>
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
                                        <div class="">Easy Paisa</div><br>
                                            <?php  $Paisa = 'Paisa'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $Paisa])}}"><img  src="assets/img/2e723b53-4070-420b-825c-cc0c05e285ff.jpg" style="border-radius: 10px;"></a>
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
                                        <div class="">Skrill</div><br>
                                            <?php  $Skrill = 'Skrill'  ?>
                                        <a href="{{route('withdraw.transaction',['apply' => $Skrill])}}"> <img   src="assets/img/6a427d37-d42d-48c0-b6d4-abb6772b26c8.jpg" style="border-radius: 10px;"></a>
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
                                        <div class="">Payeer</div><br>
                                            <?php  $Payeer = 'Payeer'  ?>
                                         <a href="{{route('withdraw.transaction',['apply' => $Payeer])}}"><img  src="assets/img/9026797d-74a9-4782-bb5b-c7fe2285f1c6.jpg" style="border-radius: 10px;"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /row -->

            

            

                
            </div>
        </div>
        <!-- main-content closed -->

<x-homefooter/>

