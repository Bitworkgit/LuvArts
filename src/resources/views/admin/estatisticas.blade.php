@extends('adminlte::page')

@section('title', 'Estatísticas gerais')

@section('css')
<link rel="stylesheet" href="vendor/Ionicons/css/ionicons.min.css">
@endsection

@section('js')
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
@endsection
    


@section('content_header')
    <h1>Estatísticas gerais</h1>   
@endsection

@section('content')
<div class="col-lg-2 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
        <center>
            <div style="width: 50%;">
                <h3 style="display: inline;">1000</h3>
                <ion-icon name="person-add" size="large" style="display: inline;"></ion-icon>
                <p>Quantidade de usuários</p>
            </div>
        </center>
      <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
@endsection