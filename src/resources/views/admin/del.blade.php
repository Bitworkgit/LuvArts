@extends('adminlte::page')

@section('css')
    <x-global-css/>
@endsection

@section('title', 'Usuários excluidos')

@section('content_header')
    <center><h1>Usuários excluidos</h1></center> <br><br>
    
    @if(!count($user))
        <br>
        <center><h1>Não há usuários excluidos</h1></center>
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