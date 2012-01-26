<div id="chartdiv" style="width: 100%; height: 400px;"></div>

<script type="text/javascript">
            var chart;
            var legend;

            var chartData = [
                <?php foreach($products as $prod): ?>
                    {
                        country: "<?php echo $prod->getName() ?>",
                        value: <?php echo $prod->getQuantity() ?>
                    },
                <?php endforeach;?>
             ];

            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "value";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write("chartdiv");
            });
        </script>
        
        
        