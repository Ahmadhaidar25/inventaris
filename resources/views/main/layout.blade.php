<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{ url('template/img/logo_stmik.png') }}" type="image/png">
  <title>DIB.STMIK HORIZON</title>
  <link href="{{url('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('template/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="{{url('template/css/style_profil.css')}}">
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

<body id="page-top">
  <div class="preloader">
    <div class="loading">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  </div>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background: white;" 
      href="{{url('dashboard')}}">
      <div class="sidebar-brand-icon">
        <img src="{{url('template/img/horizon.png')}}" style="width: 200px; height: 200px;">
      </div>
     

    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{url('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Menu</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">


          @if (auth()->user()->level=='admin')
          <a class="collapse-item" href="{{url('barang')}}">Kelola Data Barang</a>
          <a class="collapse-item" href="{{url('user')}}">Kelola Data User</a>
          @endif

          @if (auth()->user()->level=='it')
          <a class="collapse-item" href="{{url('kriteria')}}">Data Kriteria</a>
          <a class="collapse-item" href="{{url('alternatif')}}">Data Alternatif</a>
          <a class="collapse-item btn3" href="{{url('perhitungan')}}">Perhitungan</a>
          @endif

          @if (auth()->user()->level=='gsd')
          <a class="collapse-item" href="{{url('barang')}}">Kelola Data Barang</a>
          <a class="collapse-item" href="{{url('kriteria')}}">Data Kriteria</a>
          <a class="collapse-item" href="{{url('alternatif')}}">Data Alternatif</a>
          <a class="collapse-item btn3" href="{{url('perhitungan')}}">Perhitungan</a>
          @endif

         




        </div>
      </div>
    </li>






    <hr class="sidebar-divider">


    <div class="version" id="version-ruangadmin"></div>
  </ul>
  <!-- Sidebar -->
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <!-- TopBar -->
      <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top" style="background: #800000;">
        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown no-arrow">

          </li>



          <div class="topbar-divider d-none d-sm-block"></div>

          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">

            <img class="img-profile rounded-circle bg-white" src="{{asset('images/'. Auth::user()->avatar)}}" style="max-width: 60px">

            <span class="ml-2 d-none d-lg-inline text-white small">{{auth()->user()->name}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="{{url('profil')}}">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profil
            </a>
            <a class="dropdown-item" href="{{url('reset-password')}}">
              <i class="bi bi-arrow-clockwise text-gray-400"></i>
              Ubah Password
            </a>

            <a class="dropdown-item btn1" href="{{url('logout')}}">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>



          </div>
        </li>
        


      </ul>
    </nav>
    <!-- Topbar -->

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">

      @yield('content')
    </div>
    <!---Container Fluid-->
  </div>
  <!-- Footer -->
  <footer class="sticky-footer bg-white mt-3">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script>&nbsp;developer by
          <b><a href="https://indrijunanda.gitlab.io/" target="_blank">Ahmad Haidar</a></b><br>
          Version :
          <b><a href="https://indrijunanda.gitlab.io/" target="_blank">1.0</a></b>
        </span>
      </div>
    </div>


  </footer>
  <!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="{{url('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{url('template/js/ruang-admin.min.js')}}"></script>
<script src="{{url('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{url('bootstrap/js/bootstrap.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Page level custom scripts -->
<script>
  $(document).ready(function () {

      $('#barang').DataTable(); // ID From dataTable with Hover
    });

  $(document).ready(function () {

      $('#alternatif').DataTable(); // ID From dataTable with Hover
    });

  $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#akar').DataTable(); // ID From dataTable with Hover
    });

  $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#bobot').DataTable(); // ID From dataTable with Hover
    });

  $(document).ready(function () {
      $('#mat').DataTable(); // ID From dataTable with Hover
    });

  $(document).ready(function () {
      $('#akar_kuadrat').DataTable(); // ID From dataTable with Hover
    });

  $(document).ready(function () {
      $('#op').DataTable(); // ID From dataTable with Hover
    });

  
  </script>

  <script type="text/javascript">
    $(".btn1").click(function(e){
     e.preventDefault();
     var hapus = $(this).attr('href');
     Swal.fire({
      title: 'Yakin ?',
      text: "Kamu Akan Keluar",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#00cc00',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = hapus;
      }
    })
  })
    $(".btn2").click(function(e){
     e.preventDefault();
     var hapus = $(this).attr('href');
     const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

     swalWithBootstrapButtons.fire({
      title: 'Yakin?',
      text: "Data Akan Di Hapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',

      cancelButtonText: 'Batal',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {

        window.location = hapus;


      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
        ) {
        swalWithBootstrapButtons.fire(
         'Cancelled',
         'Your imaginary file is safe :)',
         'error'
         )
      }
    })
  })

    $(".btn3").click(function(e){
     e.preventDefault();
     var hitung = $(this).attr('href');
     Swal.fire({
      title: 'Ingin Menghitung Moora',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#00cc00',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = hitung;
      }
    })
  })
</script>

<script>
  $(document).ready(function() {
    $(".preloader").fadeOut("slow");
  });

  $(document).ready(function(){

  //Callback handler for form submit event
  $("#myform").submit(function(e)
  {

    var formObj = $(this);
    var formURL = formObj.attr("action");
    var formData = new FormData(this);
    $.ajax({
      url: formURL,
      type: 'POST',
      data:  formData,        
      contentType: false,
      cache: false,
      processData:false,
      beforeSend: function (){
       $("#loading").show(1000).html("<img src='load.gif' height='50'>");                   
     },
     success: function(data, textStatus, jqXHR){
      $("#result").html(data);
      $("#loading").hide();
    },
    error: function(jqXHR, textStatus, errorThrown){
    }         
  });
        e.preventDefault(); //Prevent Default action.
        e.unbind();
      });    

});


</script>

<script>
 function startCalc()
 {
  interval=setInterval("calc()",1)}
  function calc()
  {
    one=document.autoSumForm.harga.value;two=document.autoSumForm.qty.value;
    document.autoSumForm.total.value=(one*1)*(two*1)}
    function stopCalc(){clearInterval(interval)}




  </script>
  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>

</body>

</html>