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

@section('title', 'Lista administradores')

@section('content_header')
    <center><h1>Lista administradores</h1></center> <br><br>
    
    @if(!count($user))
        <br>
        <center><h1>Não há usuários a listar</h1></center>
    @else
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Total artes</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($user as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->produto->count()}}</td>
                    <td><a href="{{route('admin.blockUsers', $item->id)}}" class="btn btn-warning btn-sm">Bloquear</a>&nbsp
                    <a href="{{route('admin.list-arts', $item->id)}}" class="btn btn-primary btn-sm">Artes</a>&nbsp
                    <a href="{{route('admin.deleteUsers', $item->id)}}" class="btn btn-danger btn-sm">Excluir</a>&nbsp
                    <form action="{{route('admin.admin', $item->id)}}" method="GET">
                        @csrf
                        @method('get')
                        <br>
                        <b>Administrador</b><br>                
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="admin" id="inlineRadio{{++$i}}" value="1" @if($item->administrador == 1 ) checked @endif  onClick="this.form.submit()">
                            <label class="form-check-label" for="inlineRadio{{$i}}"><b>Sim</b></label>
                        </div>
                          
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="admin" id="inlineRadio{{++$i}}" value="0" @if($item->administrador == 0 ) checked @endif  onClick="this.form.submit()">
                            <label class="form-check-label" for="inlineRadio{{$i}}"><b>Não</b></label>
                        </div>
                    </form>
                    
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif



    <br>
    <div class="container">
        <div class="row justify-content-sm-center">
           <div class="col-sm-4">&nbsp</div>
           <div class="col-md-auto">{{$user->links()}}</div>
           <div class="col-sm-4">&nbsp</div>        
        </div>
   </div>


@endsection