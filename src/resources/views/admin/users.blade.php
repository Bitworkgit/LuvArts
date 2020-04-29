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
                    <a href="{{route('admin.deleteUsers', $item->id)}}" class="btn btn-danger btn-sm">Excluir</a>&nbsp
                    <form action="{{route('admin.admin')}}" method="POST">
                        @csrf
                        

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1{{$i}}" value="{{$item->id}}" @if($item->administrador == 1 ) checked @endif  onClick="this.form.submit()">
                            <label class="form-check-label" for="defaultCheck1{{$i}}">
                              <b>Administrador</b>
                            </label>
                        </div>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio{{$i}}" value="{{$item->id}}" @if($item->administrador == 1 ) checked @endif  onClick="this.form.submit()">
                            <label class="form-check-label" for="inlineRadio{{$i}}">Sim</label>
                        </div>
                          {{$i+=1}}
                          
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio{{$i}}" value="{{$item->id}}" @if($item->administrador == 1 ) checked @endif  onClick="this.form.submit()">
                            <label class="form-check-label" for="inlineRadio{{$i}}">Não</label>
                        </div>
                       
                        {{--<div>
                            <br>
                            <b>Administrador</b><br>
                            <input type="radio" id="admim1" name="admin" value="{{$item->id}}" @if($item->administrador == 1 ) checked @endif  onClick="this.form.submit()"><label for="admin1">&nbspSim</label>&nbsp&nbsp&nbsp
                            <input type="radio" id="admin2" name="admin" value="{{$item->id}}" @if($item->administrador == 1 ) checked @endif  onClick="this.form.submit()"><label for="admin2">&nbspNão</label>
                        </div>--}}
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