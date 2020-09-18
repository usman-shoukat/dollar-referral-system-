<x-adminlink/>
    <body class="main-body app ">

<!-- Loader -->
        <div id="global-loader">
            <img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Main-signin-wrapper -->
        <div class="my-auto page">
            <div class="main-signin-wrapper">
                <div class="main-card-signin forgot-password d-md-flex wd-100p">
                    <div class="wd-md-50p  page-signin-style p-md-5 p-4 text-white d-none d-md-block ">
                        <div class="my-auto authentication-pages">
                            <div>
                                <img src="../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                                <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
                                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="index.html" class="btn btn-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 wd-md-50p">
                        <div class="main-signin-header">
                            <h2>Forgot Password!</h2>
                            <h4>Please Enter Your Email</h4>
                              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                                <div class="form-group">
                                    <label>Email</label> <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email" type="text">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <button type="submit" class="btn btn-main-primary btn-block">Send</button>
                            </form>
                        </div>
                        <div class="main-signup-footer mg-t-10">
                            <p>Forget it, <a href="page-signin.html"> Send me back</a> to the sign in screen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main-signin-wrapper -->

        
        <!--- JQuery min js --->
        <script src="admin/assets/plugins/jquery/jquery.min.js"></script>

        <!--- Bootstrap Bundle js --->
        <script src="admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!--- Ionicons js --->
        <script src="admin/assets/plugins/ionicons/ionicons.js"></script>

        <!--- Moment js --->
        <script src="admin/assets/plugins/moment/moment.js"></script>

        <!--- Eva-icons js --->
        <script src="admin/assets/js/eva-icons.min.js"></script>

        <!--- Rating js --->
        <script src="admin/assets/plugins/rating/jquery.rating-stars.js"></script>
        <script src="admin/assets/plugins/rating/jquery.barrating.js"></script>

        <!--- JQuery sparkline js --->
        <script src="admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!--- Custom js --->
        <script src="admin/assets/js/custom.js"></script>
    </body>
</html>