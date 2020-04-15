<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('pages/profile/style.css') }}">
   
	<script src="{{ asset('js/app.js') }}"></script>
    <title>Perfil - {{ $user->nome }}</title>
    <style>
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

</head>


<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container">
            <a href="route('home')"><img src="{{ asset('images/NAV.png')}}" width="110" class="nav-link"></a>
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

    <!-- END NAVBAR-->
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
                        <!--new item-->
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

                                <div class="col-md-12">
                                    <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Coleções</h5>
                                    <table class="table table-striped">
                                    <tbody>
                                    @if(!empty($colecoes))
                                        @foreach ($colecoes as $item) 
                                            <tr>
                                                <td><a href="{{route('item-perfil.listaArte', $item->id)}}">{{ $item->nome_colecao_col }}</a></td>
                                            </tr>                                                            
                                        @endforeach
                                    </tbody>
                                    </table>
                                    @endif
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
                                        <input class="form-control" type="text" name="celular" value="{{ $user->celular }}" placeholder="(00) 0000-0000">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Cpf</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="cpf" type="text" value="{{ $user->cpf }}" placeholder="CPF">
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
										<input class="form-control" name="cep" type="text" value='{{ $user->cep }}' placeholder="CEP">  
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
                               <!-- <object class="icon-18" data="/img/product/faq_details/questiomark.svg" type=""></object>-->
                            </div>
                            <!--<div class="tooltip__text px--10 py--5" style="width: 240px;">A minimum of $50 needs to be
                                accumulated on your account to request a payment.</div>-->
                        </div>

                        @if($see)
                            <h4>Seu capital</h4>
                            <h3 class="card-heading  heading-3 mt--15">R$ {{$user->capital}}</h3>
                            <button id="colecao" name="colecao" class="btn btn-primary bt">Solicitar Pagamento</button>
                            <br><br>
                            <a href="{{route('item.create')}}" class="btn btn-primary bt">Cadastrar arte</a><br>
                        @endif
                        <br>
                        <a href="{{route('item-perfil.listaArteUsu', $user->id)}}" class="btn btn-primary bt">Listar todas as artes</a>
                        <br>
                        <br>
                    </div>
                </div>
               

            </div>
        </div>
		</div>
    </div>

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

</body>

<footer class="py-5 background-la">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © Luv Art's 2019</p>
    </div>
</footer>

</html>