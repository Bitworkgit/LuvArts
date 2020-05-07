<html>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>LuvArt's</title>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">
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
			  <!----------------------------------------------------------------------------------------------->
			     <li class="nav-item dropdown">
                <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                 
                  
                  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>


                  
                </div>
              </li>
			  <!------------------------------------------------------------------------------------------------------->
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

  <div id="carouselExampleControls" class="carousel slide bgpi" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
	  <div class="text-center">
        <img class="mx-auto d-block" style="max-height: 700px;  " src="{{$maisComprados[0]->user_id == 1 ? asset($maisComprados[0]->ende_foto_pro) : Storage::url($maisComprados[0]->ende_foto_pro)}}" alt="First slide">
      </div>
	  </div>
      <div class="carousel-item">
	  <div class="text-center">
        <img class="mx-auto d-block" style="max-height: 700px;" src="{{$maisComprados[1]->user_id == 1 ? asset($maisComprados[1]->ende_foto_pro) : Storage::url($maisComprados[1]->ende_foto_pro)}}" alt="Second slide">
      </div>
	  </div>
      <div class="carousel-item">
	  <div class="text-center">
        <img class="mx-auto d-block" style="max-height: 700px;" src="{{$maisComprados[2]->user_id == 1 ? asset($maisComprados[2]->ende_foto_pro) : Storage::url($maisComprados[2]->ende_foto_pro)}}" alt="Third slide">
      </div>
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


    <p align="center" class="titulo">Você tambem pode gostar destas artes!</p>
<!--------------------------------------------------------------------------------------------------->



<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <a href="#"><img class="img-fluid" src="{{$alternativas[0]->user_id == 1 ? asset($alternativas[0]->ende_foto_pro) : Storage::url($alternativas[0]->ende_foto_pro)}}" alt="Card image cap"></a></a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[1]->user_id == 1 ? asset($alternativas[1]->ende_foto_pro) : Storage::url($alternativas[1]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[2]->user_id == 1 ? asset($alternativas[2]->ende_foto_pro) : Storage::url($alternativas[2]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <a href="#"><img class="img-fluid" src="{{$alternativas[3]->user_id == 1 ? asset($alternativas[3]->ende_foto_pro) : Storage::url($alternativas[3]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <a href="#"><img class="img-fluid" src="{{$alternativas[4]->user_id == 1 ? asset($alternativas[4]->ende_foto_pro) : Storage::url($alternativas[4]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[5]->user_id == 1 ? asset($alternativas[5]->ende_foto_pro) : Storage::url($alternativas[5]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
 <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[6]->user_id == 1 ? asset($alternativas[6]->ende_foto_pro) : Storage::url($alternativas[6]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[7]->user_id == 1 ? asset($alternativas[7]->ende_foto_pro) : Storage::url($alternativas[7]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
<!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[8]->user_id == 1 ? asset($alternativas[8]->ende_foto_pro) : Storage::url($alternativas[8]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
<!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[9]->user_id == 1 ? asset($alternativas[9]->ende_foto_pro) : Storage::url($alternativas[9]->ende_foto_pro)}}" alt="Card image cap"></a>
  </div>
<!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <a href="#"><img class="img-fluid" src="{{$alternativas[10]->user_id == 1 ? asset($alternativas[10]->ende_foto_pro) : Storage::url($alternativas[10]->ende_foto_pro)}}" alt="Card image cap"></a>
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