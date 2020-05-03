@extends('adminlte::page')

@section('title', 'Gerenciador de Usuários')

@section('content_header')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- <div id="linechart" style="width: 900px; height: 500px"></div> -->
    <script>
        var dados = <?php echo $dados; ?>
        dadosDivisao = <?php echo $dadosDivisao; ?>

        function pizzaChart() {

            var data = google.visualization.arrayToDataTable(dadosDivisao);

            var options = {
            title: 'Divisão do capital'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <div id="app">
        <grafico-linha></grafico-linha>
    </div>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <br>
    Capital total: R$ {{ $capital }}<br>
    Crescimento da empresa: {{ number_format($crescimento,2) }}%
    <script src="{{ asset("js/app.js") }}"></script>
@endsection