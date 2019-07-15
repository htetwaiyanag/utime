	@extends('member/layout')

	@section('content')

	<section id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-8 center-div">
					<p class="text-muted intro-text" align="center">Login and enjoy our services. <br>Thank for your attention!</p>
						<div class="row custom-row" id="login-container">
							<div class="col-md-6 center-div">
								<div class="login-partation">
									<h3 align="center">Login</h3>
									<form>
										<div class="form-group">
											<label for="usernameFormInputControl">Username</label>
											<input type="text" class="form-control" id="usernameFormInputControl">
										</div>
										<div class="form-group">
											<label for="passwordFormInputControl">Password</label>
											<input type="password" class="form-control" id="passwordFormInputControl">
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-sm btn-block custom-btn" value="Login">
										</div>
										<div class="login-option">
											<a href="#">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="checkbox"><a href="#">Remember Me</a>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 center-div">
								<a href="{{ route('register') }}" class="register-link">
									<div class="register-partation">
										<div class="register-text">
											<p>Account has not been created?</p>
											<h3>Register Here</h3>
										</div>
									</div>
								</a>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>

	@endsection
