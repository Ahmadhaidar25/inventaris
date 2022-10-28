<!DOCTYPE html>
<html lang="en">

<head>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <link href="{{url('template/img/logo/logo.png')}}" rel="icon">
 <title>Register</title>
 <link href="{{url('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
 <link href="{{url('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
 <link href="{{url('template/css/ruang-admin.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  <form action="{{url('post-register')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Nama" name="name">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                     
                      <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gander" id="inlineRadio1" value="L">
                    <label class="form-check-label">Laki-Laki</label>
                      </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gander" id="inlineRadio2" value="P">
                        <label class="form-check-label">Perempuan</label>
                      </div>
                      
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <select class="form-control" name="level">
                        <option value="">--Pilih--</option>
                        <option value="admin">Admin</option>
                        <option value="gsd">Gsd</option>
                        <option value="it">It</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success btn-block">Register</button>
                    </div>
                    <hr>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="login.html">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="{{url('template/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('template/js/ruang-admin.min.js')}}"></script>
</body>

</html>