<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/fonts/iconic/css/material-design-iconic-font.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/animate.css") }}">
    <x-global-css/>
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/css/main.css") }}">
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('/pages/login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form" method="post" action="{{ route("usuario.logar") }}">
				@csrf
				<span class="login100-form-title p-b-20">
					Entrar
				</span>

				<div class="wrap-input100 m-b-20">
					<input class="input100" type="text" name="email" placeholder="exemplo@gmail.com">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="password" name="password" placeholder="...............">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Entrar
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
					
					</span>
				</div>

				<div class="flex-c p-b-112">
					
					
				</div>

				<div class="text-center">
				<a href="{{ route("usuario.registrar") }}" class="txt2 hov1">
						Cadastrar-se
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
    <x-global-js/>
	<script src="{{ asset("/pages/login/js/main.js")}}"></script>
	@if(session('success'))
		<script>
			iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
		</script>
	@endif

	@if(session('error'))
		<script>
			iziToast.error({title: 'Erro', message: '{{ session('error') }}'});
		</script>
	@endif
</body>
</html>