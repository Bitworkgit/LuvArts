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
  <a class="" href="{{ route('home') }}" style="
        /* margin-top: 77px; */
        z-index:  99999;
        padding: 10px;
        position: absolute;
    "><img src="{{ asset('images/NAV.png')}}" width="140" class="nav-img  "></a>
      <nav class="navbar navbar-expand-lg navbar-dark ">

        <a class="navbar-brand" href="{{ route('home') }}"><img src="http://127.0.0.1:8000/images/dark.png" height="10px" width="140" class="nav-img  "></a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-md-8">
            <ul class="navbar-nav mr-auto">
      @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/cart.png')}}" width="30" class="nav-img  ">
                    
                    </a>
                    <div class="dropdown-menu cart" aria-labelledby="navbarDropdown">
                    
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th></th>
                            <th class="text-center"></th>
                            <th class="text-center">Preço</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carrinho as $item)
                            <tr>
                                <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <img class="media-object" src="{{Storage::url($item->produto()->get()->first()->ende_foto_pro)}}" style="width: 72px; height: 72px;">
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="{{route('produto.comprar',['id' => $item->produto()->get()->first()->id])}}">{{$item->produto()->get()->first()->nome_pro}}</a></h4>
                                    </div>
                                </div></td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>R$ {{$item->produto()->get()->first()->preco_pro}}</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <a style="color: black; text-decoration: none;" href="{{route('produto.removerDoCarrinho',['id' => $item->id])}}">
                                        <button type="button" class="btn btn-danger">
                                            <span class="glyphicon glyphicon-remove"></span>
                                                Remover
                                            
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                        </td>
                            <td>
                            <button type="button" class="btn btn-dark " style="background-color: #414251!important;">
                                Comprar <span class="glyphicon glyphicon-play"></span>
                            </button></td>
                        </tr>
                    </tbody>
                </table>
    


                    
                    </div>
                </li>
      @endif
			
			
			
              <li class="nav-item active">
                <a class="nav-link menu" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
              </li>
			    
              <li class="nav-item">
                <a class="nav-link menu" href="{{ route('sobre') }}">Sobre nós</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Usuário
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if(!Auth::check())
                  <a class="dropdown-item" href="{{ route('usuario.login') }}">Entrar</a>
                  <a class="dropdown-item" href="{{ route('usuario.registrar') }}">Cadastrar-se</a>
                    <div class="dropdown-divider"></div>
                  @endif
                  @if(Auth::check())
                    <a class="dropdown-item" href="{{ route('perfil.index',['usuario_id' => Auth::User()->id]) }}">Meu Perfil</a>
                    <a class="dropdown-item" href="{{ route('usuario.sair') }}">Sair</a>
                  @endif
                </div>
              </li>
			  <!----------------------------------------------------------------------------------------------->
              <li class="nav-item dropdown">
                <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                    @foreach($categorias as $categoria)
                        <a class="dropdown-item" href="{{ route('pesquisar.categoria', ['categoria_id' => $categoria->id]) }}">{{ $categoria->nome_categoria }}</a>
                    @endforeach
                </div>
              </li>
			  
			
			  <!------------------------------------------------------------------------------------------------------->
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><br></a>
              </li>
            </ul>
          </div>



          <form method="GET" action="{{ route('pesquisar') }}">
            <div class="col-md-4">
                <div class="Navcont">
                <input type="text" id="pesquisa" placeholder="Pesquisar...">
                <div class="navsearch"></div>
                </div>
            </div>
          </form>
        </div>
      </nav>

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
        <form id="formulario" action="{{route('produto.adicionarAoCarrinho',['comprador_id' => Auth::User()->id, 'produto_id' => $produto->id])}}" method="POST"> @csrf @method('PUT') </form>
          <button style="color: white;" type="submit" form="formulario" class=" btn btn-default waves-effect waves-light comprar">
              Adicionar ao carrinho
          </button>
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