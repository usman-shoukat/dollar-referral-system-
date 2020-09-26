
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

                <div class="row">




                </div>
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">All Ocean Package Approvel</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Username</th>
                                            <th class="border-0">Package Name</th>
                                            <th class="border-0">Package Price</th>
                                            <th class="border-0">Platform</th>
                                            <th class="border-0">Transaction Id</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                        </thead>
                                      
                                    @foreach ($getalladmin as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->user->name}}</td>
                                                <td>{{$getalladmins->PackageName}}</td>
                                                <td>${{$getalladmins->Packageprice}}</td>
                                                <td>{{$getalladmins->platform}}</td>
                                                <td>{{$getalladmins->Transactionid}}</td>
                                                 <td>
                                                    <a href="{{ route('deloceanpack', [$getalladmins->id]) }}"> <button type="submit"  class="btn btn-danger">Delete</button></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('appoceanpack', [$getalladmins->user_id]) }}"><button type="submit" class="btn btn-success">Approval</button></a>
                                                </td>
                                               
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    {{$getalladmin->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->


                </div>





                <!-- ============================================================== -->
                <!-- end total orders  -->
                <!-- ============================================================== -->
            </div>

            <x-pxadminfooter/>

