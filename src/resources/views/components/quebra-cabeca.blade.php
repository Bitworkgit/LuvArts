<div>
    @if($mensagem == "")
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
    @else
        <br><br>
        <center>
            <h1>{{$mensagem}}</h1>
        </center>
    @endif
</div>