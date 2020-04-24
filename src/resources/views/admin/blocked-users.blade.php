@extends('adminlte::page')

@section('title', 'Gerenciador de Usuários')

@section('content_header')
    <center><h1>Gerenciador de Usuários</h1></center> <br><br>
    @if(count($user))
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Total artes</th>
                <th scope="col"></th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <center><h1>Nenhum usuário foi bloqueado.</h1></center>
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