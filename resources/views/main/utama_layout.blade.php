<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('utama/img/logo_stmik.ico')}}" rel="icon">
  <link href="{{url('utama/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('utama/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- Libraries CSS Files -->
  <link href="{{url('utama/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('utama/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('utama/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{url('utama/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('utama/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('utama/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
    <style type="text/css">
      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
      }
      .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }
    </style>
  </head>

  <body>


    <div class="preloader">
      <div class="loading">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>

    
    <header id="header" class="fixed-top">
      <div class="container">

        <div class="logo float-left">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
          <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="tentang">Tentang</a></li>
            <li><a href="bantuan">Bantuan</a></li>
            <li><a href="login">Masuk <i class="bi bi-box-arrow-right"></i></a></li>


            
            
          </nav><!-- .main-nav -->

        </div>
      </header><!-- #header -->

  <!--==========================
    Intro Section
    ============================-->

    <br><br>
    <main id="main">

    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
        <div class="container">
          @yield('content1')
        </div>
      </section><!-- #about -->

    <!--==========================
      Services Section
      ============================-->

    </main>

  <!--==========================
    Footer
    ============================-->
    <footer id="footer" style="background: #800000;">

      <div class="container">
        <div class="copyright">
          &copy; Developer By&nbsp;<strong>Ahmad Haidar</strong>&nbsp;<script>document.write(new Date().getFullYear()); </script>
        </div>
        <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Version<a href="https://bootstrapmade.com/">1.0</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top bg-secondary"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{url('utama/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('utama/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('utama/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('utama/lib/easing/easing.min.js')}}"></script>
  <script src="{{url('utama/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{url('utama/lib/wow/wow.min.js')}}"></script>
  <script src="{{url('utama/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{url('utama/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{url('utama/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('utama/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('utama/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('utama/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('utama/js/main.js')}}"></script>
  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut("slow");
    });
  </script>

</body>
</html>
