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
</head>

<body>
  <a class="" href="#" style="
    /* margin-top: 77px; */
    z-index:  99999;
    padding: 10px;
    position: absolute;"><img src="img\NAV.png" width="140" class="nav-img  "></a>
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <a class="navbar-brand" href="#"><img src="img\" width="110" class="nav-link nav-img "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-md-8">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><br></a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="Navcont">
          <input type="text" placeholder="Search...">
          <div class="navsearch"></div>
        </div>
      </div>
    </div>
  </nav>

   <div class="container">

    <div class="row">
        <div class="col-md-5">
			<div class="row" >
				
					<img src="{{$produto->user_id == 1 ? asset($produto->ende_foto_pro) : Storage::url($produto->ende_foto_pro)}}" class="product d-block w-100" alt="First slide">
				
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
    <div class="textoCentro"><a class="prof" href="{{ route('profile.index',["user_id" => $artista->id]) }}">{{ $artista->nome }}</a></div>
		</div>
        <label>Quantidade: </label>
        <input type="text" value="1">
        <button type="button" class=" btn btn-default waves-effect waves-light comprar">Comprar</button>
      </div>
    </div>
	<br>

	<h1 class="font-weight-light text-center titulo mt-4 mb-0">você também pode gostar dessas artes</h1>

  <hr class="mt-2 mb-5">

   
  
  

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