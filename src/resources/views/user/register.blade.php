<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/fonts/iconic/css/material-design-iconic-font.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/animate.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/css/main.css") }}">
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('/pages/login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o NickName">
					<input class="input100" type="text" name="NickName" placeholder="Nome / Nick">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o Sobrenome">
					<input class="input100" type="text" name="LastName" placeholder="Sobrenome (Opcional)">
					<span class="focus-input100"></span>
				</div>
				

				<div class="wrap-input100 validate-input m-b-20" data-validate="Preencha o email">
					<input class="input100" type="text" name="Email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Preencha a Senha">
					<input class="input100" type="password" name="pass" placeholder="Senha">
					<span class="focus-input100"></span>
				</div>

				<div class="form-check">
    				<input type="checkbox" class="form-check-input" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Aceito os  <a href = "http://www.google.com">Termos de Uso </a> e a <a href = "http://www.bing.com">Politica de Privacidade</a>  </label>
					

 		 		</div>
				  <br>
				<div class="container-login100-form-btn" >
					<button class="login100-form-btn">
						Sign Up
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or register with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="{{ asset("/pages/login/images/icons/icon-google.png")}}" alt="GOOGLE">
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset("js/app.js") }}"></script>
	<script src="{{ asset("/pages/login/js/main.js")}}"></script>

</body>
</html>