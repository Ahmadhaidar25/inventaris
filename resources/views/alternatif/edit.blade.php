@extends('main.layout')

@section('content')
<a href="{{url('alternatif')}}" class="btn btn-danger"><i class="bi bi-chevron-compact-left"></i>Kembali</a>
<div class="card mt-3">
	<div class="card-body">
		<h5 class="card-title">Edit Alternatif</h5>
		<form action="{{url('/update-alternatif/'.$edit->kode_alternatif)}}" method="post">
			@csrf
			<div class="modal-body">
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
						</select>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung A</label>
						<input type="text" class="form-control {{ $errors->has('gedung_a') ? ' is-invalid' : '' }}" name="gedung_a" value="{{$edit->gedung_a}}">
						@if($errors->has('gedung_a'))
						<span class="invalid-feedback">{{ $errors->first('gedung_a') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung B</label>
						<input type="text" class="form-control {{ $errors->has('gedung_b') ? ' is-invalid' : '' }}" name="gedung_b" value="{{$edit->gedung_b}}">
						@if($errors->has('gedung_b'))
						<span class="invalid-feedback">{{ $errors->first('gedung_b') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Gedung C</label>
						<input type="text" class="form-control {{ $errors->has('gedung_c') ? ' is-invalid' : '' }}" name="gedung_c" value="{{$edit->gedung_c}}">
						@if($errors->has('gedung_c'))
						<span class="invalid-feedback">{{ $errors->first('gedung_c') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Kondisi Barang</label>
						<input type="text" class="form-control {{ $errors->has('kondisi_barang') ? ' is-invalid' : '' }}" name="kondisi_barang" value="{{$edit->kondisi_barang}}">
						@if($errors->has('kondisi_barang'))
						<span class="invalid-feedback">{{ $errors->first('kondisi_barang') }}</span>
						@endif
					</div>
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-success" style="float: right;">Update</button>
				</div>
			</form>
		</div>
	</div>
	@endsection