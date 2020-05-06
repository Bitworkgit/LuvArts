    @section('header')
    <head>
        <style>
            .inline{
                float:left
                display: inline;
            }

            .navbar{
                background-color: rgba(18,20,37,0.89);
            }
            .Navcont {
                position: absolute;
                margin: auto;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 300px;
                height: 100px;
            }
            .Navcont .navsearch {
                position: absolute;
                margin: auto;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 50px;
                height: 50px;
                background: lightblue;
                border-radius: 50%;
                transition: all 1s;
                z-index: 4;
                box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
            }
            .Navcont .navsearch:hover {
                cursor: pointer;
            }
            .Navcont .navsearch::before {
                content: "";
                position: absolute;
                margin: auto;
                top: 22px;
                right: 0;
                bottom: 0;
                left: 22px;
                width: 12px;
                height: 2px;
                background: white;
                transform: rotate(45deg);
                transition: all .5s;
            }
            .Navcont .navsearch::after {
                content: "";
                position: absolute;
                margin: auto;
                top: -5px;
                right: 0;
                bottom: 0;
                left: -5px;
                width: 25px;
                height: 25px;
                border-radius: 50%;
                border: 2px solid white;
                transition: all .5s;
            }
            .Navcont input {
                font-family: 'Inconsolata', monospace;
                position: absolute;
                margin: auto;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 50px;
                height: 50px;
                outline: none;
                border: none;
                background: #313448;
                color: white;
                text-shadow: 0 0 10px black;
                padding: 0 60px 0 8px;
                border-radius: 30px;
                box-shadow: 0 0 25px 0 #003f88, 0 20px 25px 0 rgba(0, 0, 0, 0.2);
                transition: all 1s;
                opacity: 0;
                z-index: 5;
                font-weight: bolder;
                letter-spacing: 0.1em;
            }
            .Navcont input:hover {
                cursor: pointer;
            }
            .Navcont input:focus {
                width: 300px;
                opacity: 1;
                cursor: text;
            }
            .Navcont input:focus ~ .navsearch {
                right: -250px;
                background: rgba(18,20,37);
                z-index: 6;
            }
            .Navcont input:focus ~ .navsearch::before {
                top: 0;
                left: 0;
                width: 25px;
            }
            .Navcont input:focus ~ .navsearch::after {
                top: 0;
                left: 0;
                width: 25px;
                height: 2px;
                border: none;
                background: white;
                border-radius: 0%;
                transform: rotate(-45deg);
            }
            .Navcont input::placeholder {
                color: white;
                opacity: 0.5;
                font-weight: bolder;
            }

            
            .menu {
                font-size: 15px;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('pages/home/style.css') }}">
        <script src="{{ asset("js/app.js") }}"></script>

    </head>
    @endsection

  @section('menu')
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
				<a class="dropdown-item" href="http://127.0.0.1:8000/profile/6">Meu Perfil</a>
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
  @endsection