
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


                    <a href="" style="margin-left: 20px;" data-toggle="modal" data-target="#payoneerModal"> <button data-toggle="modal" data-target="#payoneerModal" type="submit"  class="btn btn-success">Add Offer Image</button></a>

                </div><br>
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">All Offer Images</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">Id</th>
                                            <th class="border-0">Title</th>
                                            <th class="border-0">Date</th>
                                            <th class="border-0">Image</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin as $getalladmins)
                                            <tr>
                                                <td>{{$getalladmins->id}}</td>
                                                <td>{{$getalladmins->title}}</td>
                                                <td>{{$getalladmins->date}}</td>
                                                <td><img src="{{ asset('admin/offerimg/'.$getalladmins->image) }}" width="100px" alt="" title=""></td>

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

            <div class="modal fade" id="payoneerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Offer Image</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <form class="row login_form" enctype="multipart/form-data" method="POST" action="{{  route('offer.mainimg') }}" id="contactForm" novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group">
                                    <input id="name" type="text" class="form-control " name="title" placeholder="title" required autocomplete="name" autofocus>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="date" class="form-control " name="date" required  placeholder="date" onfocus="this.placeholder = ''" onblur="this.placeholder = ''">
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="file" name="image" id="fileToUpload">

                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="primary-btn">Upload</button>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
