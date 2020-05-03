<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>LuvArt's</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">
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
                <a class="dropdown-item" href="#">Entrar</a>
                <a class="dropdown-item" href="#">Cadastrar-se</a>
                <div class="dropdown-divider"></div>
              @endif
              @if(Auth::check())
                <a class="dropdown-item" href="#">Sair</a>
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

  <div class="row">
    <div class="col-md-12 ">
      <p align="center" class="titulo">Top Mais Vendidos</p>
    </div>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{$maisComprados[0]->user_id == 1 ? asset($maisComprados[0]->ende_foto_pro) : Storage::url($maisComprados[0]->ende_foto_pro)}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{$maisComprados[1]->user_id == 1 ? asset($maisComprados[1]->ende_foto_pro) : Storage::url($maisComprados[1]->ende_foto_pro)}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{$maisComprados[2]->user_id == 1 ? asset($maisComprados[2]->ende_foto_pro) : Storage::url($maisComprados[2]->ende_foto_pro)}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container my-4 ">

    <p align="center" class="titulo">Você tambem pode gostar destas artes!</p>


    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{$alternativas[0]->user_id == 1 ? asset($alternativas[0]->ende_foto_pro) : Storage::url($alternativas[0]->ende_foto_pro)}}" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">{{ $alternativas[0]->nome_pro }}</h4>
                    <p class="card-text">{{ $alternativas[0]->descricao_pro }}</p>
                    <p class="card-text"><b>R$ {{ $alternativas[0]->preco_pro }}</b></p>
                    <a class="btn btn-primary">Comprar</a>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{$alternativas[1]->user_id == 1 ? asset($alternativas[1]->ende_foto_pro) : Storage::url($alternativas[1]->ende_foto_pro)}}"
                    alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">{{ $alternativas[1]->nome_pro }}</h4>
                    <p class="card-text">{{ $alternativas[1]->descricao_pro }}.</p>
                    <p class="card-text"><b>R$ {{ $alternativas[1]->preco_pro }}</b></p>
                    <a class="btn btn-primary">Comprar</a>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4 clearfix d-none d-md-block">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{$alternativas[2]->user_id == 1 ? asset($alternativas[2]->ende_foto_pro) : Storage::url($alternativas[2]->ende_foto_pro)}}"
                    alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">{{ $alternativas[2]->nome_pro }}</h4>
                    <p class="card-text">{{ $alternativas[2]->descricao_pro }}.</p>
                    <p class="card-text"><b>R$ {{ $alternativas[2]->preco_pro }}</b></p>
                    <a class="btn btn-primary">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
          


        
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{$alternativas[3]->user_id == 1 ? asset($alternativas[3]->ende_foto_pro) : Storage::url($alternativas[3]->ende_foto_pro)}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $alternativas[3]->nome_pro }}</h4>
                  <p class="card-text">{{ $alternativas[3]->descricao_pro }}</p>
                  <p class="card-text"><b>R$ {{ $alternativas[3]->preco_pro }}</b></p>
                  <a class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{$alternativas[4]->user_id == 1 ? asset($alternativas[4]->ende_foto_pro) : Storage::url($alternativas[4]->ende_foto_pro)}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $alternativas[4]->nome_pro }}</h4>
                  <p class="card-text">{{ $alternativas[4]->descricao_pro }}</p>
                  <p class="card-text"><b>R$ {{ $alternativas[4]->preco_pro }}</b></p>
                  <a class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{$alternativas[5]->user_id == 1 ? asset($alternativas[5]->ende_foto_pro) : Storage::url($alternativas[5]->ende_foto_pro)}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $alternativas[5]->nome_pro }}</h4>
                  <p class="card-text">{{ $alternativas[5]->descricao_pro }}.</p>
                  <p class="card-text"><b>R$ {{ $alternativas[5]->preco_pro }}</b></p>
                  <a class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{$alternativas[6]->user_id == 1 ? asset($alternativas[6]->ende_foto_pro) : Storage::url($alternativas[6]->ende_foto_pro)}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $alternativas[6]->nome_pro }}e</h4>
                  <p class="card-text">{{ $alternativas[6]->descricao_pro }}</p>
                  <p class="card-text"><b>R$ {{ $alternativas[6]->preco_pro }}</b></p>
                  <a class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{$alternativas[7]->user_id == 1 ? asset($alternativas[7]->ende_foto_pro) : Storage::url($alternativas[7]->ende_foto_pro)}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $alternativas[7]->nome_pro }}</h4>
                  <p class="card-text">{{ $alternativas[7]->descricao_pro }}</p>
                  <p class="card-text"><b>R$ {{ $alternativas[7]->preco_pro }}</b></p>
                  <a class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="{{$alternativas[8]->user_id == 1 ? asset($alternativas[8]->ende_foto_pro) : Storage::url($alternativas[8]->ende_foto_pro)}}"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">{{ $alternativas[8]->nome_pro }}</h4>
                  <p class="card-text">{{ $alternativas[8]->descricao_pro }}</p>
                  <p class="card-text"><b>R$ {{ $alternativas[8]->preco_pro }}</b></p>
                  <a class="btn btn-primary">Comprar</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
    </div>
      <!--/.Slides-->

    </div>

    <script src="{{ asset("js/app.js") }}"></script>

</body>

</html>