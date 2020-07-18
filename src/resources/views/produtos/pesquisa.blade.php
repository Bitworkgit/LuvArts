<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>pesquisando por {{$pesquisa}}</title>
  <link rel="stylesheet" type="text/css" href="{{ asset("public/css/app.css") }}">
  <link rel="stylesheet" href="{{ asset('public/pages/home/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/pages/home/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/css/menu.css') }}">


</head>

<body>
  <x-menu/>
  
  <div class="container">

    
	<br>



  <div class="container">
<div class="row">
  <!-- BEGIN SEARCH RESULT -->
  <div class="col-md-12">
    <div class="grid search">
      <div class="grid-body">
        <div class="row">
          <!-- BEGIN FILTERS -->
          <div class="col-md-3">
            <h2 class="grid-title"><i class="fa fa-filter"></i> Filtros</h2>
            <hr>
            
            <!-- BEGIN FILTER BY CATEGORY -->
            <h4>Por categoria:</h4>

            

              @foreach($categorias as $categoria)
                    <label><a href="{{ route('pesquisar.categoria', [
                      'categoria_id' => $categoria->id,
                      'pesquisa' => $pesquisa,
                      'ordem' => 'asc'
                    ]) }}">{{$categoria->nome_categoria}}</a></label><br>
              @endforeach

            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>
            
            <div class="padding"></div>
          </div>
          <!-- END FILTERS -->
          <!-- BEGIN RESULT -->
          <div class="col-md-9">
            <h2><i class="fa fa-file-o"></i> Resultado</h2>
            <hr>
            <!-- BEGIN SEARCH INPUT -->
            <div class="input-group">
 
              <span class="input-group-btn">
             </span>
            </div>
            <!-- END SEARCH INPUT -->
            
            <div class="padding"></div>
            @if($produtos == "Nada encontrado...")
              <br><br>
              <center>
                <h1>{{$produtos}}</h1>
              </center>
            @endif
            <!-- BEGIN TABLE RESULT -->
            <div class="table-responsive">
              @if($produtos != "Nada encontrado...")
                @foreach($produtos as $produto)
                    <table class="table table-hover">
                      <tbody>
                          <tr>
                            <td class="image"><img style="max-width: 247px;" src="{{Storage::url($produto->ende_foto_pro)}}" alt=""></td>
                            <td class="product"><a href="{{ route('produto.comprar',['id' => $produto->id]) }}"><strong style="color: black; font-size: 20px;">{{ $produto->nome_pro }}</strong></a><br>{{ $produto->descricao_pro }}</td>
                            <td class="price text-right"><b style="color: black; font-size: 20px;">R$ {{number_format($produto->preco_pro, 2, ',', '.') }}</b></td>
                          </tr>
                      </tbody>
                    </table>
                @endforeach
                {{$produtos->links()}}
              @endif
            </div>
            <!-- END TABLE RESULT -->
            
            <!-- BEGIN PAGINATION -->
            
            <!-- END PAGINATION -->
          </div>
          <!-- END RESULT -->
        </div>
      </div>
    </div>
  </div>
  <!-- END SEARCH RESULT -->
</div>
</div>

   
  </div>
      
    <script src="{{ asset("public/js/app.js") }}"></script>

</body>

</html>