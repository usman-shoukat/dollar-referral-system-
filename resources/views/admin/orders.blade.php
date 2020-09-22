
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
                            <h5 class="card-header">All Orders</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                           <th class="border-0">Username</th>
                        <th class="border-0">City</th>
                        <th class="border-0">Zip Code</th>
                        <th class="border-0">Address</th>
                        <th class="border-0">Product Name</th>
                         <th class="border-0">Product Price</th>
                          <th class="border-0">Product Quantity</th>
                           <th class="border-0">Total Price</th>
                          <th class="border-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->user->fname}} {{$getalladmins->user->lname}}</td>
                                                 <td>{{$getalladmins->user->city}}</td>
                                                  <td>{{$getalladmins->user->zip}}</td>
                                                  <td>{{$getalladmins->user->add1}} <br> <br>{{$getalladmins->user->add2}}</td>
                                                <td>{{$getalladmins->product->pro_title}}</td>
                                                <td>${{$getalladmins->product->pro_price}}</td>
                                                <td>{{$getalladmins->quantity}}</td>
                                                <td>${{$getalladmins->total}}</td>
                                                <td>
                                                    <a href="{{ route('rejectorder', [$getalladmins->id]) }}"> <button type="submit"  class="btn btn-danger">Delete</button></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('apporder', [$getalladmins->id]) }}"><button type="submit" class="btn btn-success">Approval</button></a>
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

