<!DOCTYPE html>
<html>
<head>
	<title>Entrar</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('_css/login.css')}}">

	<link href="{{ asset('maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
	<script src="{{ asset('maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>

</head>
<body>
<div class="container">

	<div class="d-flex justify-content-center h-100">

		<div class="card">

			<div class="card-header">
				<x-validation-errors style="color:rgb(255, 255, 255); margin-top: 10px" class="mb-4" />
				<h3 class="text-center">Entrar</h3>
				<div class="d-flex justify-content-end social_icon">

				</div>
			</div>
			<div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" class="form-control" :value="old('email')"  placeholder="E-mail">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" name="password" class="form-control" :value="{{ __('Password') }}"  placeholder="senha">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Lembrar-me
					</div>
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn">
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
</body>
</html>
