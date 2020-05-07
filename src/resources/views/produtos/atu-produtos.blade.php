@extends('layPadrao.layout')

@section('title', 'Alteração de Artes')

@section('conteudo')
      
   <div class="bg" style="background-image: url('{{asset('pages/produtos/images/bg-01.jpg')}}');">
    <div class="container">

      <div class="box">
        <form enctype="multipart/form-data" class="form-Center" method="POST" action="{{route('item.update', $atu->id)}}">
            @csrf
            @method('PUT')
          <fieldset>
            <div class="row">
              <div class="col-lg-7">
                <!-- File Button -->
                <div class="form-group">
                  <p>OBS: Caso não seja informado nenhuma imagem de sua obra, mantera a imagem cadastrada anteriormente.</p>
                  <label class="col-md-4 control-label" for="uploadArt">Altere sua arte</label>
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
                      <input id="Pnome" name="Pnome" type="text" placeholder="Exemplo" class="form-control input-md" value="{{$atu->nome_pro}}">

                  </div>
                </div>

                <!-- Select Multiple -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="categoria">Altere a categoria em que sua arte se enquadra!</label>
                  <div class="col-md-6">
                    <select id="categoria" name="categoria" class="form-control" multiple="multiple" selected="{{old('categoria')}}">
                      @foreach ($categoria as $item)
                          @if($item->id == $atu->cod_categoria)
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
                       <textarea class="form-control" id="Descricao" name="Descricao">{{$atu->descricao_pro}}</textarea>
                  </div>
                </div>

                @if(session('error'))
                  <script>
                    iziToast.error({title: 'Erro', message: '{{ session('error') }}'});
                  </script>
                @endif
                
                <hr>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="colecao">Altere sua Coleção</label>
                    <div class="col-md-6">
                        <select id="colecao" name="colecao" class="form-control input-md">
                            <option value="0" selected >Selecione uma opção</option>
                            @foreach ($colecao as $item)
                                @if($item->id == $atu->cod_colecoes)
                                    <option value="{{$item->id}}" selected>{{$item->nome_colecao_col}}</option>
                                @else
                                    <option value="{{$item->id}}">{{$item->nome_colecao_col}}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                </div>
                <!--</div>-->

                <h5 class="col-md-4 control-label">OU</h5>

                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="colecaoNome">Crie uma nova Coleção</label>
                      <div class="col-md-6">
                            <input id="colecaoNome" name="colecaoNome" type="text" value="{{old('colecaoNome')}}" placeholder="exemplo!" class="form-control input-md">
                      </div>
                </div>
               

                <div class="form-group">
                    <label class="col-md-4 control-label" for="Preco">Preço </label>
                    <div class="col-md-4 control-label">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                            <input type="number" name="preco" class="form-control input-md" step="0.010" value="{{$atu->preco_pro}}">
                        </div>
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
              
            </div>
          </fieldset>
        </form>
      </div>
    </div>

  </div>
  <script src="{{ asset("js/app.js") }}"></script>

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

@endsection
