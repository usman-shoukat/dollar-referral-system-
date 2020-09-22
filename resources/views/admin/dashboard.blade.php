
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
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">GotJobPak Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Business</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">${{$totalbusinesscount}}</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">

                                    </div>
                                </div>
                                <div id="sparkline-revenue"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Withdraw Amount</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">${{$totalwithdarw}}</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">

                                    </div>
                                </div>
                                <div id="sparkline-revenue2"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Approval User</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{$getallappuser}}</h1>
                                        <small>Non Approval User : {{$getalluser}}</small>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-primary font-weight-bold">

                                    </div>
                                </div>
                                <div id="sparkline-revenue3"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Avg. Revenue Per User</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">$0.60</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">

                                    </div>
                                </div>
                                <div id="sparkline-revenue4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->

                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Admin Accounts</h5>
                                <tr>
                                    <td colspan="9"><a href="#" data-toggle="modal" data-target="#jazzModal" class="btn btn-outline-light float-right">Click For Add Admin</a></td>
                                </tr>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id</th>
                                                <th class="border-0">Email</th>
                                                <th class="border-0">Reject</th>
                                                <th class="border-0">Update</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($getalladmin as $getalladmins)
                                                <tr>
                                                    <td>{{$getalladmins->id}}</td>
                                                    <td>{{$getalladmins->email}}</td>
                                                    <td>
                                                        <form  method="post" action="{{ url('/update', [$getalladmins->id]) }}">
                                                            {{csrf_field()}}

                                                            <button type="submit"  class="btn btn-danger">Reject</button>
                                                        </form>
                                                    </td>
                                                    <td>


                                                            <a href="{{ route('update', [$getalladmins->id]) }}"><button type="submit" class="btn btn-success">Update</button></a>

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
                <div class="modal fade" id="jazzModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Add Admin Form</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <b>Wellcome Here Sir</b>
<br>

                                <form class="row login_form" method="POST" action="{{ route('makeadmin.store') }}" id="contactForm" novalidate="novalidate">
                                    @csrf


                                    <div class="col-md-12 form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email"  required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"  required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>



                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" class="primary-btn">Register</button>

                                    </div>

                                </form>
                            </div>



                        </div>
                    </div>
                </div>
