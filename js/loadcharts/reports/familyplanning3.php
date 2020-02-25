<?php require 'chartqueries/familyplanning_quarterly.php'?>
<?php require 'chartqueries/familyplanning_purok.php'?>
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
        
            var chart6 = new CanvasJS.Chart("chartContainer6",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Patient Method Accepted Consultation - BMHC", 
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
                    text: "Patient Population Family Planning - Year <?php echo $year?>"
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
                    legendText: "COC",
                    name: "COC", 
					color: "#2dbea9",
                    indexLabel: "{y}",
//                    toolTipContent: "{label}: {y}", 
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
                    legendText: "Condom",
                    name: "Condom", 
                    color: "#e05850",
                    indexLabel: "{y}",     
//                    toolTipContent: "{label}: {y}", 
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
				},
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "IUD",
                    name: "IUD", 
                    color: "#e58d16",
                    indexLabel: "{y}",     
//                    toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $e1['total']?> },
						 { label: "February", y: <?php echo $e2['total']?> },
						{ label: "March", y: <?php echo $e3['total']?> },
						 { label: "April", y: <?php echo $e4['total']?> },
						{ label: "May", y: <?php echo $e5['total']?> },
						 { label: "June", y: <?php echo $e6['total']?> },
						{ label: "July", y: <?php echo $e7['total']?> },
						 { label: "August", y: <?php echo $e8['total']?> },
						{ label: "September", y: <?php echo $e9['total']?> },
						 { label: "October", y: <?php echo $e10['total']?> },
                        { label: "November", y: <?php echo $e11['total']?> },
                        { label: "December", y: <?php echo $e12['total']?> }
					] 
				}
            ] 
        });
                var chart6_1 = new CanvasJS.Chart("chartContainer6.1",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Patient Method Accepted Consultation - BMHC", 
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
                    text: "Patient Population Family Planning - Year <?php echo $year?>"
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
                    legendText: "COC",
                    name: "COC", 
					color: "#2dbea9",
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
                    legendText: "Condom",
                    name: "Condom", 
                    color: "#e05850",
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
				},
                { 
                    type: "stackedColumn", 
                    showInLegend: true, 
                    legendText: "IUD",
                    name: "IUD", 
                    color: "#e58d16", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $e1['total']?> },
						 { label: "February", y: <?php echo $e2['total']?> },
						{ label: "March", y: <?php echo $e3['total']?> },
						 { label: "April", y: <?php echo $e4['total']?> },
						{ label: "May", y: <?php echo $e5['total']?> },
						 { label: "June", y: <?php echo $e6['total']?> },
						{ label: "July", y: <?php echo $e7['total']?> },
						 { label: "August", y: <?php echo $e8['total']?> },
						{ label: "September", y: <?php echo $e9['total']?> },
						 { label: "October", y: <?php echo $e10['total']?> },
                        { label: "November", y: <?php echo $e11['total']?> },
                        { label: "December", y: <?php echo $e12['total']?> }
					] 
				}
            ] 
        });
                var chart6_2 = new CanvasJS.Chart("chartContainer6.2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Patient Method Accepted Consultation - BMHC", 
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
                    text: "Patient Population Family Planning - Year <?php echo $year?>"
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
                    legendText: "COC",
                    name: "COC", 
					color: "#2dbea9",
                    indexLabel: "{y}",
//                    toolTipContent: "{label}: {y}", 
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
                    type: "spline", 
                    showInLegend: true, 
                    legendText: "Condom",
                    name: "Condom", 
                    color: "#e05850",
                    indexLabel: "{y}",     
//                    toolTipContent: "{label}: {y}", 
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
				},
                { 
                    type: "spline", 
                    showInLegend: true, 
                    legendText: "IUD",
                    name: "IUD", 
                    color: "#e58d16",
                    indexLabel: "{y}",     
//                    toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $e1['total']?> },
						 { label: "February", y: <?php echo $e2['total']?> },
						{ label: "March", y: <?php echo $e3['total']?> },
						 { label: "April", y: <?php echo $e4['total']?> },
						{ label: "May", y: <?php echo $e5['total']?> },
						 { label: "June", y: <?php echo $e6['total']?> },
						{ label: "July", y: <?php echo $e7['total']?> },
						 { label: "August", y: <?php echo $e8['total']?> },
						{ label: "September", y: <?php echo $e9['total']?> },
						 { label: "October", y: <?php echo $e10['total']?> },
                        { label: "November", y: <?php echo $e11['total']?> },
                        { label: "December", y: <?php echo $e12['total']?> }
					] 
				}
            ] 
        });
                var chart6_3 = new CanvasJS.Chart("chartContainer6.3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            colorSet: "customColorSet",
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Patient Method Accepted Consultation - BMHC", 
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
                    text: "Patient Population Family Planning - Year <?php echo $year?>"
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
                    legendText: "COC",
                    name: "COC", 
					color: "#2dbea9",
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
                    type: "stackedArea", 
                    showInLegend: true, 
                    legendText: "Condom",
                    name: "Condom", 
                    color: "#e05850",
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
				},
                { 
                    type: "stackedArea", 
                    showInLegend: true, 
                    legendText: "IUD",
                    name: "IUD", 
                    color: "#e58d16", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $e1['total']?> },
						 { label: "February", y: <?php echo $e2['total']?> },
						{ label: "March", y: <?php echo $e3['total']?> },
						 { label: "April", y: <?php echo $e4['total']?> },
						{ label: "May", y: <?php echo $e5['total']?> },
						 { label: "June", y: <?php echo $e6['total']?> },
						{ label: "July", y: <?php echo $e7['total']?> },
						 { label: "August", y: <?php echo $e8['total']?> },
						{ label: "September", y: <?php echo $e9['total']?> },
						 { label: "October", y: <?php echo $e10['total']?> },
                        { label: "November", y: <?php echo $e11['total']?> },
                        { label: "December", y: <?php echo $e12['total']?> }
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
                    text: "Family Planning Monthly Purok Count - Year <?php echo $year?>"
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

            exportFileName: "Family Planning Monthly Purok Count - BMHC", 
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
                    text: "Family Planning Monthly Purok Count - Year <?php echo $year?>"
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

            exportFileName: "Family Planning Monthly Purok Count - BMHC", 
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
                    text: "Family Planning Monthly Purok Count - Year <?php echo $year?>"
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

            exportFileName: "Family Planning Monthly Purok Count - BMHC", 
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
                    text: "Family Planning Monthly Purok Count - Year <?php echo $year?>"
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