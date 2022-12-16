<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BSW | reset </title>
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

<body class="hold-transition reset-page">
<div class="login-box">
    <div class="reset-logo p-3">
        <a href="{{ '/' }}">
            <img src="{{ asset('assets/images/logo/logo.png') }}" class="img img-responsive"
                 style="width: auto; max-width: 80%;">
        </a>
    </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <div class="form-reset">
        <div class="reset-card-body">
            <div class="text-center">
                <p class="reset-box-msg mb-3">Reset Akun</p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Name !-->
                <div class="input-group mb-4">

                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" placeholder="email" required autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('name')
                    <span class="text-danger">
                                <p>{{ $message }}</p>
                            </span>
                    @enderror
                </div>
                <!-- Name !-->

                <!-- ResetPassword !-->
                <div class="row justify-content-center mt-5">
                    <button type="submit" class="btn btn-reset"> Reset Password</button>
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
