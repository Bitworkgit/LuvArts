<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('pages/profile/style.css') }}">
   
	<script src="{{ asset('js/app.js') }}"></script>
    <title>Perfil</title>
    <style>
        .pad {
            background-image: url("{{ asset($user->foto_capa)}}");
        }
    </style>

</head>


<body>
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container">
            <a href="index.html"><img src="Src/Images/NAV.png" width="110" class="nav-link"></a>
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
            <div class="text-right relative">
                <img src="{{ asset($user->foto_perfil) }}" width="180" class="img-fluid rounded-circle d-block" alt="avatar">
            </div>
        </div>
        <div class="container">
            
            <div class="row my-2">
                <div class="col-lg-8 order-lg-2">
				                <h4 class="mt-2">{{ $user->nome }}</h4>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
						
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active show">Perfil</a>
                        </li>
                        <!--new item-->
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#edit" data-toggle="tab" class="nav-link ">Editar</a>
                        </li>
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

                                </div>
                            </div>
                            <!--/row-->
                        </div>
                       
                        <div class="tab-pane " id="edit">
                            <form role="form">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nome</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->nome }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="url" value="{{ $user->site }}">
                                    </div>
                                </div>
								<br>
								<hr width:60%="">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                                    <div class="col-lg-9">
										<input class="form-control" type="text" value="" placeholder="CEP">  
										<br>
										<input class="form-control" type="text" value="" placeholder="number">
                                    </div>
                               </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" value="" placeholder="Rua">
                                    </div>

                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" value="" placeholder="City">
                                    </div>
										<br>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="text" value="" placeholder="UF">
                                    </div>
                                </div>
 
								<br>
								<hr width:60%="">

<div class="form-group">
                  <label class="col-md-4 control-label" for="uploadPic">Suba sua imagem de perfil</label>
                  <div class="col-md-4">
                    <input id="uploadArt" name="uploadArt" class="input-file" type="file">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-md-4 control-label" for="uploadCapa">Suba sua imagem de capa (tamanho ideal 851x310)</label>
                  <div class="col-md-4">
                    <input id="uploadArt" name="uploadArt" class="input-file" type="file">
                  </div>
                </div>
				<br>

                                <button id="colecao" name="colecao" class="btn btn-default">cancelar</button>
                                <button id="colecao" name="colecao" class="btn btn-primary">Finalizar edição</button>


                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 order-lg-1 text-center">
                    <div class="my-overview__request-payment">
                        <div class="tooltip tooltip--top-right">
                            <div class="tooltip__icon"><object class="icon-18"
                                    data="/img/product/faq_details/questiomark.svg" type=""></object></div>
                            <div class="tooltip__text px--10 py--5" style="width: 240px;">A minimum of $50 needs to be
                                accumulated on your account to request a payment.</div>
                        </div>
                        <p class="text">Seu capital</p>
                        <h3 class="card-heading  heading-3 mt--15">R$ {{$user->capital}}</h3><button id="colecao" name="colecao"
                            class="btn btn-primary">Solicitar Pagamento</button>
                    </div>



                </div>

            </div>
        </div>
		</div
    </div>
</body>

<footer class="py-5 background-la">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © Luv Art's 2019</p>
    </div>
</footer>

</html>