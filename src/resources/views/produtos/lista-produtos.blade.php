@extends('layPadrao.layout')

@section('title', 'Artes' . $texto)
    
@section('conteudo')
        
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">
                <font style="vertical-align: inherit;">
                    <br>
                    <font style="vertical-align: inherit;">Artes{{$texto ?? ""}}</font>
                </font>
            </h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

          <h1>{{$semDados ?? ''}} <br><br><br><br><br><br><br><br> </h1>
        
        @foreach ($prod as $item)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{$item->user_id == 1 ? asset($item->ende_foto_pro) : Storage::url($item->ende_foto_pro)}}" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">
                    <font style="vertical-align: inherit;">
                        <h3><font style="vertical-align: inherit;">{{$item->nome_pro}} </font></h3>
                        <font style="vertical-align: inherit;">{{$item->descricao_pro}}</font>
                    </font></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <form action="{{route('item.destroy', $item['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-primary">
                              <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">
                                    <a href="{{ route('produto.comprar',['id' => $item->id]) }}" style="color: white; text-decoration:none;">Visualizar</a>
                                  </font>
                              </font>
                          </button>

                          @if($seeArts ?? false or $seeArtsCol ?? false)
                            <a href="{{route('item.edit', $item['id'])}}" type="button" class="btn btn-sm btn-outline-secondary">
                              <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">Editar</font>
                              </font>
                           </a>
                          
                           <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Deseja realmente excluir a arte?');">
                              <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">Excluir</font>
                              </font>
                           </button>
                          @endif
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        @endforeach 
          </div>
        </div>
      </div>
    </main>
    {{ $prod->links() }}


    @if(session('success'))
      <script>
        iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
      </script>
    @endif

@endsection
