
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
                            <h5 class="card-header">All Referals Email </h5>

                            <form  method="get" action="{{ route('sreach') }}">

                                {{csrf_field()}}

                                <input type="text" style="width: 550px;" placeholder="Enter Email For Check Referrals" class="" name="search" value="">
                                <button type="submit" class="btn btn-success" style="width: 20%;">Submit</button>
                            </form>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">

                                            <th class="border-0">Email</th>

                                            <th class="border-0">Approval</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getrefemail as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->email}}</td>
                                                <td>
                                                    <a href="{{ route('checkreferrals', [$getalladmins->id]) }}"><button type="submit" class="btn btn-success">Check Referrals</button></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                {{ $getrefemail->links() }}
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

