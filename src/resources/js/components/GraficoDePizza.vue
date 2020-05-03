<template>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</template>

<script>
    export default {
        created (){
            this.init();
        },
        methods: {
            pizzaChart() {

                var data = google.visualization.arrayToDataTable(dadosDivisao);

                var options = {
                title: 'Divisão do capital'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            },
           init(){
               google.charts.load('current', {'packages':['corechart']});
               google.charts.setOnLoadCallback(this.pizzaChart);
           }
        }
    }
</script>
