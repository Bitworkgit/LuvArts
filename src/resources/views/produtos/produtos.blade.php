<!DOCTYPE html>
<html>

<head>
  <title>Cadastro de Produtos</title>
  <meta name="viewport" content="width=device-width, initial-scale = 1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('pages/produtos/css/main.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="{{ asset("js/app.js") }}"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top ">
 
    <div class="container">
      <a href="index.html"><img src="{{ asset('pages/produtos/images/NAV.png') }}" width="110" class="nav-link"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   <div class="bg" style="background-image: url('{{asset('pages/produtos/images/bg-01.jpg')}}');">
    <div class="container">



      <div class="box">
        <form enctype="multipart/form-data" class="form-Center" method="POST" action="{{route('cadastro-produtos.store')}}">
            @csrf
          <fieldset>

            <!-- Form Name -->
              <div class="col-lg-5">
                <!-- File Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="uploadArt">Suba sua arte</label>
                  <div class="col-md-4">
                    <input type="file" name="imagem" multiple>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-lg-7">
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Pnome">Nome da sua obra!</label>
                  <div class="col-md-6">
                      <input id="Pnome" name="Pnome" type="text" placeholder="Exemplo" class="form-control input-md" value="{{old('Pnome')}}">

                  </div>
                </div>

                <!-- Select Multiple -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="categoria">Selecione a categoria em que sua arte se
                    enquadra!</label>
                  <div class="col-md-6">
                    <select id="categoria" name="categoria" class="form-control" multiple="multiple" selected="{{old('categoria')}}">
                      @foreach ($categoria as $item)
                          @if($item->id == old('categoria'))
                            <option value="{{$item->id}}" selected>{{$item->nome_categoria}}</option>
                          @else
                            <option value="{{$item->id}}">{{$item->nome_categoria}}</option>
                          @endif
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Descricao">Descrição</label>
                  <div class="col-md-4">
                       <textarea class="form-control" id="Descricao" name="Descricao">De um significado para sua obra!</textarea>
                  </div>
                </div>

                <!-- Multiple Radios (inline) -->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="Tcolecao">Tem uma Coleção pra Colocar sua Obra?</label>
                  <div class="col-md-4">

@if(session('error'))
  <br>
  @component('component.alert')
      {{session('error')}}
  @endcomponent
  <br>
@endif

<input type="radio" name="thing" value="valuable" data-id="teste1">Sim <br>
<input type="radio" name="thing" value="valuable" data-id="teste2">Não
<hr>

<script> $(':radio').change(function (event) {
  var id = $(this).data('id');
  $('#' + id).addClass('none').siblings().removeClass('none');
});
</script>

<div id="teste1" class="none">
    <label for="colecaoNome">Crie uma Coleção</label>
       <div class="col-md-6">
            <input id="colecaoNome" name="colecaoNome" type="text" value="{{old('colecaoNome')}}" placeholder="exemplo!" class="form-control input-md">
       </div>
</div>

<div id="teste2" class="none">
  <label for="colecao">Selecione sua Coleção</label>
    <div class="col-md-6">
      <select id="colecao" name="colecao" class="form-control input-md">
        <option value="0" selected >Selecione uma opção</option>
        @foreach ($colecao as $item)
            @if($item->id == old('colecao'))
              <option value="{{$item->id}}" selected>{{$item->nome_colecao_col}}</option>
            @else
              <option value="{{$item->id}}">{{$item->nome_colecao_col}}</option>
            @endif
        @endforeach
     </select>
    </div>
</div>
          </div>
          <br>
 <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Preco">Preço</label>
                  <div class="col-md-6">
                      <input type="number" name="preco" class="form-control input-md" step="0.010" value="{{old('preco')}}">
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="finalizar"></label>
                  <div class="col-md-4">
                    <button id="finalizar" name="finalizar" class="btn btn-primary">Finalizar</button>
                  </div>
                </div>
              </div>

              
            </div>
          </fieldset>
        </form>
      </div>
    </div>

  </div>

<footer class="py-5 background-la">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright © Luv Art's 2019</p>
  </div>
  <!-- /.container -->
</footer>


@if($errors->any())
  @foreach ($errors->all() as $error)
    <script>
      iziToast.error({title: 'Erro', message: '{{$error}}'});
    </script>
  @endforeach
@endif
</body>
</html>


