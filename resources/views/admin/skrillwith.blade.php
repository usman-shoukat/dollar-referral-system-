
<x-adminlinkbar/>
<!-- left sidebar -->
<!-- ============================================================== -->
<x-adminsidebar/>
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
                    <!-- recent orders  -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">All Skrill Withdraw</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Id</th>
                                            <th class="border-0">Skrill Username</th>
                                            <th class="border-0">Skrill Email</th>
                                            <th class="border-0">Amount</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->id}}</td>
                                                <td>{{$getalladmins->name}}</td>
                                                <td>{{$getalladmins->email}}</td>
                                                <td>{{$getalladmins->amount}}</td>
                                                <td>
                                                    <a href="{{ route('rejectskrillwith', [$getalladmins->id]) }}"> <button type="submit"  class="btn btn-danger">Delete</button></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('appskrillwith', [$getalladmins->id]) }}"><button type="submit" class="btn btn-success">Approval</button></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
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

            <x-adminfooter/>

