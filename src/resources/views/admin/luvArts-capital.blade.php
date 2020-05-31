@extends('adminlte::page')

@section('title', 'Total capital LuvArts')

@section('css')
    <link rel="stylesheet" href="{{ asset('pages/admin/equipeCapital.css') }}">
@endsection

@section('content_header')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        var dados = <?php echo $dados; ?>;
        var dadosDivisao = <?php echo $dadosDivisao; ?>;
    </script>

    <div id="app">
        <grafico-linha></grafico-linha>
        <grafico-pizza></grafico-pizza>
    </div>
    <br>
    Capital total: R$ {{ $capital }}<br>
    Crescimento da empresa: {{ number_format($crescimento,2) }}%
    <script src="{{ asset("js/app.js") }}"></script>
@endsection