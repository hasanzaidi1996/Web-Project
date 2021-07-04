@extends('layouts.nav')
@section('head')
<title>Register</title>
<link rel="stylesheet" href="{{ URL::asset('css/Register.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/Register.js') }}"></script>
@endsection
@section('content')
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<br>
					<div class="d-flex justify-content-center links">
						Already Have An Account? <a href="/Login">Log-In</a>
					</div>
				</div>
				<div class="card-header">

					<h3>Register</h3>

				</div>

				<div class="card-body">
					<form action="/Register" method="post">
					@csrf
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="Name" placeholder="Name" onkeyup="validate(this)" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="Username" placeholder="username" onkeyup="validate(this)" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" class="form-control" name="Email" placeholder="Email" onkeyup="validate(this)" required="">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="#pass" name="Password" placeholder="Password" onkeyup="validate(this)" required="">
							<span class="print"></span>

						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="#cpass" name="CPassword" placeholder="Confirm password" onkeypress="validate(this)" onkeyup="checkpassword()" required="">
							<span class="print"></span>
						</div>

						<div class="form-group">
							<button type="submit" class="btn float-right login_btn" id="#submit">Register</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	@endsection