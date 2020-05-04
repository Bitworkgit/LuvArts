@extends('adminlte::page')

@section('title', 'Estatísticas gerais')

@section('css')
<link rel="stylesheet" href="vendor/Ionicons/css/ionicons.min.css">
@endsection

@section('js')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection
    


@section('content_header')
    <h1>Estatísticas gerais</h1>   
@endsection

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