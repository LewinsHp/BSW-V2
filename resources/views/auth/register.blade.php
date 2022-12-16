<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BSW | Register</title>
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

<body class="hold-transition register-page">
<div class="login-box">
    <div class="register-logo p-3">
        <a href="{{ '/' }}">
            <img src="{{ asset('assets/images/logo/logo.png') }}" class="img img-responsive"
                 style="width: auto; max-width: 80%;">
        </a>
    </div>
    <div class="form-register">
        <div class="register-card-body">
            <div class="text-center">
                <p class="register-box-msg mb-3">Register Akun</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name !-->
                <div class="input-group mb-4">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('name')
                    <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                </div>
                <!-- Name !-->

                <!-- Email !-->
                <div class="input-group mb-lg-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                </div>
                <!-- Email !-->

                <!-- Password !-->
                <div class="input-group mb-lg-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

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
                <!-- Password !-->

                <!-- ConfirmPassword !-->
                <div class="input-group mb-lg-4">
                    <input id="password-confirm" type="password" class="form-control"  name="password_confirmation" placeholder="Re-type Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-key"></span>
                        </div>
                    </div>
                </div>
                <!-- ConfirmPassword !-->

                <!-- SubmitPassword !-->
                <div class="row justify-content-center mt-5">
                    <button type="submit" class="btn btn-register"> Register</button>
                </div>
            </form>
            <!-- SubmitPassword !-->
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>

</form>
