<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="{{url('login_template/css/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.css')}}">
  <link rel="shortcut icon" href="{{ url('template/img/logo_stmik.png') }}" type="image/png">
</head>
<body>

  <img class="wave" src="{{url('login_template/img/wave2.svg')}}">
  <div class="container">
    <div class="img">
      <img src="{{url('login_template/img/logo2.svg')}}">
    </div>
    <div class="login-content" style="margin-top: -120px;">
      <form action="{{url('post-login')}}" method="post">
        @csrf
        <img src="{{url('login_template/img/horizon.png')}}">
       
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="input-div one">
         <div class="i">
          <i class="fas fa-user"></i>
        </div>
        <div class="div">
          <h5>Username</h5>
          <input type="text" class="input" name="username" value="{{old('username')}}">
        </div>
      </div>
      <div class="input-div pass">
       <div class="i"> 
        <i class="fas fa-lock"></i>
      </div>
      <div class="div">
        <h5>Password</h5>
        <input type="password" class="input" name="password" value="{{old('password')}}">
      </div>
      
    </div>

    <a href="/" class="nav-link" style="float: left;">Kembali</a>
    <input type="submit" class="btn text-white" value="Login" style="background: #800000; border-radius: 25px 25px 25px;">
  </form>
</div>
</div>
<script type="text/javascript" src="{{url('login_template/js/main.js')}}"></script>
</body>
@include('sweetalert::alert')
<script type="text/javascript">
  $('#reload').click(function () {
    $.ajax({
      type: 'GET',
      url: 'reload-captcha',
      success: function (data) {
        $(".captcha span").html(data.captcha);
      }
    });
  });
</script>
</html>
