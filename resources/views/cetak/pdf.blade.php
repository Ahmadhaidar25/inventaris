<!DOCTYPE html>
<html>
<head>
	<title>Laporan Hasil Moora</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		h5{
			margin-top: -100px;
		}
	</style>
</head>
<body>
	<script>window.print();</script>
	<img src="{{url('template/img/logo_stmik.png')}}" width="100px">
	<center>
		<h5 style="margin-top: -60px;">STMIK HORIZON KARAWANG</h5>
		<h6 style="margin-left: 47px;"> Jl. Pangkal Perjuangan By Pass No.KM, Tanjungpura, Kec. Karawang Barat<br>Kabupaten Karawang, Jawa Barat 41316</h5>
		</center>
		<b><hr></b>
		<div class="card-header text-white text-center" style="height: 10px; border-radius: 20px; background: #800000;">
			<p style="margin-top: -10px;">Hasil Akhir Perhitungan Moora</p>
		</div>
		<table class='table table-bordered mt-3'>
			<thead class="text-center">
				<tr>
					<th>No</th>
					<th>Kode Alternatif</th>
					<th>Nama</th>
					<th>Nilai Akhir</th>
					

				</tr>
			</thead>
			<tbody class="text-center">
				<?php $no = 0; ?>
				@foreach ($moora as $no=> $x)
				<?php $no++;?>
				<tr>
					<td>{{$no}}</td>
					<td>{{$x->alternatif->kode_alternatif}}</td>
					<td>{{$x->barang->nama_barang}}</td>
					<td>{{round($x->alternatif->gedung_a/sqrt($ak1) * 0.25 + $x->alternatif->gedung_b/sqrt($ak2) * 0.25 + $x->alternatif->gedung_c/sqrt($ak3) * 0.35 - $x->alternatif->kondisi_barang/sqrt($ak4) * 0.15 ,4)}}</td>
					
				</tr>
				@endforeach





			</tbody>
		</table>
		<div>
			<div class="card text-center" style="width: 250px; float: right;">
				<div class="card-header">
					<p>Karawang,{{date("d-m-y")}}<span id="datepicker"></span></p>
				</div>
				<div class="card-body">

				</div>
				<div class="card-footer text-muted">
					<p>TTD</p>
				</div>
			</div>
		</div>
		<script>
			$( function() {
				$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

			} );
		</script>
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	</body>

	</html>