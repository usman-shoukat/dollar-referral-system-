
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
                            <h5 class="card-header">All Product Lists</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Id</th>
                                            <th class="border-0">Title</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Category</th>
                                            <th class="border-0">Desc</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->id}}</td>
                                                <td>{{$getalladmins->pro_title}}</td>
                                                <td>{{$getalladmins->pro_price}}</td>
                                                <td>{{$getalladmins->pro_cat}}</td>
                                                <td>{{$getalladmins->pro_dec}}</td>
                                                <td><img src="{{ asset('admin/'.$getalladmins->pro_img) }}" width="100px" alt="" title=""></td>
                                                <td>
                                                    <a href="{{ route('rejectproduct', [$getalladmins->id]) }}"> <button type="submit"  class="btn btn-danger">Delete</button></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('updateproduct', [$getalladmins->id]) }}"><button type="submit" class="btn btn-success">Update</button></a>
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

