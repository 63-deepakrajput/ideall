<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('ideallAdminfile/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('ideallAdminfile/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('ideallAdminfile/dist/css/adminlte.min.css')}}">
  <style>
    .invalid-feedback{
        display: block;
        margin-bottom: 0px;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    {{-- <img src=""> --}}
    <a href="javascript:void(0)"><b>ideall </b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
      @endif

      @if(Session::has('error'))
      <div class="alert alert-danger">
          {{Session::get('error')}}
      </div>
    @endif

      <form action="{{route('account.authenticate')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control"  name="email" value="{{old('email')}}" @error('email') is-invalid @enderror  placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
              <p class="invalid-feedback">{{$message}}</p>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="{{old('password')}}" @error('password') is-invalid @enderror  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <p class="invalid-feedback">{{$message}}</p>
      @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('ideallAdminfile/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('ideallAdminfile/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('ideallAdminfile/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
