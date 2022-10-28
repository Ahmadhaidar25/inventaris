@extends('main.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	
	<h1 class="h3 mb-0 text-gray-800">Data Hasil Perhitungan Moora</h1>
	

</div>
<!-- Data Moora-->
<div class="row">
	<div class="container-fluid">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				
				<a href="{{url('/cetak-pdf/moora')}}" class="btn btn-warning" id="myButton" data-loading-text="Loading..." autocomplete="off"><i class="bi bi-printer"></i>&nbsp;Cetak</a>
			</div>
			<div class="card-body">

				
				<div class="card">
					<div class="card-header">
						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="display table">
								<thead style="background: #800000;" class="text-white text-center">
									<tr>
										<th>No</th>
										<th>Kode Alternatif</th>
										<th>Nama Alternatif</th>
										<th>nilai Akhir</th>
										

									</tr>
								</thead>
								<tbody class="text-center">
									<?php $no = 0;?>
									@foreach ($moora as $no => $x)
									<?php $no++?>
									<tr>
										<td>{{$no}}</td>
										<td>{{$x->alternatif->kode_alternatif}}</td>
										<td>{{$x->barang->nama_barang}}</td>
										<td>{{round($x->alternatif->gedung_a/sqrt($ak1) * 0.25 + $x->alternatif->gedung_b/sqrt($ak2) * 0.25 + $x->alternatif->gedung_c/sqrt($ak3) * 0.35 - $x->alternatif->kondisi_barang/sqrt($ak4) * 0.15 ,4)}}</td>
										
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</div>

@endsection