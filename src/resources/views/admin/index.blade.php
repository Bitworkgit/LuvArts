@extends('adminlte::page')

@section('title', $user->nome)

{{-- Cabeçalho da pagina --}}
@section('content_header')
	<h1>Painel de Controle - {{$user->nome}}</h1>
@endsection

{{-- Conteudo da pagina --}}
@section('content')
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
		<div class="inner">
			<h3>44</h3>

			<p>User Registrations</p>
		</div>
		<div class="icon">
			<i class="ion ion-person-add"></i>
		</div>
		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
 	</div>
@endsection