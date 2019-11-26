<?php require 'chartqueries/sick_forecasting.php'?>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        CanvasJS.addColorSet("customColorSet", [ 
            "#f6e58d",
            "#ffbe76", 
            "#ff7979", 
            "#eb4d4b", 
            "#7ed6df",
            "#22a6b3",
            "#6ab04c",
        ]);
        var chart1 = new CanvasJS.Chart("chartContainer1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Forecast - Barangay Mansiligan Health Center", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansiligan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Sick Forecasting Monthly Count - Year <?php echo $year?>"
                }
            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                },
                itemmouseover: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
                    e.chart.render();
                },
                itemmouseout: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
                    e.chart.render();
                }
            },
            axisX: {	
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Count", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
           
                 { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Fever",
                    name: "Fever",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $c1['total']?> },
                         { label: "February", y: <?php echo $c2['total']?> },
                        { label: "March", y: <?php echo $c3['total']?> },
                         { label: "April", y: <?php echo $c4['total']?> },
                        { label: "May", y: <?php echo $c5['total']?> },
                         { label: "June", y: <?php echo $c6['total']?> },
                        { label: "July", y: <?php echo $c7['total']?> },
                         { label: "August", y: <?php echo $c8['total']?> },
                        { label: "September", y: <?php echo $c9['total']?> },
                         { label: "October", y: <?php echo $c10['total']?> },
                        { label: "November", y: <?php echo $c11['total']?> },
                         { label: "December", y: <?php echo $c12['total']?> }
                    ] 
                 },
                 { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Headache",
                    name: "Headache",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $a1['total']?> },
                         { label: "February", y: <?php echo $a2['total']?> },
                        { label: "March", y: <?php echo $a3['total']?> },
                         { label: "April", y: <?php echo $a4['total']?> },
                        { label: "May", y: <?php echo $a5['total']?> },
                         { label: "June", y: <?php echo $a6['total']?> },
                        { label: "July", y: <?php echo $a7['total']?> },
                         { label: "August", y: <?php echo $a8['total']?> },
                        { label: "September", y: <?php echo $a9['total']?> },
                         { label: "October", y: <?php echo $a10['total']?> },
                        { label: "November", y: <?php echo $a11['total']?> },
                         { label: "December", y: <?php echo $a12['total']?> }
                    ] 
                 },
                 { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Colds",
                    name: "Colds",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $b1['total']?> },
                         { label: "February", y: <?php echo $b2['total']?> },
                        { label: "March", y: <?php echo $b3['total']?> },
                         { label: "April", y: <?php echo $b4['total']?> },
                        { label: "May", y: <?php echo $b5['total']?> },
                         { label: "June", y: <?php echo $b6['total']?> },
                        { label: "July", y: <?php echo $b7['total']?> },
                         { label: "August", y: <?php echo $b8['total']?> },
                        { label: "September", y: <?php echo $b9['total']?> },
                         { label: "October", y: <?php echo $b10['total']?> },
                        { label: "November", y: <?php echo $b11['total']?> },
                         { label: "December", y: <?php echo $b12['total']?> }
                    ] 
                },
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Allergy",
                    name: "Allergy",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $d1['total']?> },
                         { label: "February", y: <?php echo $d2['total']?> },
                        { label: "March", y: <?php echo $d3['total']?> },
                         { label: "April", y: <?php echo $d4['total']?> },
                        { label: "May", y: <?php echo $d5['total']?> },
                         { label: "June", y: <?php echo $d6['total']?> },
                        { label: "July", y: <?php echo $d7['total']?> },
                         { label: "August", y: <?php echo $d8['total']?> },
                        { label: "September", y: <?php echo $d9['total']?> },
                         { label: "October", y: <?php echo $d10['total']?> },
                        { label: "November", y: <?php echo $d11['total']?> },
                         { label: "December", y: <?php echo $d12['total']?> }
                    ] 
                }
                
            ] 
        });
        var chart2 = new CanvasJS.Chart("chartContainer2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Forecast - Barangay Mansiligan Health Center", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansiligan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Sick Forecasting Monthly Count - Year <?php echo $year?>"
                }
            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                },
                itemmouseover: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
                    e.chart.render();
                },
                itemmouseout: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
                    e.chart.render();
                }
            },
            axisX: {	
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Count", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
           
                 { 
                    type: "line", 
                    showInLegend: true, 
                    legendText: "Fever",
                    name: "Fever",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $c1['total']?> },
                         { label: "February", y: <?php echo $c2['total']?> },
                        { label: "March", y: <?php echo $c3['total']?> },
                         { label: "April", y: <?php echo $c4['total']?> },
                        { label: "May", y: <?php echo $c5['total']?> },
                         { label: "June", y: <?php echo $c6['total']?> },
                        { label: "July", y: <?php echo $c7['total']?> },
                         { label: "August", y: <?php echo $c8['total']?> },
                        { label: "September", y: <?php echo $c9['total']?> },
                         { label: "October", y: <?php echo $c10['total']?> },
                        { label: "November", y: <?php echo $c11['total']?> },
                         { label: "December", y: <?php echo $c12['total']?> }
                    ] 
                 },
                 { 
                    type: "line", 
                    showInLegend: true, 
                    legendText: "Headache",
                    name: "Headache",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $a1['total']?> },
                         { label: "February", y: <?php echo $a2['total']?> },
                        { label: "March", y: <?php echo $a3['total']?> },
                         { label: "April", y: <?php echo $a4['total']?> },
                        { label: "May", y: <?php echo $a5['total']?> },
                         { label: "June", y: <?php echo $a6['total']?> },
                        { label: "July", y: <?php echo $a7['total']?> },
                         { label: "August", y: <?php echo $a8['total']?> },
                        { label: "September", y: <?php echo $a9['total']?> },
                         { label: "October", y: <?php echo $a10['total']?> },
                        { label: "November", y: <?php echo $a11['total']?> },
                         { label: "December", y: <?php echo $a12['total']?> }
                    ] 
                 },
                 { 
                    type: "line", 
                    showInLegend: true, 
                    legendText: "Colds",
                    name: "Colds",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $b1['total']?> },
                         { label: "February", y: <?php echo $b2['total']?> },
                        { label: "March", y: <?php echo $b3['total']?> },
                         { label: "April", y: <?php echo $b4['total']?> },
                        { label: "May", y: <?php echo $b5['total']?> },
                         { label: "June", y: <?php echo $b6['total']?> },
                        { label: "July", y: <?php echo $b7['total']?> },
                         { label: "August", y: <?php echo $b8['total']?> },
                        { label: "September", y: <?php echo $b9['total']?> },
                         { label: "October", y: <?php echo $b10['total']?> },
                        { label: "November", y: <?php echo $b11['total']?> },
                         { label: "December", y: <?php echo $b12['total']?> }
                    ] 
                },
                { 
                    type: "line", 
                    showInLegend: true, 
                    legendText: "Allergy",
                    name: "Allergy",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $d1['total']?> },
                         { label: "February", y: <?php echo $d2['total']?> },
                        { label: "March", y: <?php echo $d3['total']?> },
                         { label: "April", y: <?php echo $d4['total']?> },
                        { label: "May", y: <?php echo $d5['total']?> },
                         { label: "June", y: <?php echo $d6['total']?> },
                        { label: "July", y: <?php echo $d7['total']?> },
                         { label: "August", y: <?php echo $d8['total']?> },
                        { label: "September", y: <?php echo $d9['total']?> },
                         { label: "October", y: <?php echo $d10['total']?> },
                        { label: "November", y: <?php echo $d11['total']?> },
                         { label: "December", y: <?php echo $d12['total']?> }
                    ] 
                }
                
            ] 
        });
        var chart3 = new CanvasJS.Chart("chartContainer3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Forecast - Barangay Mansiligan Health Center", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansiligan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Sick Forecasting Monthly Count - Year <?php echo $year?>"
                }
            ],
            legend: {
                cursor: "pointer",
                itemclick: function (e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    e.chart.render();
                },
                itemmouseover: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
                    e.chart.render();
                },
                itemmouseout: function(e) {
                    e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
                    e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
                    e.chart.render();
                }
            },
            axisX: {	
                interval: 1,
                labelFontColor: "black",
            },
            axisY: { 
                title: "Total Count", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
           
                 { 
                    type: "stackedColumn", 
                    showInLegend: true, 
                    legendText: "Fever",
                    name: "Fever",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $c1['total']?> },
                         { label: "February", y: <?php echo $c2['total']?> },
                        { label: "March", y: <?php echo $c3['total']?> },
                         { label: "April", y: <?php echo $c4['total']?> },
                        { label: "May", y: <?php echo $c5['total']?> },
                         { label: "June", y: <?php echo $c6['total']?> },
                        { label: "July", y: <?php echo $c7['total']?> },
                         { label: "August", y: <?php echo $c8['total']?> },
                        { label: "September", y: <?php echo $c9['total']?> },
                         { label: "October", y: <?php echo $c10['total']?> },
                        { label: "November", y: <?php echo $c11['total']?> },
                         { label: "December", y: <?php echo $c12['total']?> }
                    ] 
                 },
                 { 
                    type: "stackedColumn", 
                    showInLegend: true, 
                    legendText: "Headache",
                    name: "Headache",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $a1['total']?> },
                         { label: "February", y: <?php echo $a2['total']?> },
                        { label: "March", y: <?php echo $a3['total']?> },
                         { label: "April", y: <?php echo $a4['total']?> },
                        { label: "May", y: <?php echo $a5['total']?> },
                         { label: "June", y: <?php echo $a6['total']?> },
                        { label: "July", y: <?php echo $a7['total']?> },
                         { label: "August", y: <?php echo $a8['total']?> },
                        { label: "September", y: <?php echo $a9['total']?> },
                         { label: "October", y: <?php echo $a10['total']?> },
                        { label: "November", y: <?php echo $a11['total']?> },
                         { label: "December", y: <?php echo $a12['total']?> }
                    ] 
                 },
                 { 
                    type: "stackedColumn", 
                    showInLegend: true, 
                    legendText: "Colds",
                    name: "Colds",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $b1['total']?> },
                         { label: "February", y: <?php echo $b2['total']?> },
                        { label: "March", y: <?php echo $b3['total']?> },
                         { label: "April", y: <?php echo $b4['total']?> },
                        { label: "May", y: <?php echo $b5['total']?> },
                         { label: "June", y: <?php echo $b6['total']?> },
                        { label: "July", y: <?php echo $b7['total']?> },
                         { label: "August", y: <?php echo $b8['total']?> },
                        { label: "September", y: <?php echo $b9['total']?> },
                         { label: "October", y: <?php echo $b10['total']?> },
                        { label: "November", y: <?php echo $b11['total']?> },
                         { label: "December", y: <?php echo $b12['total']?> }
                    ] 
                },
                { 
                    type: "stackedColumn", 
                    showInLegend: true, 
                    legendText: "Allergy",
                    name: "Allergy",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "January", y: <?php echo $d1['total']?> },
                         { label: "February", y: <?php echo $d2['total']?> },
                        { label: "March", y: <?php echo $d3['total']?> },
                         { label: "April", y: <?php echo $d4['total']?> },
                        { label: "May", y: <?php echo $d5['total']?> },
                         { label: "June", y: <?php echo $d6['total']?> },
                        { label: "July", y: <?php echo $d7['total']?> },
                         { label: "August", y: <?php echo $d8['total']?> },
                        { label: "September", y: <?php echo $d9['total']?> },
                         { label: "October", y: <?php echo $d10['total']?> },
                        { label: "November", y: <?php echo $d11['total']?> },
                         { label: "December", y: <?php echo $d12['total']?> }
                    ] 
                }
                
            ] 
        });
                chart1.render();
                chart2.render();
                chart3.render();
                });

</script>