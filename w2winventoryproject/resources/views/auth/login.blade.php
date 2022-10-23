<!doctype html>
<html lang="en">
<head>
<title>W2W Inventory</title>
<meta content="" name="description">
<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{ asset('W2WInventory/assets/img/W2WInventoryIcon.png') }}" rel="icon">
	<link href="{{ asset('W2WInventory/assets/img/W2WInventoryIcon.png') }}" rel="apple-touch-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="W2WLogin/css/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(W2WLogin/images/W2WInventoryIcon.png);">
                        </div>
					<div class="login-wrap p-4 p-md-5">
				<div class="d-flex">
				<div class="w-100">
					<h3 class="mb-4">Iniciar sesión</h3>
				</div>
				<div class="w-100">
					<p class="social-media d-flex justify-content-end">
						<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
						<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
					</p>
			</div>
			</div>
				<form method="POST" action="{{ route('login') }}" class="signin-form">
				@csrf
				<div class="form-group mb-3">
					<label class="label" for="name">Correo electronico</label>
					<div class="mb-3">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>
				<div class="form-group mb-3">
					<label class="label" for="password">Contraseña</label>
					<div class="mb-3">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="mb-3">
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary rounded submit px-6">
							{{ __('Login') }}
						</button>

						@if (Route::has('password.request'))
							<a class="btn btn-link px-3" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
					</div>
				</div>

				</form>
			</div>
			</div>
			</div>
			</div>
		</div>
	</section>

<script src="W2WLogin/js/jquery.min.js"></script>
<script src="W2WLogin/js/popper.js"></script>
<script src="W2WLogin/js/bootstrap.min.js"></script>
<script src="W2WLogin/js/main.js"></script>

	</body>
</html>
