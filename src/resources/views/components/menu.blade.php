<div>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">   
    <a class="navimg" href="{{ route('home') }}" style="
        /* margin-top: 77px; */
        z-index:  99999;
        padding: 10px;
        position: absolute;
    "><img src="{{ asset('images/NAV.png')}}" width="140" class="nav-img  "></a>
      <nav class="navbar navbar-expand-lg navbar-dark ">

        <a class="navbar-brand"  href="{{ route('home') }}"><img style="opacity: 0;" src="http://127.0.0.1:8000/images/dark.png" height="10px" width="140" class="nav-img  "></a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-md-8">
            <ul class="navbar-nav mr-auto">
      @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/cart.png')}}" width="30" class="nav-img  ">
                    
                    </a>
                    <div class="dropdown-menu cart" aria-labelledby="navbarDropdown">
                    @if($carrinho->count() > 0)
                      <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th></th>
                                <th class="text-center"></th>
                                <th class="text-center">Preço</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($carrinho as $item)
                              <tr>
                                  <td class="col-sm-8 col-md-6">
                                  <div class="media">
                                      <img class="media-object" src="{{Storage::url($item->produto()->get()->first()->ende_foto_pro)}}" style="width: 72px; height: 72px;">
                                      <div class="media-body">
                                          <h4 class="media-heading"><a href="{{route('produto.comprar',['id' => $item->produto()->get()->first()->id])}}">{{$item->produto()->get()->first()->nome_pro}}</a></h4>
                                      </div>
                                  </div></td>
                                  <td class="col-sm-1 col-md-1" style="text-align: center">
                                  </td>
                                  <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                                  <td class="col-sm-1 col-md-1 text-center"><strong>R$ {{$item->produto()->get()->first()->preco_pro}}</strong></td>
                                  <td class="col-sm-1 col-md-1">
                                    <form action="{{route('produto.removerDoCarrinho', $item->id)}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                          <button type="submit" class="btn btn-danger">
                                              <span class="glyphicon glyphicon-remove">
                                                  Remover
                                              </span>
                                          </button>
                                    </form>
                                  </td>
                              </tr>
                          @endforeach
                          
                          <tr>
                              <td>   </td>
                              <td>   </td>
                              <td>   </td>
                              <td>
                          </td>
                              <td>
                              <button type="button" class="btn btn-dark " style="background-color: #414251!important;">
                                  Comprar <span class="glyphicon glyphicon-play"></span>
                              </button></td>
                          </tr>
                      </tbody>
                    </table>
                    @endif
                


                    
                    </div>
                </li>
      @endif
			
			
			
              <li class="nav-item active">
                <a class="nav-link menu" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
              </li>
			    
              <li class="nav-item">
                <a class="nav-link menu" href="{{ route('sobre') }}">Sobre nós</a>
              </li>

<div class="dropdown nav-link menu">
  <li class="dropdown nav-item">
                <a class="nav-link menu" style="
    padding-top: 1px;">Usuário</a>
			</li>
  <div class="dropdown-content">
     @if(!Auth::check())
                  <a class="dropdown-item" href="{{ route('usuario.login') }}">Entrar</a>
                  <a class="dropdown-item" href="{{ route('usuario.registrar') }}">Cadastrar-se</a>
                    <div class="dropdown-divider"></div>
                  @endif
                  @if(Auth::check())
                    <a class="dropdown-item" href="{{ route('perfil.index',['usuario_id' => Auth::User()->id]) }}">Meu Perfil</a>
                    <a class="dropdown-item" href="{{ route('usuario.sair') }}">Sair</a>
                  @endif
  </div>
</div>

              
			  <!----------------------------------------------------------------------------------------------->
              <li class="nav-item">
                <a class="nav-link menu" data-toggle="modal" data-target="#exampleModal">Pesquisa por categias multiplas</a>
              </li>
              <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog dark">
                  <div class="modal-content dark">
                    <div class="modal-header dark">
                      <h5 class="modal-title" id="exampleModalLabel">Pesquisa por categorias multiplas</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('pesquisar.categoriaMultiplas')}}" method="POST" id="form-multi">
                        @csrf
                        <select class="js-example-basic-multiple large-select" name="ids[]" multiple="multiple">
                          @foreach($categorias as $categoria)
                              <option value="{{$categoria->id}}">{{$categoria->nome_categoria}}</option>
                          @endforeach
                        </select>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary  dark" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary  ldark" form="form-multi">Pesquisar</button>
                    </div>
                  </div>
                </div>
              </div>
			  
			
			  <!------------------------------------------------------------------------------------------------------->
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><br></a>
              </li>
            </ul>
          </div>



          <form method="GET" action="{{ route('pesquisar') }}">
            <div class="col-md-4">
                <div class="Navcont">
                <input type="text" id="pesquisa" placeholder="Pesquisar...">
                <div class="navsearch"></div>
                </div>
            </div>
          </form>
        </div>
      </nav>
      <script src="{{ asset('js/app.js') }}"></script>
      <script>
        var entrada = document.getElementById('pesquisa');
        entrada.addEventListener("keyup", function(event) {
          if (event.keyCode === 13) {
              var url = '{{ route('pesquisar') }}/' + $("#pesquisa").val();
              window.location.href = url;
          }
        });

        $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
        });
    </script>
</div>