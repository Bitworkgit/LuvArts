@extends('adminlte::page')

@section('title', 'Usuários bloqueados')

@section('content_header')
    <center><h1>Usuários bloqueados</h1></center> <br><br>

    <script src="{{ asset("js/app.js") }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @if(session('success'))
        <script>
            iziToast.success({title: 'Parabéns', message: '{{ session('success') }}'});
        </script>
    @endif

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
                <form id="{{$item->nome}}-excluir" action="{{route('admin.deletarUsuario', $item->id)}}" method="POST"> @csrf @method('PUT') </form>
                <form id="{{$item->nome}}-desbloquear" action="{{route('admin.desbloquearUsuario', $item->id)}}" method="POST"> @csrf @method('PUT') </form>
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->produto->count()}}</td>
                    <td><button style="color: white;" type="submit" form="{{$item->nome}}-excluir" class="btn btn-danger btn-sm">Excluir</button>&nbsp
                        <button style="color: white;" type="submit" form="{{$item->nome}}-desbloquear" class="btn btn-success btn-sm">Desbloquear</button></td>
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