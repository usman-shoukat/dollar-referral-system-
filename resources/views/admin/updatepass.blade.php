
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<br><br><br><br><br>
    <div class="main-grid">
        <div class="row">
            <div class="col-md-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                @endif
            </div>
            <div class="col-md-12">
                @if(\Illuminate\Support\Facades\Session::has('error'))
                    <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                @endif
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.update',['id'=> $re]) }}">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <label> <b>Old Password</b></label>
                                        <input type="password" name="oldpassword" class="form-control {{ $errors->has('oldpassword') ? 'is-invalid' : '' }}"">
                                        <div class="input-group-append">
                                            <div class="input-group-text">

                                            </div>
                                        </div>
                                        @if($errors->has('oldpassword'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('oldpassword') }}</strong>
                                            </div>
                                        @endif
                                    </div>



                                    {{-- Password field --}}
                                    <div class="input-group mb-3">
                                        <label> <b>Password</b></label>
                                        <input type="password" name="password"
                                               class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        ">
                                        <div class="input-group-append">
                                            <div class="input-group-text">

                                            </div>
                                        </div>
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Confirm password field --}}
                                    <div class="input-group mb-3">
                                        <label> <b>Password Confirmation</b></label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                        ">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            </div>
                                        </div>
                                        @if($errors->has('password_confirmation'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <br>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Update Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">


            </div>
        </div>
    </div>
<x-adminfooter/>
