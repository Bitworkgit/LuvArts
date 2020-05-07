<html>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="{{asset('pages/produtos/css/main.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('pages/profile/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('pages/home/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <script src="{{ asset("js/app.js") }}"></script>
    </head>

    <body>
      <a class="" href="{{ route('home') }}" style="
        /* margin-top: 77px; */
        z-index:  99999;
        padding: 10px;
        position: absolute;
    "><img src="{{ asset('images/NAV.png')}}" width="140" class="nav-img  "></a>
      <nav class="navbar navbar-expand-lg navbar-dark ">

        <a class="navbar-brand" href="{{ route('home') }}"><img src="http://127.0.0.1:8000/images/dark.png" height="10px" width="140" class="nav-img  "></a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-md-8">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link menu" href="{{ route('home') }}">Início <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu" href="#">Sobre nós</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Usuário
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if(!Auth::check())
                  <a class="dropdown-item" href="{{ route('user.login') }}">Entrar</a>
                  <a class="dropdown-item" href="{{ route('user.register') }}">Cadastrar-se</a>
                    <div class="dropdown-divider"></div>
                  @endif
                  @if(Auth::check())
                    <a class="dropdown-item" href="http://127.0.0.1:8000/profile/6">Meu Perfil</a>
                    <a class="dropdown-item" href="{{ route('user.sair') }}">Sair</a>
                  @endif
                </div>
              </li>
			  <!----------------------------------------------------------------------------------------------->
			     <li class="nav-item dropdown">
                <a class="nav-link menu dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Categorias
                </a>
                <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                 
                  
                  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>
				  <a class="dropdown-item" href="">Cadastrar-se</a>


                  
                </div>
              </li>
			  <!------------------------------------------------------------------------------------------------------->
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><br></a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="Navcont">
              <input type="text" placeholder="Pesquisar...">
              <div class="navsearch"></div>
            </div>
          </div>
        </div>
      </nav>
	     

		 <style>
        .trash-color {color: red;}
        .bt {
            width: 50%;
        }
        .upload {
            margin: 20px;
            width: 400px;
            height: 8px;
            position: relative;
        }
        .pad {
            background-image: url("{{($user->foto_capa == 'images/empty-background.jpg' ? asset($user->foto_capa) : Storage::url($user->foto_capa))}}");
        }
    </style>

    <div>
	<div class="pad2">
	<br>
            
        <div class="pad">
            <div class="text-right relative image-border"">
                <img src="{{($user->foto_perfil == 'images/empty-avatar.png' ? asset($user->foto_perfil) : Storage::url($user->foto_perfil))}}" alt="avatar">
            </div>
        </div>
        <div class="container">
            
            <div class="row my-2">
                <div class="col-lg-7 order-lg-2">
                    <h4 class="mt-2">{{ $user->nome }}</h4>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
						
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active show">Perfil</a>
                        </li>
                        </li>

                        @if($see)
                            <li class="nav-item">
                                <a href="" data-target="#edit" data-toggle="tab" class="nav-link ">Editar</a>
                            </li>
                        @endif
                        
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane active show" id="profile">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Biografia</h6>
                                    <p>
                                        {{ $user->biografia }}
                                    </p>
                                    <h6>Website</h6>
                                    <p>
                                        {{ $user->site }}
                                    </p>
                                </div>

                                <div class="col-md-12" id="colecoes">
                                    <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Coleções</h5>
                                    <table class="table table-striped">
                                    <tbody>
                                    @if(!empty($colecoes))
                                        @foreach ($colecoes as $item) 
                                            <tr>
                                                <td><a href="{{route('item-perfil.listaArte', $item->id)}}">{{ $item->nome_colecao_col }}</a></td>
                                                @if($see)
                                                    <td>
                                                            <a href="{{ route('produtos.excluirColecao',["id" => $item->id]) }}">
                                                                <svg class="bi bi-trash trash-color" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                                                                </svg>
                                                            </a>
                                                    </td>
                                                    <td>
                                                            <a  data-toggle="modal" data-target="#{{ str_replace(' ','_',$item->nome_colecao_col) }}">
                                                                <svg class="bi bi-pencil-square" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
                                                                </svg>
                                                            </a>
                                                    </td>
                                                @endif
                                                <br>
                                            </tr>                                           
                                        @endforeach
                                    @endif
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                       
                        <div class="tab-pane " id="edit">
                            <form role="form" action="{{ route('profile.atualizar') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="nome" type="text" value="{{ $user->nome }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="website" type="text" value="{{ $user->site }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Celular</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" id="CEL" type="text" name="celular" value="{{ $user->celular }}" placeholder="(00) 0000-0000">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Cpf</label>
                                    <div class="col-lg-9">
                                        <input id="CPF" class="form-control" name="cpf" type="text" value="{{ $user->cpf }}" placeholder="CPF">
                                    </div>
                                </div>
                                

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Biografia</label>
                                    <div class="col-lg-9">
                                        <textarea name="biografia" class="form-control">{{ $user->biografia }}</textarea>
                                    </div>
                                </div>

								<br>
								<hr width:60%="">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                                    <div class="col-lg-9">
										<input id="CEP" class="form-control" name="cep" type="text" value='{{ $user->cep }}' placeholder="CEP">  
										<br>
										<input class="form-control" name="endereço" type="text" value="{{ $user->endereco }}" placeholder="Nº da Residência">
										<br>
                                        <input class="form-control" name="complemento" type="text" value="{{ $user->complemento }}" placeholder="Complemento">
                                    </div>
                               </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="rua" type="text" value="{{$user->rua}}" placeholder="Rua">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" name="bairro" type="text" value="{{ $user->bairro }}" placeholder="Bairro">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" name="cidade" type="text" value="{{ $user->cidade }}" placeholder="Cidade">
                                    </div>
										<br>
                                    <div class="col-lg-3">
                                        <input class="form-control" name="estado" type="text" value="{{ $user->estado }}" placeholder="UF">
                                    </div>
                                </div>
								<br>
								<hr width:60%="">

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="uploadPic">Suba sua imagem de perfil (tamanho médio ideal 800x800)</label>
                                    <div class="col-md-4">
                                            <input id="foto_perfil" type="file" name="foto_perfil" class="input-file">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="uploadCapa">Suba sua imagem de capa</label>
                                <div class="col-md-4">
                                    <input id="foto_capa" type="file" name="foto_capa" class="input-file">
                                </div>
                                </div>
                                <div class="upload"></div>
                                <br>
                                    <button id="colecao" name="colecao" class="btn btn-primary">Finalizar edição</button>
                            </form>
                         </div>
                        </div>
                </div>

                <div class="col-lg-4 order-lg-1 text-center">
                    <div class="my-overview__request-payment">
                        <div class="tooltip tooltip--top-right">
                            <div class="tooltip__icon">
                                <object class="icon-18" data="/img/product/faq_details/questiomark.svg" type=""></object>
                            </div>
                            <div class="tooltip__text px--10 py--5" style="width: 240px;">A minimum of $50 needs to be
                                accumulated on your account to request a payment.</div>
                        </div>

                        @if($see)
                            <h4>Seu capital</h4>
                            <h3 class="card-heading  heading-3 mt--15">R$ {{$user->capital}}</h3>
                            <button id="colecao" name="colecao" class="btn btn-primary bt">Solicitar Pagamento</button>
                            <br><br>
                            <a href="{{route('item.create')}}" class="btn btn-primary bt">Cadastrar arte</a><br><br>
                        @endif

                        @if($see && $verAdm)
                            <a href="{{route('admin.index')}}" class="btn btn-primary bt">Painel de controle</a><br><br>
                        @endif

                        <a href="{{route('item-perfil.listaArteUsu', $user->id)}}" class="btn btn-primary bt">Listar todas as artes</a>
                        <br>
                        <br>
                    </div>
                </div>
               

            </div>
        </div>
		</div>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>

    <script>
        var bar = new progressBar.Line('.upload', {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#FFEA82',
            trailColor: '#eee',
            trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
            style: {
                color: 'black',
                position: 'absolute',
                right: '0',
                top: '30px',
                padding: 0,
                margin: 0,
                transform: null
            },
                autoStyleContainer: false
            },
            from: {color: '#1803ff'},
            to: {color: '##4bc4b0'},
            step: (state, bar) => {
                bar.setText(Math.round(bar.value() * 100) + ' %');
                bar.path.setAttribute('stroke', state.color);
            }
        });
        
        $('form').ajaxForm({
            success: function (data) {
                if(data['sucesso']){
                    iziToast.success({title: ':)', message: data['sucesso']});
                    window.location.reload(false);
                }
                else {
                    for(var a in data['erro']){
                        iziToast.error({title: ':(', message: data['erro'][a]}); 
                    }
                }
            },
            uploadProgress: function(event, position, total, percentComplete) {
                bar.animate(percentComplete * 0.01);
            }
        })
    </script>

        @if(session('error'))
            <script>
                iziToast.error({title: 'Erro', message: '{{ session('error') }}'});
            </script>
        @endif

        @if(session('success'))
            <script>
                iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
            </script>
        @endif

        @if(!empty($colecoes))
            @foreach($colecoes as $item)
                <div class="modal fade" id="{{ str_replace(' ','_',$item->nome_colecao_col) }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="post" action="{{ route('produtos.editarColecao',['id' => $item->id]) }}">
                        @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edição de coleção</h5>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" name="nome" value="{{ $item->nome_colecao_col }}" style="width:100%;">
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Atualizar">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
           @endforeach
        @endif

        <script> $("#CPF").mask('000.000.000-00', {reverse: true}); </script>
        <script> $("#CEL").mask('(00)00000-0000'); </script>

<script> $("#CPF").mask('000.000.000-00', {reverse: true}); </script>
<script> $("#CEL").mask('(00)0000-0000'); </script>
<script> $("#CEP").mask('00000-000'); </script>
      
    </body>
</html>