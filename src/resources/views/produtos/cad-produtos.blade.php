<!DOCTYPE html>
<html>

<head>
  <title>Cadastro de Produtos</title>
  <meta name="viewport" content="width=device-width, initial-scale = 1">
  <link rel="stylesheet" href="{{asset('pages/produtos/css/main.css')}}">
  <script src="{{ asset("js/app.js") }}"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        <form enctype="multipart/form-data" class="form-Center" method="POST" action="{{route('item.store')}}">
            @csrf
          <fieldset>
            <div class="row">
              <div class="col-lg-7">
                <!-- File Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="uploadArt">Suba sua arte</label>
                  <div class="col-md-4">
                    <input type="file" name="imagem">
                  </div>
                </div>
              </div>
            
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
                  <label class="col-md-4 control-label" for="categoria">Selecione a categoria em que sua arte se enquadra!</label>
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
                       <textarea class="form-control" id="Descricao" name="Descricao">@if($item->descricao_pro == old('Descricao'))De um significado para sua obra!@else{{ old('Descricao')}} @endif </textarea>
                  </div>
                </div>

                <!-- Multiple Radios (inline) -->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="Tcolecao">Tem uma coleção para colocar sua obra?</label>
                  <div class="col-md-6">

                      @if(session('error'))
                        <script>
                          iziToast.error({title: 'Erro', message: '{{ session('error') }}'});
                        </script>
                      @endif

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="thing" id="exampleRadios1" value="valuable" data-id="teste1">
                        <label class="form-check-label" for="exampleRadios1">
                          Sim
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="thing" id="exampleRadios2" value="valuable" data-id="teste2">
                        <label class="form-check-label" for="exampleRadios2">
                          Não
                        </label>
                      </div>


                      <!--<input type="radio" name="thing" value="valuable" data-id="teste1">Sim <br>
                      <input type="radio" name="thing" value="valuable" data-id="teste2">Não-->
                      <hr>

                      <script> $(':radio').change(function (event) {
                        var id = $(this).data('id');
                        $('#' + id).addClass('none').siblings().removeClass('none');
                      });
                      </script>

                      <div id="teste1" class="none">
                        <div class="form-group">
                        <label class="col-md-15 control-label" for="colecaoNome">Crie uma Coleção</label>
                          <div class="col-md-15">
                                <input id="colecaoNome" name="colecaoNome" type="text" value="{{old('colecaoNome')}}" placeholder="exemplo!" class="form-control input-md">
                          </div>
                      </div>
                      </div>

                      <div class="none" id="teste2">
                        <label class="col-md-15 control-label" for="colecao">Selecione sua Coleção</label>
                          <div class="col-md-20">
                            <select id="colecao" name="colecao" class="form-control input-md">
                              <option value="0" selected >Selecione</option>
                              @foreach ($colecao as $item)
                                  @if($item->id == old('colecao'))
                                    <option value="{{$item->id}}" selected>{{$item->nome_colecao_col}}</option>
                                  @else
                                    <option value="{{$item->id}}">{{$item->nome_colecao_col}}</option>
                                  @endif
                              @endforeach
                          </select>
                          <br>
                          
                          </div>
                      </div>
                   </div>
                       
              <label class="col-md-4 control-label" for="Preco">Preço </label>
              <div class="col-md-4 control-label">
                  <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
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
</footer>

@if(session('success'))
  <script>
    iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
  </script>
@endif

@if($errors->any())
  @foreach ($errors->all() as $error)
    <script>
      iziToast.error({title: 'Erro', message: '{{$error}}'});
    </script>
  @endforeach
@endif
</body>
</html>


