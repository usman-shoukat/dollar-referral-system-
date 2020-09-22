<x-homelink/>

    <body class="main-body dark-theme">

        <!-- Loader -->
        <div id="global-loader">
            <img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper">
                <div class="main-card-signin d-md-flex wd-100p">
                <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                    <div class="my-auto authentication-pages">
                        <div>
                            <img src="home/assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                            <h5 class="mb-4">Responsive Modern Dashboard &amp; home Template</h5>
                            <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                            <a href="index.html" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="sign-up-body wd-md-50p">
                    <div class="main-signin-header">
                        <h2>Welcome here!</h2>
                        <h4>Please Register with D2D</h4>
                        <form method="POST" action="{{ route('register') }}">
                          @csrf
                            <div class="form-group">
                                <label>{{ __('Username') }}</label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your firstname" type="text">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                            <div class="form-group">
                                <label>{{ __('E-Mail Address') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" type="text">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Password') }}</label>
                                <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password" type="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    <div class="form-group ">
                        <label>{{ __('Confirm Password') }}</label>

                       
                            <input id="password-confirm" type="password" placeholder="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                        </form>
                    </div>
                    <div class="main-signup-footer mg-t-10">
                        <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- JQuery min js --->
        <script src="home/assets/plugins/jquery/jquery.min.js"></script>

        <!--- Bootstrap Bundle js --->
        <script src="home/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!--- Ionicons js --->
        <script src="home/assets/plugins/ionicons/ionicons.js"></script>

        <!--- Moment js --->
        <script src="home/assets/plugins/moment/moment.js"></script>

        <!--- Eva-icons js --->
        <script src="home/assets/js/eva-icons.min.js"></script>

        <!--- Rating js --->
        <script src="home/assets/plugins/rating/jquery.rating-stars.js"></script>
        <script src="home/assets/plugins/rating/jquery.barrating.js"></script>

        <!--- JQuery sparkline js --->
        <script src="home/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!--- Custom js --->
        <script src="home/assets/js/custom.js"></script>
    </body>
</html>