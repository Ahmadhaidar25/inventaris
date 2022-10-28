@extends('main.layout')

@section('content')
<h2>Data User</h2>
<div class="row mt-3">
	<!-- Datatables -->
	<div class="col-lg-12">
		<div class="card mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Tambah
				</button>
			</div>
			<div class="table-responsive p-3">
				<table class="table align-items-center table-flush table-hover" id="dataTableHover">
					<thead style="background: #800000;" class="text-white">
						<tr>
							<th>Nama</th>
							<th>Avatar</th>
							<th>Username</th>
							<th>Password</th>
							<th>Gander</th>
							<th>Level</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@foreach ($user as $u)
						<tr>
							<td>{{$u->name}}</td>
							<td><img src="{{url('/images/')}}/{{$u->avatar}}"
								style="border-radius: 200px; width: 100px; height: 100px;"></td>
							<td>{{$u->username}}</td>
							<td>{{$u->password}}</td>
							<td>{{$u->gander}}</td>
							<td>{{$u->level}}</td>
							<td>
								
								<div class="btn-group" role="group" aria-label="Basic mixed styles example">
									<a href="{{url('edit-user')}}/{{$u->id}}" class="btn btn-warning">Edit</a>
									<a href="{{url('hapus-user')}}/{{$u->id}}" class="btn btn-danger btn2">Hapus</a>

									
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
				
			</div>
			<form action="{{url('tambah-user')}}" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					@csrf
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama</label>
						<input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name">
						@if($errors->has('name'))
						<span class="invalid-feedback">{{ $errors->first('name') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label class="form-label">Avatar</label>
						<input type="file" class="form-control {{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar">
						@if($errors->has('avatar'))
						<span class="invalid-feedback">{{ $errors->first('avatar') }}</span>
						@endif
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Username</label>
						<input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username">
						@if($errors->has('username'))
						<span class="invalid-feedback">{{ $errors->first('username') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
						@if($errors->has('password'))
						<span class="invalid-feedback">{{ $errors->first('password') }}</span>
						@endif
					</div>

					<div class="form-check form-check-inline">
						<input class="form-check-input {{ $errors->has('gander') ? ' is-invalid' : '' }}" type="radio" name="gander" id="inlineRadio1" value="L">
						<label class="form-check-label " for="inlineRadio1">Laki-Laki</label>
						@if($errors->has('gander'))
						<span class="invalid-feedback">{{ $errors->first('gander') }}</span>
						@endif
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input {{ $errors->has('gander') ? ' is-invalid' : '' }}" type="radio" name="gander" value="P">
						<label class="form-check-label" for="inlineRadio2">Perempuan</label>
						@if($errors->has('gander'))
						<span class="invalid-feedback">{{ $errors->first('gander') }}</span>
						@endif
					</div>

					<div class="mb-3">
						<label class="form-label">Level</label>
						<select class="form-control {{ $errors->has('level') ? ' is-invalid' : '' }}" name="level">
							<option value="">Pilih Level</option>
							<option value="admin">Admin</option>
							<option value="gsd">GSD</option>
							<option value="it">IT</option>
						</select>
						@if($errors->has('level'))
						<span class="invalid-feedback">{{ $errors->first('level') }}</span>
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

@include('sweetalert::alert')

@endsection