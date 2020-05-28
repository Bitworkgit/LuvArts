<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sobre nós</title>
  <link rel="stylesheet" href="{{ asset('pages/sobre/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
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
<script>
  var entrada = document.getElementById('pesquisa');
  entrada.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        var url = '{{ route('pesquisar') }}/' + $("#pesquisa").val();
        window.location.href = url;
    }
  });

</script>

    <script src="{{ asset("js/app.js") }}"></script>

    <div class="container">
		<div class="about">
			<div>
				<h1>Sobre nós</h1>
			</div>
		</div>
		<div class="content">
			<p><b>B</b>em vindos a nossa página, nós da LuvArt's agradecemos o seu acesso, somos uma equipe com o objetivo de poder
                fazer a diferença ao mundo, através de nosso site você artista pode cadastrar seu trabalho e você consumidor poderá efetuar a compra de lindas artes, e ao mesmo tempo
                ambos estarão ajudando instituições de caridade que sobrevivem apenas com doações. Assim nós da LuvArt's e você artista e consumidor estará ajudando a transformar o mundo
                em um lugar melhor. :D </p>
		</div>
		</div>
		<footer>Copyright &copy;LuvArt's 2020 </footer>

</body>

</html>