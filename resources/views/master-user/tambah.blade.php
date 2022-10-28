@extends('main.layout')

@section('container')
<h2 class="card-title">Tambah User</h2>
<div class="card" style="width: 50rem;">
	<div class="card-body">
		
		<form action="{{url('tambah-user')}}" method="post">
			@csrf
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Nama</label>
				<input type="text" class="form-control" name="name">

			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Email</label>
				<input type="email" class="form-control" name="email">
			</div>

			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" name="password">
			</div>

			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="gander" id="inlineRadio1" value="L">
				<label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="gander" value="P">
				<label class="form-check-label" for="inlineRadio2">Perempuan</label>
			</div>

			<div class="mb-3">
				<label class="form-label">Level</label>
				<select class="form-control" name="level">
					<option value="">Pilih Level</option>
					<option value="admin">Admin</option>
					<option value="gsd">GSD</option>
					<option value="it">IT</option>
				</select>
			</div>
			<br>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection