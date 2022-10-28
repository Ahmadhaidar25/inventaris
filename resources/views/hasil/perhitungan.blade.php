@extends('main.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	
	<h1 class="h3 mb-0 text-gray-800">Data Hasil Perhitungan Moora</h1>
	

</div>
<!-- Data Moora-->
<div class="row">
	<div class="container-fluid">

		<div class="card">
			<div class="card-header">
				Menentukan Kriteria Dan Alternatif
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="display table" id="alternatif">
						<thead style="background: #800000;">
							<tr>

								<th class="text-center text-white">Kode Alternatif</th>
								<th class="text-center text-white">Nama Alternatif</th>
								<th class="text-center text-white">C001</th>
								<th class="text-center text-white">C002</th>
								<th class="text-center text-white">C003</th>
								<th class="text-center text-white">C004</th>

							</tr>
						</thead>
						<tbody class="text-center">
							@foreach($moora as $x)
							<tr>
								<td>{{$x->kode_alternatif}}</td>
								<td>{{$x->barang->nama_barang}}</td>
								<td>{{$x->gedung_a}}</td>
								<td>{{$x->gedung_b}}</td>
								<td>{{$x->gedung_c}}</td>
								<td>{{$x->kondisi_barang}}</td>
								


							</tr>
							@endforeach


						</tbody>

					</table>
				</div>
			</div>
		</div>

		<br>
		<div class="card">
			<div class="card-header">
				Menentukan Akar Kuadrat
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="display table" id="akar_kuadrat">
						<thead style="background: #800000;">
							<tr>

								
								<th class="text-center text-white">Nama Alternatif</th>
								<th class="text-center text-white">C001</th>
								<th class="text-center text-white">C002</th>
								<th class="text-center text-white">C003</th>
								<th class="text-center text-white">C004</th>

							</tr>
						</thead>
						<tbody class="text-center">

							@foreach($pangkat as $x)
							<tr>
								
								<td>{{$x->barang->nama_barang}}</td>
								<td>{{$x->gedung_a}}</td>
								<td>{{$x->gedung_b}}</td>
								<td>{{$x->gedung_c}}</td>
								<td>{{$x->kondisi_barang}}</td>
								


							</tr>
							@endforeach
						</tr>

					</tbody>

					<thead class="text-center">
						<th>Total =</th>
						<th>{{$p1}}</th>
						<th>{{$p2}}</th>
						<th>{{$p3}}</th>
						<th>{{$p4}}</th>
					</thead>

					<thead class="text-center">
						<th>Akar =</th>
						<th>{{sqrt($ak1)}}</th>
						<th>{{sqrt($ak2)}}</th>
						<th>{{sqrt($ak3)}}</th>
						<th>{{sqrt($ak4)}}</th>
					</thead>
				</table>
			</div>
		</div>
	</div>


	<br>
	<div class="card">
		<div class="card-header">
			Normalisasi Bobot Kriteria
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="display table" id="bobot">
					<thead style="background: #800000;" class="text-center">
						<tr>

							<th class="text-center text-white">Kode Kriteria</th>
							<th class="text-center text-white">Nama Kriteria</th>
							<th class="text-center text-white">Bobot</th>
							<th class="text-center text-white">Jenis</th>


						</tr>
					</thead>
					<tbody class="text-center">
						@foreach ($kriteria as $k)
						<tr>
							<td>{{$k->kode_kriteria}}</td>
							<td>{{$k->nama_kriteria}}</td>
							<td>{{$k->bobot}}</td>
							<td>{{$k->jenis}}</td>
						</tr>
						@endforeach


					</tbody>
				</table>
			</div>
		</div>
	</div>


	<br>
	<div class="card">
		<div class="card-header">
			Matriks Normalisasi
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="display table" id="mat">
					<thead style="background: #800000;">
						<tr>
							<th class="text-center text-white">Kode Alternatif</th>
							<th class="text-center text-white">Nama Alternatif</th>
							<th class="text-center text-white">C001</th>
							<th class="text-center text-white">C002</th>
							<th class="text-center text-white">C003</th>
							<th class="text-center text-white">C004</th>

						</tr>
					</thead>
					<tbody class="text-center">
						@foreach($matrix as $x)
						<tr>
							<td>{{$x->kode_alternatif}}</td>
							<td>{{$x->barang->nama_barang}}</td>
							<td>{{round($x->gedung_a/sqrt($ak1),4)}}</td>
							<td>{{round($x->gedung_b/sqrt($ak2),4)}}</td>
							<td>{{round($x->gedung_c/sqrt($ak3),4)}}</td>
							<td>{{round($x->kondisi_barang/sqrt($ak4),4)}}</td>
						</tr>
						@endforeach


					</tbody>
				</table>
			</div>
		</div>
	</div>

	<br>
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col">
					Optimasi
				</div>
				<div class="col">
					
				</div>
			</div>
			
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="display table" id="op">
					<thead style="background: #800000;">
						<tr>

							<th class="text-center text-white">Kode Alternatif</th>
							<th class="text-center text-white">Nama Alternatif</th>
							<th class="text-center text-white">C001</th>
							<th class="text-center text-white">C002</th>
							<th class="text-center text-white">C003</th>
							<th class="text-center text-white">C004</th>

						</tr>
					</thead>
					<tbody class="text-center">

						<tr>
							@foreach($optimasi as $x)
							<tr>
								<td>{{$x->kode_alternatif}}</td>
								<td>{{$x->barang->nama_barang}}</td>
								<td>{{round($x->gedung_a/sqrt($ak1) * 0.25,4)}}</td>
								<td>{{round($x->gedung_b/sqrt($ak2) * 0.25,4)}}</td>
								<td>{{round($x->gedung_c/sqrt($ak3) * 0.35,4)}}</td>
								<td>{{round($x->kondisi_barang/sqrt($ak4) * 0.15,4)}}</td>
							</tr>
							@endforeach



						</tr>


					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br>
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col">
					Hasil Akhir
				</div>
				<div class="col">
					<a href="{{url('/cetak-pdf/moora')}}" style="float: right;" class="btn btn-warning" id="myButton" data-loading-text="Loading..." autocomplete="off"><i class="bi bi-printer"></i>&nbsp;Cetak</a>
				</div>

			</div>
			
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
						@foreach ($hasil_moora as $no => $x)
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





	@endsection