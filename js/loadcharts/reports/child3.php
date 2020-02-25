<?php require 'chartqueries/child.php'?>
<?php require 'chartqueries/child_quarterly.php'?>
<?php require 'chartqueries/child_purok.php'?>
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
        
            var chart5 = new CanvasJS.Chart("chartContainer5",{
        theme: "light2",
        zoomEnabled: true,
        zoomType: "x",
        panEnabled: true,
        colorSet: "customColorSet",
        animationEnabled: true,
        animationDuration: 1000,

        exportFileName: "Male and Female Patient - BMHC", 
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
                text: "Male and Female Child Patient - Year <?php echo $year?>"
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

        exportFileName: "Male and Female Patient - BMHC", 
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
                text: "Male and Female Child Patient - Year <?php echo $year?>"
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

        exportFileName: "Male and Female Patient - BMHC", 
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
                text: "Male and Female Child Patient - Year <?php echo $year?>"
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

        exportFileName: "Male and Female Patient - BMHC", 
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
                text: "Male and Female Child Patient - Year <?php echo $year?>"
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
            var chart7 = new CanvasJS.Chart("chartContainer7",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,

            exportFileName: "Monthly Child Patient Count - BMHC", 
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
                    text: "Child Patient Monthly Purok Count - Year <?php echo $year?>"
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

            exportFileName: "Child Patient Monthly Purok Count - BMHC", 
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
                    text: "Child Patient Monthly Purok Count - Year <?php echo $year?>"
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

            exportFileName: "Child Patient Monthly Purok Count - BMHC", 
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
                    text: "Child Patient Monthly Purok Count - Year <?php echo $year?>"
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

            exportFileName: "Child Patient Monthly Purok Count - BMHC", 
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
                    text: "Child Patient Monthly Purok Count - Year <?php echo $year?>"
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
        
                        chart5.render();
                            chart5_1.render();
                            chart5_2.render();
                            chart5_3.render();
                        chart7.render();
                            chart7_1.render();
                            chart7_2.render();
                            chart7_3.render();
    });
</script>