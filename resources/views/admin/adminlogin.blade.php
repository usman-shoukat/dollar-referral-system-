<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="/admin/penal"><a class="navbar-brand" href="/admin/penal">GotJobPak</a></a><span class="splash-description">Please enter your admin information.</span></div>
        <div class="card-body">
            <form  method="POST" action="{{ route('admin.login') }}" >
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}">
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-group">
                    <input class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-group">
                    <label class="custom-control custom-checkbox">

                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} <span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">

        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="/admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
