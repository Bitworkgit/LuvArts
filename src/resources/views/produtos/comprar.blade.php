<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Comprar {{ $produto->nome_pro }}</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("/pages/produtos/comprar/style.css") }}">
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
  <link rel="stylesheet" href="{{ asset('pages/home/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
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

   
  
  

  <div class="gallery" id="gallery">

    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[0]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[0]->ende_foto_pro)}}" alt="Card image cap"></a></a>
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[1]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[1]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[2]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[2]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[3]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[3]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[4]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[4]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[5]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[5]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
   <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[6]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[6]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[7]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[7]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
  <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[8]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[8]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
  <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[9]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[9]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
  <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <a href="{{ route('produto.comprar', ['id' => $alternativas[10]->id]) }}"><img class="img-fluid" src="{{Storage::url($alternativas[10]->ende_foto_pro)}}" alt="Card image cap"></a>
    </div>
  
  
  </div>
<!-- Grid row -->
<script>$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
}); </script>
  <script src="{{ asset("js/app.js") }}"></script>

</body>

</html>