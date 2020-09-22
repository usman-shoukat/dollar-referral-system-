
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
                            <h5 class="card-header">All Blog Lists</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Writer</th>
                                            <th class="border-0">Title</th>
                                            <th class="border-0">Short Dec</th>
                                            <th class="border-0">Dec</th>
                                            <th class="border-0">Qoute</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($blog as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->artname}}</td>
                                                <td>{{$getalladmins->title}}</td>
                                                <td>{{$getalladmins->shortdec}}</td>
                                                <td>{{$getalladmins->dec}}</td>
                                                <td>{{$getalladmins->qoute}}</td>
                                                <td><img src="{{ asset('admin/blog/'.$getalladmins->imqge) }}" width="100px" alt="" title=""></td>
                                                <td>
                                                    <a href="{{ route('delblog', [$getalladmins->id]) }}"> <button type="submit"  class="btn btn-danger">Delete</button></a>
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

