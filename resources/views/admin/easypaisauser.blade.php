
<x-adminlinkbar/>
<!-- left sidebar -->
<!-- ============================================================== -->
<x-pxadminsidebar/>
<!-- ============================================================== -->
<!-- end left sidebar -->

<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">GotJobPak Dashboard  </h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

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
                                         <a href="{{route('adminwithdraw',['apply' => $Bitcoin1])}}"><img width="150px"  src="assets/img/8d85d6c8-7ab5-4de9-aec7-2e647cb6a975.jpg" style="border-radius: 10px;"></a>
                                        

                                      
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
                                         <a href="{{route('adminwithdraw',['apply' => $Bitcoin])}}"><img width="150px"  src="assets/img/4a08bf7f-97d3-4bca-87b2-dac1667284bc.jpg" style="border-radius: 10px;"></a>
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
                                         <a href="{{route('adminwithdraw',['apply' => $AdvCash])}}"><img width="150px"  src="assets/img/ab8926f7-d462-4706-b252-2bb1e0982bfb.jpg" style="border-radius: 10px;"></a>
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
                                         <a href="{{route('adminwithdraw',['apply' => $CashMaal])}}"><img width="150px"  src="assets/img/ce118dda-965b-438d-96fe-e17f33edbf21.jpg" style="border-radius: 10px;"></a>
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
                                         <a href="{{route('adminwithdraw',['apply' => $Jazz])}}"><img width="150px"  src="assets/img/5eef39b0-ad6a-435e-b0e4-0d645a8ddead.jpg" style="border-radius: 10px;"></a>
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
                                         <a href="{{route('adminwithdraw',['apply' => $Paisa])}}"><img width="150px" src="assets/img/2e723b53-4070-420b-825c-cc0c05e285ff.jpg" style="border-radius: 10px;"></a>
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
                                        <a href="{{route('adminwithdraw',['apply' => $Skrill])}}"> <img  width="150px" src="assets/img/6a427d37-d42d-48c0-b6d4-abb6772b26c8.jpg" style="border-radius: 10px;"></a>
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
                                         <a href="{{route('adminwithdraw',['apply' => $Payeer])}}"><img width="150px" src="assets/img/9026797d-74a9-4782-bb5b-c7fe2285f1c6.jpg" style="border-radius: 10px;"></a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /row -->

            

            
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                   
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->


                </div>





                <!-- ============================================================== -->
                <!-- end total orders  -->
                <!-- ============================================================== -->
            </div>

            <x-pxadminfooter/>

