<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LuvArt's</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset("public/css/app.css") }}">
    <link rel="stylesheet" href="{{ asset('public/pages/home/style.css') }}">
    <style>
    
      .menu {
        font-size: 15px;
      }
    
    </style>
  </head>
  <body>
    <x-menu/>
    @if($mensagem == "")
      <div class="row">
        <div class="col-md-12 ">
          <p align="center" class="titulo">Top Mais Vendidos</p>
        </div>
      </div>

      <div id="carouselExampleControls" class="carousel slide bgpi" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
        <div class="text-center">
            <a href="{{ route('produto.comprar', ['id' => $maisComprados[0]->id]) }}">
        <img class="mx-auto d-block" style="max-height: 700px;" src="{{asset($maisComprados[0]->ende_foto_pro)}}" alt="First slide"></a>
          </div>
        </div>
          <div class="carousel-item">
        <div class="text-center">
        <a href="{{ route('produto.comprar', ['id' => $maisComprados[1]->id]) }}">
            <img class="mx-auto d-block" style="max-height: 700px;" src="{{asset($maisComprados[1]->ende_foto_pro)}}" alt="Second slide">
        </a>
      </div>
        </div>
          <div class="carousel-item">
        <div class="text-center">
        <a href="{{ route('produto.comprar', ['id' => $maisComprados[2]->id]) }}">
            <img class="mx-auto d-block" style="max-height: 700px;" src="{{asset($maisComprados[2]->ende_foto_pro)}}" alt="Third slide">
          </a>
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
          <a href="{{ route('produto.comprar', ['id' => $alternativas[0]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[0]->ende_foto_pro)}}" alt="Card image cap"></a></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[1]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[1]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[2]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[2]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[3]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[3]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 2">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[4]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[4]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[5]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[5]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
      <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[6]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[6]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
        <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[7]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[7]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
      <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          <a href="{{ route('produto.comprar', ['id' => $alternativas[8]->id]) }}"><img class="img-fluid" src="{{asset($alternativas[8]->ende_foto_pro)}}" alt="Card image cap"></a>
        </div>
      <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          {{--<a href="{{ route('produto.comprar', ['id' => $alternativas[9]->id]) }}"><img class="img-fluid" src="{{$alternativas[9]->usuario_id == 1 ? asset($alternativas[9]->ende_foto_pro) : asset($alternativas[9]->ende_foto_pro)}}" alt="Card image cap"></a>--}}
        </div>
      <!-- Grid column -->
        <div class="mb-3 pics animation all 1">
          {{--<a href="{{ route('produto.comprar', ['id' => $alternativas[10]->id]) }}"><img class="img-fluid" src="{{$alternativas[10]->usuario_id == 1 ? asset($alternativas[10]->ende_foto_pro) : asset($alternativas[10]->ende_foto_pro)}}" alt="Card image cap"></a>--}}
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
        }); 
      </script>
      <script src="{{ asset("public/js/app.js") }}"></script>
    @else
    <br>
      <center>
        <h1>{{$mensagem}}</h1>
      </center>
    @endif
	</body>
</html>