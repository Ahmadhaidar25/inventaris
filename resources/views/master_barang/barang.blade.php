@extends('main.layout')

@section('content')
<h2>Data Barang</h2>
<div class="row">
	<!-- Datatables -->

	<!-- DataTable with Hover -->
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				@if (auth()->user()->level=='admin')
				<div class="row align-items-start">
					<div class="col">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Tambah
					</button>
					</div>
					</div>
				@endif

				@if (auth()->user()->level=='gsd')
				<div class="row align-items-start">
					<div class="col">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							Tambah
					</button>
					</div>
					</div>
				@endif
			</div>
			<div class="table-responsive p-3">
				
				<table class="table align-items-center table-flush table-hover" id="alternatif">
					<thead class="text-center text-white" style="background: #800000;">
						<tr>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Tanggal</th>
							<th>Lokasi</th>
							<th>Harga/satuan</th>
							<th>Qty</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody class="text-center">
						
						@foreach ($barang as $x)
						<tr>
							
							<td>{{$x->kode_barang}}</td>
							<td>{{$x->nama_barang}}</td>
							<td>{{$x->tanggal}}</td>
							<td>{{$x->lokasi}}</td>
							<td><?php echo number_format($x->harga)?></td>
							<td>{{$x->qty}}</td>
							<td><?php echo number_format($x->total)?></td>
							
							<td>
								<div class="btn-group" role="group" aria-label="Basic mixed styles example">
									@if (auth()->user()->level=='admin')
									<a href="{{url('/edit-barang/'.$x->kode_barang)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
									&nbsp;
									<a href="{{url('/hapus-barang/'.$x->kode_barang)}}" class="btn btn-danger btn2"><i class="bi bi-trash"></i></a>
									&nbsp;
									
									@elseif (auth()->user()->level=='gsd')
									<a href="{{url('/edit-barang/'.$x->kode_barang)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
									&nbsp;
									<a href="{{url('/hapus-barang/'.$x->kode_barang)}}" class="btn btn-danger btn2"><i class="bi bi-trash"></i></a>
									&nbsp;
									@endif
								</div>
							</td>
							
						</tr>
						@endforeach
						
							
						
					</tbody>
					<tbody>
						<tr>
							<td colspan="7"><p style="float: right;"><b>Jumlah = <?php echo number_format($jumlah);?></b></p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
			</div>
			<form action="{{url('tambah-barang')}}" method="post" name="autoSumForm">
				@csrf
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
						<input type="text" class="form-control {{ $errors->has('kode_barang') ? ' is-invalid' : '' }}" name="kode_barang" value="{{$kodeBaru}}" readonly>
						@if($errors->has('kode_barang'))
						<span class="invalid-feedback">{{ $errors->first('kode_barang') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
						<input type="text" class="form-control {{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang">
						@if($errors->has('nama_barang'))
						<span class="invalid-feedback">{{ $errors->first('nama_barang') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Tanggal</label>
						<input type="date" class="form-control {{ $errors->has('tanggal') ? ' is-invalid' : '' }}" name="tanggal">
						@if($errors->has('tanggal'))
						<span class="invalid-feedback">{{ $errors->first('tanggal') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Lokasi</label>
						<input type="text" class="form-control {{ $errors->has('lokasi') ? ' is-invalid' : '' }}" name="lokasi">
						@if($errors->has('lokasi'))
						<span class="invalid-feedback">{{ $errors->first('lokasi') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Harga/satuan</label>
						<input type="text" class="form-control {{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" id="harga" onFocus="startCalc();">
						@if($errors->has('harga'))
						<span class="invalid-feedback">{{ $errors->first('harga') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Qty</label>
						<input type="text" class="form-control {{ $errors->has('qty') ? ' is-invalid' : '' }}" name="qty" id="qty" onFocus="startCalc();" onBlur="stopCalc();">
						@if($errors->has('qty'))
						<span class="invalid-feedback">{{ $errors->first('qty') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Total</label>
						<input type="text" class="form-control {{ $errors->has('total') ? ' is-invalid' : '' }}" name="total" readonly id="total">
						@if($errors->has('total'))
						<span class="invalid-feedback">{{ $errors->first('total') }}</span>
						@endif
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Modal import-->
<div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success text-white">
				<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="" method="post" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="input-group mb-3">
					<label class="input-group-text" for="inputGroupFile01">
						<i class="bi bi-cloud-upload"></i>
					</label>
					<input type="file" class="form-control" id="inputGroupFile01">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>


@include('sweetalert::alert')
@endsection