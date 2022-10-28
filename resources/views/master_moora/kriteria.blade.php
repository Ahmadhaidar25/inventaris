@extends('main.layout')

@section('content')
<div class="container">
	<h2>Data Kriteria</h2>
</div>
<div class="col-lg-12">
	<div class="card mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<!--<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Tambah
			</button>-->
		</div>
		<div class="table-responsive p-3">
			<table class="table align-items-center table-flush table-hover" id="dataTableHover">
				<thead style="background: #800000;" class="text-white">
					<tr>
						<th>Kode kriteria</th>
						<th>Nama Kriteria</th>
						<th>Bobot</th>
						<th>Jenis</th>
						<!--<th>Action</th>-->
						
					</tr>
				</thead>
				
				<tbody>

					@foreach($kriteria as $x)
					<tr>
						<td>{{$x->kode_kriteria}}</td>
						<td>{{$x->nama_kriteria}}</td>
						<td>{{$x->bobot}}</td>
						<td>{{$x->jenis}}</td>

						<!--<td>
							<div class="btn-group" role="group" aria-label="Basic mixed styles example">
								<a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit-{{$x->id_kriteria}}">Edit</a>
								<a href="{{url('/hapus-kriteria/' .$x->id_kriteria)}}" class="btn btn-danger btn2">Hapus</a>
							</div>
						</td>-->
						
						
					</tr>
					@endforeach


				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
			</div>
			<form action="post-kriteria" method="post">
				<div class="modal-body">
					@csrf
					<div class="mb-3">
						<label class="form-label">Kode</label>
						<input type="text" class="form-control" name="kode kriteria" value="{{$nomer}}" readonly>

					</div>

					<div class="mb-3">
						<label class="form-label">Nama Kriteria</label>
						<input type="text" class="form-control" name="nama_kriteria">

					</div>

					

					<div class="mb-3">
						<label class="form-label">bobot</label>
						<input type="text" class="form-control" name="bobot">

					</div>
					<div class="mb-3">
						<label class="form-label">Jenis</label>
						<select class="form-control" name="jenis">
							<option value="">--Pilih Jenis--</option>
							<option value="benefit">Benefit</option>
							<option value="cost">Cost</option>
						</select>
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


<!-- Modal Edit-->
@foreach ($kriteria as $edit)
<div class="modal fade" id="edit-{{$edit->id_kriteria}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Kiteria</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('/update-kriteria/'.$edit->id_kriteria)}}" method="post">
			<div class="modal-body">
				@csrf
				<div class="mb-3">
					<label class="form-label">Kode</label>
					<input type="text" class="form-control" name="kode kriteria" value="{{$edit->kode_kriteria}}" readonly>

				</div>

				<div class="mb-3">

				<label class="form-label">Nama Kriteria</label>
				<input type="text" class="form-control" name="nama_kriteria" value="{{$edit->nama_kriteria}}">

				</div>



				<div class="mb-3">
					<label class="form-label">bobot</label>
					<input type="text" class="form-control" name="bobot" value="{{$edit->bobot}}">

				</div>
				<div class="mb-3">
					<label class="form-label">Jenis</label>
					<select class="form-control" name="jenis">
						 <option value="{{$edit->jenis}}">{{$edit->jenis}}</option>
						<option value="benefit">Benefit</option>
						<option value="cost">Cost</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-success">Ubah</button>
			</div>
		</form>
		</div>
	</div>
</div>
@endforeach

@include('sweetalert::alert')
@endsection