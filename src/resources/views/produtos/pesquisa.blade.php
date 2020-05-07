<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>pesquisando por {{$pesquisa}}</title>
  <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">

</head>

<body>
  <a class="" href="#" style="
    /* margin-top: 77px; */
    z-index:  99999;
    padding: 10px;
    position: absolute;
"><img src="img\NAV.png" width="140" class="nav-img  "></a>
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

    
	<br>

	<h1 class="font-weight-light text-center titulo mt-4 mb-0">você também pode gostar dessas artes</h1>

  <hr class="mt-2 mb-5">

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

            

            <form action="{{route('pesquisar')}}" >
              @foreach($categorias as $categoria)
                <div class="checkbox">
                    <label><input type="checkbox" class="icheck" name="{{$categoria->nome_categoria}}" value="{{$categoria->id}}"> {{$categoria->nome_categoria}}</label>
                </div>
              @endforeach
               <input type="submit" value="Filtrar">
               <br><br>
               <br><br>
               <br><br>
               <br><br>
            </form>
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
              <input type="text" class="form-control" value="{{ $pesquisa }}">
              <span class="input-group-btn">
                <button class="btn btn-primary" style="width: 98%;" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <!-- END SEARCH INPUT -->
            <div class="padding"></div>
            
            <div class="row">
              <!-- BEGIN ORDER RESULT -->
              <div class="col-sm-6">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Order by <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('pesquisar',[
                      'pesquisa' => $pesquisa,
                      'ordem' => 'asc'
                      ])}}">Menor preço</a></li>
                    <li><a href="{{ route('pesquisar',[
                      'pesquisa' => $pesquisa,
                      'ordem' => 'desc'
                      ])}}">Maior preço</a></li>
                  </ul>
                </div>
              </div>
              <!-- END ORDER RESULT -->
              
           
            </div>
            
            <!-- BEGIN TABLE RESULT -->
            <div class="table-responsive">
              @foreach($produtos as $produto)
                @if($produto->categoria->nome_categoria == )
                  <table class="table table-hover">
                    <tbody>
                        <tr>
                          <td class="image"><img style="max-height: 350px;" src="{{$produto->user_id == 1 ? asset($produto->ende_foto_pro) : Storage::url($produto->ende_foto_pro)}}" alt=""></td>
                          <td class="product"><a href="{{ route('produto.comprar',['id' => $produto->id]) }}"><strong style="color: black; font-size: 20px;">{{ $produto->nome_pro }}</strong></a><br>{{ $produto->descricao_pro }}</td>
                          <td class="price text-right"><b style="color: black; font-size: 20px;">R$ {{number_format($produto->preco_pro, 2, ',', '.') }}</b></td>
                        </tr>
                    </tbody>
                  </table>
              @endforeach
              {{$produtos->links()}}
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
      
    <script src="{{ asset("js/app.js") }}"></script>

</body>

</html>