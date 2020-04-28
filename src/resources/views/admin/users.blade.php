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

@section('title', 'Gerenciador de Usuários')

@section('content_header')
    <center><h1>Gerenciador de Usuários</h1></center> <br><br>
    
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
                    <a href="{{route('admin.deleteUsers', $item->id)}}" class="btn btn-danger btn-sm">Excluir</a></td>
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