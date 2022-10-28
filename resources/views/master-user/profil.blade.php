@extends('main.layout')

@section('content')
<h2>Detail User</h2>

<div class="main-body">
	<div class="row gutters-sm">
		<div class="col-md-4 mb-3">
			<div class="card">
				<div class="card-body">
					<div class="d-flex flex-column align-items-center text-center">
						<img src="{{asset('images/'. Auth::user()->avatar)}}" alt="Admin" class="rounded-circle" width="150">


						<div class="mt-3">
							<h4>{{auth()->user()->name}}</h4>
							<p class="text-secondary mb-1">{{auth()->user()->level}}</p>

						</div>
						<form action="{{url('/update/image/')}}" method="post" enctype="multipart/form-data">
							@csrf
							<input type="file" name="avatar" class="form-control">
							<p class="text-danger">Max:2048</p>
							<button type="submit" class="btn btn-warning" style="float: left;">Update</button>
						</form>


					</div>
				</div>
			</div>

		</div>




		<div class="col-md-8">
			<form method="POST" action="{{ url('/profile/update/') }}">

				@csrf

				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Nama</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Username</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" name="username" class="form-control" value="{{auth()->user()->username}}" readonly>

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Gander</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" name="gander" class="form-control" value="{{auth()->user()->gander}}" readonly>

							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0">Level</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" name="level" class="form-control" value="{{auth()->user()->level}}" readonly>

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
			</form>
		</div>

	</div>

</div>







@include('sweetalert::alert')
@endsection