<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Comprar {{ $produto->nome_pro }}</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset("public/css/app.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("public/pages/produtos/comprar/style.css") }}">
  <link rel="stylesheet" href="{{ asset('public/css/menu.css') }}">
  <link rel="stylesheet" href="{{ asset('public/pages/home/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/menu.css') }}">
  <style>
  
    .menu {
      font-size: 15px;
    }
	
  </style>
  </head>
<body>
  <x-menu/>
   <div class="container">

    <div class="row">
        <div class="col-md-5">
			<div class="row" >
				
					<img src="{{Storage::url($produto->ende_foto_pro)}}" class="product d-block w-100" alt="First slide">
				
			</div>
            

      </div>
      <div class=" col-md-7">
        <h2 class ="titulo"> {{ $produto->nome_pro}} </h2>
        <p class="preco">R$ {{ $produto->preco_pro }}</p>
		
		
       
		<input type="checkbox" id="btn-a">

  <label for= "btn-a" >
    <p><i class="fa fa-arrow-circle-down"></i><strong> Descrição </strong></p>
  </label>

  <div class="hide">
    <p>
      {{ $produto->descricao_pro }}
    </p>
  </div>

		<div class="row artist">
    <div class="textoCentro"><a class="prof" href="{{ route('perfil.index',["usuario_id" => $artista->id]) }}">{{ $artista->nome }}</a></div>
		</div>
        <label>Quantidade: </label>
        <input type="text" value="1"><br>
        <button type="button" class=" btn btn-default waves-effect waves-light comprar"><a style="color:white; text-decoration: none;">Comprar</a></button>
        @if(Auth::check())
          <x-requisicao
          :action="route('produto.adicionarAoCarrinho',['comprador_id' => Auth::User()->id, 'produto_id' => $produto->id])" 
          classe="btn btn-default waves-effect waves-light comprar">
            Adicionar ao carrinho
          </x-requisicao>
        @endif
      </div>
    </div>
	<br>

	<h1 class="font-weight-light text-center titulo mt-4 mb-0">você também pode gostar dessas artes</h1>

  <hr class="mt-2 mb-5">

  <x-quebra-cabeca/>

  <script src="{{ asset("public/js/app.js") }}"></script>

</body>

</html>