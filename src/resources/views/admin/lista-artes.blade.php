@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('js')
    <script src="{{ asset("js/app.js") }}"></script>

    @if(session('success'))
        <script>
        iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
        </script>
    @endif
@endsection

@section('title', 'Lista artes do usuário')

{{-- Cabeçalho da pagina --}}
@section('content_header')
    <center><h1>Artes do usuário</h1></center> <br>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if(!count($user))
                <div class="container">
                    <div class="row justify-content-sm-center">
                    <div class="col-sm-4">&nbsp</div>
                    <div class="col-md-auto"><h1>Não há artes a listar</h1></div>
                    <div class="col-sm-4">&nbsp</div>        
                    </div>
                </div>
            @else
                @foreach ($user as $item)
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
                                    
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('ADMINISTRADOR, deseja realmente excluir a arte deste usuário?');">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Excluir</font>
                                    </font>
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
    </div>
@endsection