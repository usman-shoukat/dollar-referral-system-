<x-homelink/>
<body class="main-body dark-theme">

        <!-- Loader -->
        <div id="global-loader">
            <img src="home/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h" >
            <div class="main-signin-wrapper">
                <div class="main-card-signin d-md-flex wd-100p" >
                      <div class="main-card-signin d-md-flex wd-100p">
                <div class="wd-md-50p login  p-5 " >
                    <div class="my-auto authentication-pages">
                        <div>
                            <img src="home/assets/img/brand/favicon-white.png" class=" m-0 mb-4" alt="logo">
                            
                           
                        </div>
                    </div>
                </div>
            
                <div class="p-5 wd-md-50p" style="margin-left: 0px;">
                    <div class="main-signin-header" >
                        <h2>Welcome back!</h2>
                        <h4>Please sign in to continue with D2D</h4>
                          <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email" type="text" value="info@spruko.com">
                            </div>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                            <div class="form-group">
                             <label>Password</label> 
                             <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"" placeholder="Enter your password" type="password" >
                            </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit"  class="btn btn-main-primary btn-block">Sign In</button>
                        </form>
                    </div>
                    <div class="main-signin-footer mt-3 mg-t-5">
                          @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                      <p>Don't have an account? <a href="{{ route('register') }}">Create an Account</a></p>
                    </div>
                </div>

            </div>
            </div>
        </div>
        <!-- /main-signin-wrapper -->

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

        <!--- Jquery.mCustomScrollbar js --->
        <script src="home/assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js"></script>

        <!--- Custom js --->
        <script src="home/assets/js/custom.js"></script>

    </body>
</html>