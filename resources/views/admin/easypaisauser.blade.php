
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">All EasyPaisa Accounts ( {{ $EasyPaisausercount }})</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Id</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Platform</th>
                                            <th class="border-0">Trasactions Id</th>
                                            <th class="border-0">Amount</th>
                                            <th class="border-0">Reject</th>
                                            <th class="border-0">Approval</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($EasyPaisauser as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->id}}</td>
                                                <td>{{$getalladmins->email}}</td>
                                                <td>{{$getalladmins->platform}}</td>
                                                <td>{{$getalladmins->image}}</td>
                                                <td>5$</td>
                                                <td>
                                                    <a href="{{ route('rejectpaisa', [$getalladmins->id]) }}"> <button type="submit"  class="btn btn-danger">Reject</button></a>

                                                </td>
                                                <td>

                                                    <a href="{{ route('apppaisa', [$getalladmins->id]) }}"><button type="submit" class="btn btn-success">Approval</button></a>

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

