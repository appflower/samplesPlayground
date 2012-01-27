

<div id="chartContainer" style="width: 640px; height: 400px;"></div>


<script type="text/javascript">
        var chartData = [<?php foreach($products as $prod): ?>
        {
            name: "<?php echo $prod->getName() ?>",
            value: <?php echo $prod->getQuantity() ?>
        },
    <?php endforeach;?>];


        window.onload = function () {
            var chart = new AmCharts.AmSerialChart();
            chart.dataProvider = chartData;
            chart.categoryField = "name";
            chart.marginTop = 15;
            chart.marginLeft = 55;
            chart.marginRight = 15;
            chart.marginBottom = 80;
            chart.angle = 30;
            chart.depth3D = 15;

            var catAxis = chart.categoryAxis;
            catAxis.gridCount = chartData.length;
            catAxis.labelRotation = 90;

            var graph = new AmCharts.AmGraph();
            graph.balloonText = "[[category]]: [[value]]";
            graph.valueField = "value"
            graph.type = "column";
            graph.lineAlpha = 0;
            graph.fillAlphas = 0.8;
            chart.addGraph(graph);

            chart.write('chartContainer');
        }
    </script>