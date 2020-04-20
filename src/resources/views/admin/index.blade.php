@extends('adminlte::page')

@section('title', $user->nome)

{{-- Cabeçalho da pagina --}}
@section('content_header')
	<h1>Painel de Controle - {{$user->nome}}</h1>
@endsection

{{-- Conteudo da pagina --}}
@section('content')
	.....
@endsection