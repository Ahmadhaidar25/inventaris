@extends('main.layout')

@section('content')
<h2>Data Alternatif</h2>
<div class="row">
	<!-- Datatables -->

	<!-- DataTable with Hover -->
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				@if (auth()->user()->level=='admin')
				

				

				<div class="row align-items-start">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
							Tambah
						</button>
					</div>
					

				</div>

				@elseif(auth()->user()->level=='gsd')
				<div class="row align-items-start">
					<div class="col">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
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
							
							<th>Kode Alternatif</th>
							<th>Nama Alternatif</th>
							<th>C001</th>
							<th>C002</th>
							<th>C003</th>
							<th>C004</th>
							@if(auth()->user()->level=='gsd')
							<th>Action</th>
							@endif
						</tr>
					</thead>
					
					<tbody class="text-center">
						
						@foreach ($alternatif as $x)
						<tr>

							<td>{{$x->kode_alternatif}}</td>
							<td>{{$x->barang->nama_barang}}</td>
							<td>{{$x->gedung_a}}</td>
							<td>{{$x->gedung_b}}</td>
							<td>{{$x->gedung_c}}</td>
							<td>{{$x->kondisi_barang}}</td>
							<td>
								<div class="btn-group" role="group" aria-label="Basic mixed styles example">
									@if (auth()->user()->level=='gsd')
									<a href="{{url('/hapus-alternatif/'. $x->kode_alternatif)}}" class="btn btn-danger btn2"><i class="bi bi-trash"></i></a>
									@endif
								</div>
							</td>
							
						</tr>
						@endforeach
						
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
			</div>
			<form action="tambah-alternatif" method="post">
				@csrf
				<div class="modal-body">

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Kode Alternatif</label>
						<input type="text" class="form-control {{ $errors->has('kode_alternatif') ? ' is-invalid' : '' }}" name="kode_alternatif" value="{{$kodeBaru}}" readonly>
						@if($errors->has('kode_alternatif'))
						<span class="invalid-feedback">{{ $errors->first('kode_alternatif') }}</span>
						@endif
					</div>
					
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Alternatif</label>
						<select class="form-control {{ $errors->has('kode_barang') ? ' is-invalid' : '' }}" 
							name="kode_barang">
							<option value="">--Pilih Barang--</option>
							@foreach($barang as $b)
							<option value="{{$b->kode_barang}}">{{$b->nama_barang}}</option>
							@endforeach
						</select>
						
						@if($errors->has('kode_barang'))
						<span class="invalid-feedback">{{ $errors->first('kode_barang') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung A</label>
						<input type="text" class="form-control {{ $errors->has('gedung_a') ? ' is-invalid' : '' }}" name="gedung_a">
						@if($errors->has('gedung_a'))
						<span class="invalid-feedback">{{ $errors->first('gedung_a') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung B</label>
						<input type="text" class="form-control {{ $errors->has('gedung_b') ? ' is-invalid' : '' }}" name="gedung_b">
						@if($errors->has('gedung_b'))
						<span class="invalid-feedback">{{ $errors->first('gedung_b') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung C</label>
						<input type="text" class="form-control {{ $errors->has('gedung_c') ? ' is-invalid' : '' }}" name="gedung_c">
						@if($errors->has('gedung_c'))
						<span class="invalid-feedback">{{ $errors->first('gedung_c') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Kondisi Barang</label>
						<input type="text" class="form-control {{ $errors->has('kondisi_barang') ? ' is-invalid' : '' }}" name="kondisi_barang">
						@if($errors->has('kondisi_barang'))
						<span class="invalid-feedback">{{ $errors->first('kondisi_barang') }}</span>
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


<!-- Modal edit-->
@foreach ($alternatif as $edit)
<div class="modal fade" id="edit-{{$edit->kode_alternatif}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success text-white">
				<h5 class="modal-title" id="exampleModalLabel">Edit Alternatif</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('/update-alternatif/'.$edit->kode_alternatif)}}" method="post">
				@csrf
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Kode Alternatif</label>
						<input type="text" class="form-control {{ $errors->has('kode_alternatif') ? ' is-invalid' : '' }}" name="kode_alternatif" value="{{$edit->kode_alternatif}}" readonly>
						@if($errors->has('kode_alternatif'))
						<span class="invalid-feedback">{{ $errors->first('kode_alternatif') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Alternatif</label>
						<select class="form-control" name="id_barang">
							<option value="{{$edit->barang->id_barang}}">{{$edit->barang->nama_barang}}</option>
							@foreach($barang as $b)
							<option value="{{$b->id_barang}}">{{$b->nama_barang}}</option>
							@endforeach

						</select>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung A</label>
						<input type="text" class="form-control {{ $errors->has('gedung_a') ? ' is-invalid' : '' }}" name="gedung_a" value="{{$edit->gedung_a}}" id="input1">
						@if($errors->has('gedung_a'))
						<span class="invalid-feedback">{{ $errors->first('gedung_a') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung B</label>
						<input type="text" class="form-control {{ $errors->has('gedung_b') ? ' is-invalid' : '' }}" name="gedung_b" value="{{$edit->gedung_b}}" id="input2">
						@if($errors->has('gedung_b'))
						<span class="invalid-feedback">{{ $errors->first('gedung_b') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung C</label>
						<input type="text" class="form-control {{ $errors->has('gedung_c') ? ' is-invalid' : '' }}" name="gedung_c" value="{{$edit->gedung_c}}" id="input3">
						@if($errors->has('gedung_c'))
						<span class="invalid-feedback">{{ $errors->first('gedung_c') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Kondisi Barang</label>
						<input type="text" class="form-control {{ $errors->has('kondisi_barang') ? ' is-invalid' : '' }}" name="kondisi_barang" value="{{$edit->kondisi_barang}}" id="hasil">
						@if($errors->has('kondisi_barang'))
						<span class="invalid-feedback">{{ $errors->first('kondisi_barang') }}</span>
						@endif
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Ubah</button>
				</div>
			</form>

			<center><div id="loading"></div></center><br>
			<div id="result"></div>
		</div>
	</div>
</div>
@endforeach


@include('sweetalert::alert')
@endsection