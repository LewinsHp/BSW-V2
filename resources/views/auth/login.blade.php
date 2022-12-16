<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BSW | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo p-3">
        <a href="{{ '/' }}">
            <img src="{{ asset('assets/images/logo/logo.png') }}" class="img img-responsive"
                 style="width: auto; max-width: 80%;">
        </a>
    </div>
    <div class="form-login">
        <div class="login-card-body">
            <div class="text-center">
                <p class="register-box-msg mb-3">Login Akun</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" placeholder="Email Address" required
                           autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                </div>
                <div class="input-group">
                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password"
                           placeholder="Password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-key"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <!-- Captcha -->
                <div class="col-12 mt-2">
                    <div class="captcha" style="margin-bottom: 11px;">
                        <span id="captcha-img" class="refereshrecapcha">{!! captcha_img('inverse') !!}</span>
                        <button class="btn btn-success btn-sm refresh-captcha"><i class='fa fa-sync'></i></i> </button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" @error('captcha') is-invalid @enderror" name="captcha">
                        @error('captcha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <script>
                    function refreshCaptcha() {
                        $.ajax({
                            url: "/refereshcapcha",
                            method: 'get',
                            dataType: 'html',
                            success: function (json) {
                                $('.refereshrecapcha').html(json);
                            },
                            error: function (data) {
                                alert('Try Again.');
                            }
                        });
                    }
                </script>

                <!-- Captcha -->

                <div class="row justify-content-center mt-5">
                    <!-- /.col -->
                    <button type="submit" class="btn btn-login"> Log In</button>
                    <!-- /.col -->
                </div>
            </form>
            <div class="register-card-body">
                <div class="d-flex justify-content-center links">
                    Tidak Memiliki Akun ? <a href="{{ route('register') }}">Register Akun</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('password.request') }}">Lupa Password?</a>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

