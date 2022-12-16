<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BSW - BP Batam | Registrasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('templates/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('templates/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>BSW</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Halaman Registrasi</p>

      <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input id="name"
          type="text" 
          class="form-control @error('name') is-invalid @enderror"
          name="name"
          value="{{ old('name') }}"
          placeholder="Nama Lengkap Anda"
          required autocomplete="name"
          autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input id="email"
          type="email" 
          class="form-control @error('email') is-invalid @enderror"
          name="email"
          value="{{ old('email') }}" 
          placeholder="Email"
          required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <div class="input-group mb-3">
          <input id="password"
          type="password" 
          class="form-control @error('password') is-invalid @enderror"
          name="password"
          placeholder="Password"
          required autocomplete="new-password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input id="password-confirm"
          type="password" 
          class="form-control"
          name="password_confirmation"
          placeholder="Password"
          required autocomplete="new-password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Saya menyetujui <a href="#">aturan</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{route('login')}}" class="text-center"><b>Saya sudah punya akun.</b></a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('templates/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('templates/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('templates/dist/js/adminlte.min.js')}}"></script>
</body>
</html>