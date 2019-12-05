<?php require 'chartqueries/consultation.php'?>
<?php require 'chartqueries/consultation_quarterly.php'?>
<?php require 'chartqueries/consultation_purok.php'?>
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
        
        var chart4 = new CanvasJS.Chart("chartContainer4",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Children and Adult Consultation Count - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Children and Adult Consultation Count - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "column", 
                showInLegend: true, 
                legendText: "Children",
                name: "Children",
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $c10['total']?>},
                    { label: "November", y: <?php echo $c11['total']?> },
                     { label: "December", y: <?php echo $c12['total']?> }
                ] 
            },
            { 
                type: "column", 
                showInLegend: true, 
                legendText: "Adult",
                name: "Adult",
                color: "#e05850",
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
                     { label: "October", y: <?php echo $a10['total']?>},
                    { label: "November", y: <?php echo $a11['total']?> },
                     { label: "December", y: <?php echo $a12['total']?> }
                ] 
            }
        ] 
});
                var chart4_1 = new CanvasJS.Chart("chartContainer4.1",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Children and Adult Consultation Count - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Children and Adult Consultation Count - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "spline", 
                showInLegend: true, 
                legendText: "Children",
                name: "Children",
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $c10['total']?>},
                    { label: "November", y: <?php echo $c11['total']?> },
                     { label: "December", y: <?php echo $c12['total']?> }
                ] 
            },
            { 
                type: "spline", 
                showInLegend: true, 
                legendText: "Adult",
                name: "Adult",
                color: "#e05850",
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
                     { label: "October", y: <?php echo $a10['total']?>},
                    { label: "November", y: <?php echo $a11['total']?> },
                     { label: "December", y: <?php echo $a12['total']?> }
                ] 
            }
        ] 
});
                var chart4_2 = new CanvasJS.Chart("chartContainer4.2",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Children and Adult Consultation Count - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Children and Adult Consultation Count - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "stackedColumn", 
                showInLegend: true, 
                legendText: "Children",
                name: "Children",
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $c10['total']?>},
                    { label: "November", y: <?php echo $c11['total']?> },
                     { label: "December", y: <?php echo $c12['total']?> }
                ] 
            },
            { 
                type: "stackedColumn", 
                showInLegend: true, 
                legendText: "Adult",
                name: "Adult",
                color: "#e05850",
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
                     { label: "October", y: <?php echo $a10['total']?>},
                    { label: "November", y: <?php echo $a11['total']?> },
                     { label: "December", y: <?php echo $a12['total']?> }
                ] 
            }
        ] 
});
                var chart4_3 = new CanvasJS.Chart("chartContainer4.3",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Children and Adult Consultation Count - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Children and Adult Consultation Count - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "stackedArea", 
                showInLegend: true, 
                legendText: "Children",
                name: "Children",
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $c10['total']?>},
                    { label: "November", y: <?php echo $c11['total']?> },
                     { label: "December", y: <?php echo $c12['total']?> }
                ] 
            },
            { 
                type: "stackedArea", 
                showInLegend: true, 
                legendText: "Adult",
                name: "Adult",
                color: "#e05850",
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
                     { label: "October", y: <?php echo $a10['total']?>},
                    { label: "November", y: <?php echo $a11['total']?> },
                     { label: "December", y: <?php echo $a12['total']?> }
                ] 
            }
        ] 
});
            var chart5 = new CanvasJS.Chart("chartContainer5",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Male and Female Consultation - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Male and Female Consultation - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "column", 
                showInLegend: true, 
                legendText: "Male",
                name: "Male", 
                color: "#e05850",
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
                     { label: "October", y: <?php echo $b10['total']?>},
                    { label: "November", y: <?php echo $b11['total']?> },
                     { label: "December", y: <?php echo $b12['total']?> }
                ] 
            },
            { 
                type: "column", 
                showInLegend: true, 
                legendText: "Female",
                name: "Female", 
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $d10['total']?>},
                    { label: "November", y: <?php echo $d11['total']?> },
                     { label: "December", y: <?php echo $d12['total']?> }
                ] 
            }
        ] 
});
                var chart5_1 = new CanvasJS.Chart("chartContainer5.1",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Male and Female Consultation - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Male and Female Consultation - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "spline", 
                showInLegend: true, 
                legendText: "Male",
                name: "Male", 
                color: "#e05850",
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
                     { label: "October", y: <?php echo $b10['total']?>},
                    { label: "November", y: <?php echo $b11['total']?> },
                     { label: "December", y: <?php echo $b12['total']?> }
                ] 
            },
            { 
                type: "spline", 
                showInLegend: true, 
                legendText: "Female",
                name: "Female", 
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $d10['total']?>},
                    { label: "November", y: <?php echo $d11['total']?> },
                     { label: "December", y: <?php echo $d12['total']?> }
                ] 
            }
        ] 
});
                var chart5_2 = new CanvasJS.Chart("chartContainer5.2",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Male and Female Consultation - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Male and Female Consultation - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "stackedColumn", 
                showInLegend: true, 
                legendText: "Male",
                name: "Male", 
                color: "#e05850",
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
                     { label: "October", y: <?php echo $b10['total']?>},
                    { label: "November", y: <?php echo $b11['total']?> },
                     { label: "December", y: <?php echo $b12['total']?> }
                ] 
            },
            { 
                type: "stackedColumn", 
                showInLegend: true, 
                legendText: "Female",
                name: "Female", 
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $d10['total']?>},
                    { label: "November", y: <?php echo $d11['total']?> },
                     { label: "December", y: <?php echo $d12['total']?> }
                ] 
            }
        ] 
});
                var chart5_3 = new CanvasJS.Chart("chartContainer5.3",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Male and Female Consultation - BMHC", 
        exportEnabled: true,
        toolTip: {
            shared: true  
        },
        title: { 
            text: "Barangay Mansilingan Health Center",
            fontSize: 20
        },
        subtitles:[
            {
                text: "Male and Female Consultation - Year <?php echo $year?>"
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
            title: "Total Population", 
            includeZero: false,
            labelFontColor: "black",
        }, 
        data: [ 
            { 
                type: "stackedArea", 
                showInLegend: true, 
                legendText: "Male",
                name: "Male", 
                color: "#e05850",
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
                     { label: "October", y: <?php echo $b10['total']?>},
                    { label: "November", y: <?php echo $b11['total']?> },
                     { label: "December", y: <?php echo $b12['total']?> }
                ] 
            },
            { 
                type: "stackedArea", 
                showInLegend: true, 
                legendText: "Female",
                name: "Female", 
                color: "#2dbea9",
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
                     { label: "October", y: <?php echo $d10['total']?>},
                    { label: "November", y: <?php echo $d11['total']?> },
                     { label: "December", y: <?php echo $d12['total']?> }
                ] 
            }
        ] 
});
            var chart6 = new CanvasJS.Chart("chartContainer6",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
//            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

//            exportFileName: "Patient Age Consultation - BMHC", 
//            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Patient Population Consultation - Year <?php echo $year?>"
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
                title: "Total Population", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
					type: "bar",  
					color: "#2dbea9",
                    indexLabel: "{y}",
                    toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "1-10 years old", y: <?php echo $e1['total']?> },
						 { label: "11-20 years old", y: <?php echo $e2['total']?> },
						{ label: "21-30 years old", y: <?php echo $e3['total']?> },
						 { label: "31-40 years old", y: <?php echo $e4['total']?> },
						{ label: "41-50 years old", y: <?php echo $e5['total']?> },
						 { label: "51-60 years old", y: <?php echo $e6['total']?> },
						{ label: "61-70 years old", y: <?php echo $e7['total']?> },
						 { label: "71-80 years old", y: <?php echo $e8['total']?> },
						{ label: "81-90 years old", y: <?php echo $e9['total']?> },
						 { label: "91-100 years old", y: <?php echo $e10['total']?> }
					] 
				}
            ] 
        });
                var chart6_1 = new CanvasJS.Chart("chartContainer6.1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
//            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

//            exportFileName: "Patient Age Consultation - BMHC", 
//            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Patient Population Consultation - Year <?php echo $year?>"
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
                title: "Total Population", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
					type: "spline",  
					color: "#2dbea9",
                    indexLabel: "{y}",
                    toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "1-10 years old", y: <?php echo $e1['total']?> },
						 { label: "11-20 years old", y: <?php echo $e2['total']?> },
						{ label: "21-30 years old", y: <?php echo $e3['total']?> },
						 { label: "31-40 years old", y: <?php echo $e4['total']?> },
						{ label: "41-50 years old", y: <?php echo $e5['total']?> },
						 { label: "51-60 years old", y: <?php echo $e6['total']?> },
						{ label: "61-70 years old", y: <?php echo $e7['total']?> },
						 { label: "71-80 years old", y: <?php echo $e8['total']?> },
						{ label: "81-90 years old", y: <?php echo $e9['total']?> },
						 { label: "91-100 years old", y: <?php echo $e10['total']?> }
					] 
				}
            ] 
        });
                var chart6_2 = new CanvasJS.Chart("chartContainer6.2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
//            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

//            exportFileName: "Patient Age Consultation - BMHC", 
//            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Patient Population Consultation - Year <?php echo $year?>"
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
                title: "Total Population", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
					type: "column",  
					color: "#2dbea9",
                    indexLabel: "{y}",
                    toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "1-10 years old", y: <?php echo $e1['total']?> },
						 { label: "11-20 years old", y: <?php echo $e2['total']?> },
						{ label: "21-30 years old", y: <?php echo $e3['total']?> },
						 { label: "31-40 years old", y: <?php echo $e4['total']?> },
						{ label: "41-50 years old", y: <?php echo $e5['total']?> },
						 { label: "51-60 years old", y: <?php echo $e6['total']?> },
						{ label: "61-70 years old", y: <?php echo $e7['total']?> },
						 { label: "71-80 years old", y: <?php echo $e8['total']?> },
						{ label: "81-90 years old", y: <?php echo $e9['total']?> },
						 { label: "91-100 years old", y: <?php echo $e10['total']?> }
					] 
				}
            ] 
        });
                var chart6_3 = new CanvasJS.Chart("chartContainer6.3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
//            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

//            exportFileName: "Patient Age Consultation - BMHC", 
//            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Patient Population Consultation - Year <?php echo $year?>"
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
                title: "Total Population", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
					type: "stackedArea",  
					color: "#2dbea9",
                    indexLabel: "{y}",
                    toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "1-10 years old", y: <?php echo $e1['total']?> },
						 { label: "11-20 years old", y: <?php echo $e2['total']?> },
						{ label: "21-30 years old", y: <?php echo $e3['total']?> },
						 { label: "31-40 years old", y: <?php echo $e4['total']?> },
						{ label: "41-50 years old", y: <?php echo $e5['total']?> },
						 { label: "51-60 years old", y: <?php echo $e6['total']?> },
						{ label: "61-70 years old", y: <?php echo $e7['total']?> },
						 { label: "71-80 years old", y: <?php echo $e8['total']?> },
						{ label: "81-90 years old", y: <?php echo $e9['total']?> },
						 { label: "91-100 years old", y: <?php echo $e10['total']?> }
					] 
				}
            ] 
        });
            var chart7 = new CanvasJS.Chart("chartContainer7",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

            exportFileName: "Monthly Consultation Count - BMHC", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Monthly Purok Count - Year <?php echo $year?>"
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
                title: "Total Patients", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Number of Patients",
                    name: "Number of Patients",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "Prk. Gauzon", y: <?php echo $gauzon['total']?> },
                         { label: "Prk. Himaya", y: <?php echo $himaya['total']?> },
                        { label: "Prk. Kabugwason", y: <?php echo $kabugwason['total']?> },
                         { label: "Prk. kahirup A", y: <?php echo $kahirupa['total']?> },
                        { label: "Prk. Kahirup B", y: <?php echo $kahirupb['total']?> },
                         { label: "Prk. Kasilingan", y: <?php echo $kasilingan['total']?> },
                        { label: "Prk. Katilingban", y: <?php echo $katilingban['total']?> },
                         { label: "Prk. Mabinuligon", y: <?php echo $mabinuligon['total']?> },
                        { label: "Prk. Matahum", y: <?php echo $matahum['total']?> },
                         { label: "Prk. Paghidaet", y: <?php echo $paghidaet['total']?> },
                        { label: "Prk. Paglaum", y: <?php echo $paglaum['total']?> }
                    ] 
                }
            ] 
        });
                var chart7_1 = new CanvasJS.Chart("chartContainer7.1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

            exportFileName: "Monthly Purok Count - BMHC", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Monthly Purok Count - Year <?php echo $year?>"
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
                title: "Total Patients", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "bar", 
                    showInLegend: true, 
                    legendText: "Number of Patients",
                    name: "Number of Patients",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "Prk. Gauzon", y: <?php echo $gauzon['total']?> },
                         { label: "Prk. Himaya", y: <?php echo $himaya['total']?> },
                        { label: "Prk. Kabugwason", y: <?php echo $kabugwason['total']?> },
                         { label: "Prk. kahirup A", y: <?php echo $kahirupa['total']?> },
                        { label: "Prk. Kahirup B", y: <?php echo $kahirupb['total']?> },
                         { label: "Prk. Kasilingan", y: <?php echo $kasilingan['total']?> },
                        { label: "Prk. Katilingban", y: <?php echo $katilingban['total']?> },
                         { label: "Prk. Mabinuligon", y: <?php echo $mabinuligon['total']?> },
                        { label: "Prk. Matahum", y: <?php echo $matahum['total']?> },
                         { label: "Prk. Paghidaet", y: <?php echo $paghidaet['total']?> },
                        { label: "Prk. Paglaum", y: <?php echo $paglaum['total']?> }
                    ] 
                }
            ] 
        });
                var chart7_2 = new CanvasJS.Chart("chartContainer7.2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

            exportFileName: "Monthly Purok Count - BMHC", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Monthly Purok Count - Year <?php echo $year?>"
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
                title: "Total Patients", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "spline",
                    color: "#e05850",
                    showInLegend: true, 
                    legendText: "Number of Patients",
                    name: "Number of Patients",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "Prk. Gauzon", y: <?php echo $gauzon['total']?> },
                         { label: "Prk. Himaya", y: <?php echo $himaya['total']?> },
                        { label: "Prk. Kabugwason", y: <?php echo $kabugwason['total']?> },
                         { label: "Prk. kahirup A", y: <?php echo $kahirupa['total']?> },
                        { label: "Prk. Kahirup B", y: <?php echo $kahirupb['total']?> },
                         { label: "Prk. Kasilingan", y: <?php echo $kasilingan['total']?> },
                        { label: "Prk. Katilingban", y: <?php echo $katilingban['total']?> },
                         { label: "Prk. Mabinuligon", y: <?php echo $mabinuligon['total']?> },
                        { label: "Prk. Matahum", y: <?php echo $matahum['total']?> },
                         { label: "Prk. Paghidaet", y: <?php echo $paghidaet['total']?> },
                        { label: "Prk. Paglaum", y: <?php echo $paglaum['total']?> }
                    ] 
                }
            ] 
        });
                var chart7_3 = new CanvasJS.Chart("chartContainer7.3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

            exportFileName: "Monthly Purok Count - BMHC", 
            exportEnabled: true,
            toolTip: {
                shared: true  
            },
            title: { 
                text: "Barangay Mansilingan Health Center",
                fontSize: 20
            },
            subtitles:[
                {
                    text: "Monthly Purok Count - Year <?php echo $year?>"
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
                title: "Total Patients", 
                includeZero: false,
                labelFontColor: "black",
            }, 
            data: [ 
                { 
                    type: "stackedArea", 
                    color: "#e05850",
                    showInLegend: true, 
                    legendText: "Number of Patients",
                    name: "Number of Patients",
                    indexLabel: "{y}",
                    dataPoints: [ 
                        { label: "Prk. Gauzon", y: <?php echo $gauzon['total']?> },
                         { label: "Prk. Himaya", y: <?php echo $himaya['total']?> },
                        { label: "Prk. Kabugwason", y: <?php echo $kabugwason['total']?> },
                         { label: "Prk. kahirup A", y: <?php echo $kahirupa['total']?> },
                        { label: "Prk. Kahirup B", y: <?php echo $kahirupb['total']?> },
                         { label: "Prk. Kasilingan", y: <?php echo $kasilingan['total']?> },
                        { label: "Prk. Katilingban", y: <?php echo $katilingban['total']?> },
                         { label: "Prk. Mabinuligon", y: <?php echo $mabinuligon['total']?> },
                        { label: "Prk. Matahum", y: <?php echo $matahum['total']?> },
                         { label: "Prk. Paghidaet", y: <?php echo $paghidaet['total']?> },
                        { label: "Prk. Paglaum", y: <?php echo $paglaum['total']?> }
                    ] 
                }
            ] 
        });
        
                        chart4.render();
                            chart4_1.render();
                            chart4_2.render();
                            chart4_3.render();
                        chart5.render();
                            chart5_1.render();
                            chart5_2.render();
                            chart5_3.render();
                        chart6.render();
                            chart6_1.render();
                            chart6_2.render();
                            chart6_3.render();
                        chart7.render();
                            chart7_1.render();
                            chart7_2.render();
                            chart7_3.render();
    });
</script>