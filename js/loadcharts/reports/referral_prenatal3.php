<?php require 'chartqueries/referral_prenatal.php'?>
<?php require 'chartqueries/referral_prenatal_quarterly.php'?>
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
                    text: "Patient Population Referral Prenatal - Year <?php echo $year?>"
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
                    text: "Patient Population Referral Prenatal - Year <?php echo $year?>"
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
                    text: "Patient Population Referral Prenatal - Year <?php echo $year?>"
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
                    text: "Patient Population Referral Prenatal - Year <?php echo $year?>"
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

                        chart6.render();
                            chart6_1.render();
                            chart6_2.render();
                            chart6_3.render();
    });
</script>