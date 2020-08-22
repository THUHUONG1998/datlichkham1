<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Đăng nhập</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>

      <form method="POST" action="{{ route('login') }}">
          @csrf
        <div class="input-group mb-3">
          <input  name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required autocomplete="Username" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span  id="faopen" class="fas fa-eye" onclick="showHiddenPass()"></span>
              <span id="faclose" class="fas fa-eye-slash" style="display: none;" onclick="showHiddenPass()"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-5">
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <div class="mb-1">
        <div class="col-md-8 offset-md-0">
            @if (Route::has('password.request'))
                <a  class="text-center" href="{{ route('password.request') }}">
                    {{ __('Quên mật khẩu') }}
                </a>
            @endif
        </div>
       
        <a href="{{route('register')}}" class="text-center">Đăng kí thành viên</a>
      </p>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
  function showHiddenPass()
  {
      var pass = document.getElementById("password");
      if(pass.type === "password")
      {
          pass.type = "text";
          faopen.style.display = "none";
          faclose.style.display = "block";
          
      }else
      {
          pass.type = "password";
          faopen.style.display = "block";
          faclose.style.display = "none";
      }
  }
</script>
<!-- jQuery -->
<script src="AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-master/dist/js/adminlte.min.js"></script>

</body>
</html>







