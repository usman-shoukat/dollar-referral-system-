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
            <div class="col-md-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                @endif

                <div class="ecommerce-widget">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Update Product</h5><br><br>
                                <div class="col-md-6">
                                    <form class="row login_form" method="POST" enctype="multipart/form-data" action="{{ route('product.update',['id'=> $re]) }}" id="contactForm" novalidate="novalidate">
                                        @csrf
                                        <div class="col-md-12 form-group">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="pro_title" value="{{ $uppro->pro_title }}"  placeholder="Product Title" required  autofocus>

                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="pro_price" value="{{ $uppro->pro_price }}" placeholder="Product Price"  required >
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" value="{{ $uppro->pro_cat }}" name="pro_cat" placeholder="pro_cat"  required >
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea id="password-confirm" type="text" class="form-control" name="pro_dec" placeholder="Product Dec"   required >{{ $uppro->pro_dec }}</textarea>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <img src="{{ asset('admin/'.$uppro->pro_img) }}" width="100px" alt="" title="">
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <b>Upload Of Your Product Image:</b><br>
                                            <input type="file" name="pro_img" value="{{$uppro->pro_img}}" id="fileToUpload"><br>

                                        </div>
                                        <div class="col-md-12 form-group">
                                            <button type="submit" value="submit" class="primary-btn btn btn-success">Update Product</button>

                                        </div>

                                    </form>
                                </div>
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

