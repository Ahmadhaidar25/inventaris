@extends('main.layout')
@section('content')
<h2 class="card-title">Edit User</h2>
<form method="POST" action="{{url('/update-user')}}/{{$edit->id}}" enctype="multipart/form-data">

	@csrf
	<div class="main-body">
		<div class="row gutters-sm">
			<div class="col-md-4 mb-3">
				<div class="card">
					<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">

							<img src="{{url('/images/')}}/{{$edit->avatar}}" alt="Admin" class="rounded-circle" width="150">
                             <input type="file" name="avatar" class="form-control">

							<div class="mt-3">
								<h4>{{$edit->name}}</h4>
								<p class="text-secondary mb-1">{{$edit->level}}</p>

							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-8">

				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Nama</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control" name="name" 
								value="{{$edit->name}}">

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Username</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" name="username" class="form-control" value="{{$edit->username}}">

							</div>
						</div>
						<hr>

						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Password</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="password" name="password" class="form-control" value="{{$edit->password}}">

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Gander</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" name="gander" class="form-control" value="{{$edit->gander}}">

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Level</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" name="level" class="form-control" value="{{$edit->level}}" readonly>

							</div>
						</div>
						<hr>


						<div class="row">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success">Update</button>
							</div>
						</div>
					</div>
				</div>
			
		</div>
		
	</div>

</div>
</form>
@endsection