<template>
        <div id="linechart" style="width: 900px; height: 500px"></div>
</template>

<script>
    export default {
        created (){
            this.init();
        },
        methods: {
           drawChart() {
                var data = google.visualization.arrayToDataTable(dados);
                var options = {
                    title: "Grafico de capital",
                    curveType: 'function',
                    legend: { position: 'bottom' }
                };
                var chart = new google.visualization.LineChart(document.getElementById('linechart'));
                chart.draw(data, options);
           },
           init(){
               google.charts.load('current', {'packages':['corechart']});
               google.charts.setOnLoadCallback(this.drawChart);
           }
        }
    }
</script>
