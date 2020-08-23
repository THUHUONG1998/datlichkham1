<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Registration </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Đăng kí</b>
  </div>

  @if($errors->any())
    <div class="row collapse">
        <ul class="alert-box warning radius">
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
  @endif

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng kí thành viên mới</p>

      <form method="POST" action="{{ route('register') }}">
      @csrf
        <div class="input-group mb-3">
          <input  name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="User name">
          <div class="input-group-append">
            <div class="input-group-text">
            
            </div>
          </div>
          @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
        </div>
        <div class="input-group mb-3">
          <input name="hovaten" type="text" class="form-control @error('hovaten') is-invalid @enderror" placeholder="Họ và tên">
          <div class="input-group-append">
            <div class="input-group-text">
            
            </div>
          </div>
          @error('hovaten')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Địa chỉ emai">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input name="sodienthoai" type="text" class="form-control @error('sodienthoai') is-invalid @enderror" placeholder="Số điện thoại">
            <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
          @error('sodienthoai')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <select name = "gioitinh" class="form-control">
              <option value="" default>--Chọn giới tính--</option>
              <option value="1" {{($benhnhan->gioitinh == 1)? 'selected':'select'}}>Nam</option>
              <option value="0" {{($benhnhan->gioitinh == 0)? 'selected':'select'}}>Nữ</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
          @error('sodienthoai')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input id= "password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
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
        <div class="input-group mb-3">
          <input type="password"  id="confirm_password" class="form-control" name="password_confirmation" placeholder="Comfim password">
          <div class="input-group-append">
            <div class="input-group-text">
            <span id="faop" class="fas fa-eye" onclick="showHiddenConfirmNewPass()"></span>
            <span id="facl" class="fas fa-eye-slash" onclick="showHiddenConfirmNewPass()" style="display: none;"></span>
          </div>
            </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
          </div>
        </div>
      </form>
      <a href="{{route('login')}}" class="text-center">Đăng nhập ở đây!!</a>
    </div>
  </div>
</div>
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
  function showHiddenConfirmNewPass()
        {
            var pass = document.getElementById("confirm_password");
            if(pass.type === "password")
            {
                pass.type = "text";
                faop.style.display = "none";
                facl.style.display = "block";
                
            }else
            {
                pass.type = "password";
                faop.style.display = "block";
                facl.style.display = "none";
            }
        }
</script>
<script src="AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<script src="AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="AdminLTE-master/dist/js/adminlte.min.js"></script>
</body>
</html>





