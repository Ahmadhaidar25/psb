
@extends('layout.main')
@section('content')

<h2><i class="bi bi-arrow-clockwise"></i>&nbsp;Reset Password</h2>
<div class="card">
	<div class="card-body">
		<form action="{{url('update-password')}}" method="post">
			@method("put")
			@csrf
			<div class="mb-3">
				<label for="current_password" class="form-label">Password Lama</label>
				<input type="password" class="form-control @error('current_password') is-invalid @enderror" 
				name="current_password" id="current_password">

				@error('current_password')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="password" class="form-label">Password Baru</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror" 
				name="password" id="password">

				@error('password')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="password_confirmation" class="form-label">Konfirmasi Password</label>
				<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
				name="password_confirmation" id="password_confirmation">

				@error('password_confirmation')
				<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>

			
			<button type="submit" class="btn btn-success">Reset</button>
		</form>
	</div>
</div>
@include('sweetalert::alert')
@endsection