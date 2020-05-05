<!DOCTYPE html>
<html>

<head>
  <title> @yield('title') </title>
  <link rel="stylesheet" href="{{ asset('pages/home/style.css') }}">
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
    <a class="navbar-brand" href="{{ route('home') }}"><img src="img\" width="110" class="nav-link nav-img "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-md-8">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link menu" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="#">Sobre nós</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Usuário
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if(!Auth::check())
                <a class="dropdown-item" href="{{ route('user.login') }}">Entrar</a>
                <a class="dropdown-item" href="{{ route('user.register') }}">Cadastrar-se</a>
                <div class="dropdown-divider"></div>
              @endif
              @if(Auth::check())
                <a class="dropdown-item" href="{{ route('user.sair') }}">Sair</a>
              @endif
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><br></a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="Navcont">
          <input type="text" placeholder="Pesquisar...">
          <div class="navsearch"></div>
        </div>
      </div>
    </div>
  </nav>

<!-- -->
  @yield('conteudo')
<!-- -->

</body>
</html>