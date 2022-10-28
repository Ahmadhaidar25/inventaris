@extends('main.layout')

@section('content')
<div class="alert alert-secondary" role="alert">
  <h2 class="text-center">SISTEM PENDUKUNG KEPUTUSAN</h2>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="" style="text-decoration: none;">
  <h1 class="h3 mb-0 text-gray-800">Inventaris Fasilitas Perguruan Tinggi</h1></a>
  <ol class="breadcrumb">
  </ol>
</div>

<div class="row mb-3">
@if(auth()->user()->level=='admin')
  <!-- New User Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">User</div>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$dashboard}}</div>
            <div class="mt-2 mb-0 text-muted text-xs">

            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-info"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?php echo number_format($jumlah) ?></div>
            <div class="mt-2 mb-0 text-muted text-xs">
             
            </div>
          </div>
          <div class="col-auto">
           <i class="fas fa-server fa-2x text-warning"></i>
         </div>
       </div>
     </div>
   </div>
 </div>



 <!-- Earnings (Annual) Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
  <div class="card h-100">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-uppercase mb-1">Kriteria</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kriteria}}</div>
          <div class="mt-2 mb-0 text-muted text-xs">
           
           
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-server fa-2x text-warning"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card h-100">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-uppercase mb-1">Alternatif</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$alternatif}}</div>
          <div class="mt-2 mb-0 text-muted text-xs">
           
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-server fa-2x text-warning"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card h-100">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-uppercase mb-1">Hasil Penilaian</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$moora}}</div>
          <div class="mt-2 mb-0 text-muted text-xs">
           
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-server fa-2x text-warning"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p>Are you sure you want to logout?</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
      <a href="login.html" class="btn btn-primary">Logout</a>
    </div>
  </div>
</div>
</div>


@include('sweetalert::alert')
@endsection