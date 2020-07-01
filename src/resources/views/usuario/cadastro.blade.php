<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/fonts/iconic/css/material-design-iconic-font.min.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/animate.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/pages/login/css/main.css") }}">

	<style>
		.selectf {
			border-color: white;
		}
		.selectf:focus {
			outline: none;
			border: 0px white;
		}
	</style>
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('/pages/login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-30">
			<form method="post" action = "{{ route("usuario.salvar") }}" class="login100-form validate-form">
				@csrf
				<span class="login100-form-title p-b-20">
					Cadastro
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Digite seu Nome ou Nick">
					<input class="input100" type="text" name="nome" placeholder="Digite seu Nome ou Nick">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-20">
					<input class="input100" type="text" name="sobrenome" placeholder="Digite seu Sobrenome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="exemple@gmail.com">
					<input class="input100" type="text" name="email" placeholder="exemple@gmail.com">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Digite Sua Senha">
					<input class="input100" type="password" name="password" placeholder="Digite Sua Senha">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25" data-validate = "Confirme Sua Senha">
					<input class="input100" type="password" name="cofirmação_de_senha" placeholder="Confirme Sua Senha">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 m-b-20" data-validate="Selecione um Sexo">
					<select class="input100 selectf" name="sexo">
						<option value="" disabled selected>Selecione seu Sexo</option>
						<option value="1">Masculino</option>
						<option value="0">Feminino</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25" data-validate = "Escolha sua data de nascimento">
					<input class="input100" type="date" id="date" name="data">
					<span class="focus-input100"></span>
				</div>

				<div class="form-check">
    				<input type="checkbox" name="termos"  class="form-check-input" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Aceito os  <a href = "images/a.jpeg">Termos de Uso </a> e a <a href = "images/b.jpg">Politica de Privacidade</a>  </label>
				</div>
				<br/>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Cadastrar-se
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	<script src="{{ asset("js/app.js") }}"></script>
	<script src="{{ asset("/pages/login/js/main.js")}}"></script>
	@if($errors->any())
		@foreach ($errors->all() as $error)
			<script>
				iziToast.error({title: 'Erro',	message: '{{ $error }}',});
			</script>
		@endforeach    
	@endif
</body>
</html>