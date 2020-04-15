<html lang="pt" class="translated-ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="{{ asset("js/app.js") }}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('pages/profile/style.css') }}">
        <title>Artes {{$text}}</title>
    </head>

  <body>
 
    <header>
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
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">
                <font style="vertical-align: inherit;">
                    <br>
                    <font style="vertical-align: inherit;">Artes{{$text ?? ""}}</font>
                </font>
            </h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

          <h1>{{$semDados ?? ''}}</h1>
        
        @foreach ($prod as $item)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{Storage::url($item->ende_foto_pro)}}" data-holder-rendered="true">
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
                                  <font style="vertical-align: inherit;">Visualizar</font>
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

    @if(session('success'))
      <script>
        iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
      </script>
    @endif

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">De volta ao topo</font></font></a>
        </p>
      </div>
    </footer>