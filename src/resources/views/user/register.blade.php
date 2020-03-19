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
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action = "{{ route("user.salvar") }}" class="login100-form validate-form">
				@csrf
				<span class="login100-form-title p-b-37">
					Cadastro
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
					<input class="input100" type="text" name="nome" placeholder="Digite seu Nome ou Nick">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter sobrenome">
					<input class="input100" type="text" name="sobrenome" placeholder="Digite seu Sobrenome">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter E-mail">
					<input class="input100" type="text" name="email" placeholder="exemple@gmail.com">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Cpf">
					<input class="input100" id="cpf" type="text" name="cpf" placeholder="Digite seu cpf">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="senha" placeholder="Sua Senha">
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Confirm password">
					<input class="input100" type="password" name="senha_confirmation" placeholder="Confirme sua Senha">
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
				
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Sex">
					<select class="input100 selectf">
						<option value="" disabled selected>Selecione seu Sexo</option>
						<option value="1">Masculino</option>
						<option value="0">Feminino</option>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Date">
					<input class="input100" type="text" id="date" name="data" placeholder="Digite sua data de nascimento">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Cep">
					<input class="input100" type="text" id="cep" name="cep" placeholder="Digite seu cep">
					<span class="focus-input100"></span>
				</div>

				<div class="form-check">
    				<input type="checkbox" class="form-check-input" id="exampleCheck1">
    				<label class="form-check-label" for="exampleCheck1">Aceito os  <a href = "http://www.google.com">Termos de Uso </a> e a <a href = "http://www.bing.com">Politica de Privacidade</a>  </label>
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
	<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
	<script>
		$('#cpf').mask('999.999.999-99', {reverse: true});
		$('#date').mask('99/99/9999');
		$("#cep").mask("99.999-999");
	</script>
	<script src="{{ asset("js/app.js") }}"></script>
	<script src="{{ asset("/pages/login/js/main.js")}}"></script>
	@if($errors->any())
		@foreach ($errors->all() as $error)
			<script>
				iziToast.error({title: 'Error',	message: '{{ $error }}',});
			</script>
		@endforeach    
	@endif
</body>
</html>