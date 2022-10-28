@extends('main.layout')

@section('content')
<a href="{{url('barang')}}" class="btn btn-danger"><i class="bi bi-chevron-compact-left"></i>Kembali</a>
<div class="card mt-3">
	<div class="card-body">
		<h5 class="card-title">Edit Barang</h5>
		<form action="{{url('/update-barang/'.$edit->kode_barang)}}" method="post" name="autoSumForm">
			@csrf
			<div class="modal-body">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
					<input type="text" class="form-control {{ $errors->has('kode_barang') ? ' is-invalid' : '' }}" 
					name="kode_barang" value="{{$edit->kode_barang}}" readonly>
					@if($errors->has('kode_barang'))
					<span class="invalid-feedback">{{ $errors->first('kode_barang') }}</span>
					@endif
				</div>

				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
					<input type="text" class="form-control {{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{$edit->nama_barang}}">
					@if($errors->has('nama_barang'))
					<span class="invalid-feedback">{{ $errors->first('nama_barang') }}</span>
					@endif
				</div>

				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Tanggal</label>
					<input type="date" class="form-control {{ $errors->has('tanggal') ? ' is-invalid' : '' }}" name="tanggal" value="{{$edit->tanggal}}">
					@if($errors->has('tanggal'))
					<span class="invalid-feedback">{{ $errors->first('tanggal') }}</span>
					@endif
				</div>

				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Lokasi</label>
					<input type="text" class="form-control {{ $errors->has('lokasi') ? ' is-invalid' : '' }}" name="lokasi" value="{{$edit->lokasi}}">
					@if($errors->has('lokasi'))
					<span class="invalid-feedback">{{ $errors->first('lokasi') }}</span>
					@endif
				</div>

				
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Harga</label>
					<input type="text" class="form-control {{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{$edit->harga}}" onFocus="startCalc();" onBlur="stopCalc();">
					@if($errors->has('harga'))
					<span class="invalid-feedback">{{ $errors->first('harga') }}</span>
					@endif
				</div>

				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Qty</label>
					<input type="text" class="form-control {{ $errors->has('qty') ? ' is-invalid' : '' }}" 
					name="qty" value="{{$edit->qty}}" onFocus="startCalc();">
					@if($errors->has('qty'))
					<span class="invalid-feedback">{{ $errors->first('qty') }}</span>
					@endif
				</div>

				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Total</label>
					<input type="text" class="form-control {{ $errors->has('total') ? ' is-invalid' : '' }}" 
					name="total" value="{{$edit->total}}" readonly>
					@if($errors->has('total'))
					<span class="invalid-feedback">{{ $errors->first('total') }}</span>
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