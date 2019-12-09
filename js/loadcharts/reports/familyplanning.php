<?php require 'chartqueries/familyplanning.php'?>
<?php require 'chartqueries/familyplanning_quarterly.php'?>
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

            exportFileName: "Monthly Family Planning Count - BMHC", 
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
                    text: "Monthly Patient Count - Year <?php echo $year?>"
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
                        { label: "January", y: <?php echo $fjan['total']?> },
                         { label: "February", y: <?php echo $ffeb['total']?> },
                        { label: "March", y: <?php echo $fmar['total']?> },
                         { label: "April", y: <?php echo $fapr['total']?> },
                        { label: "May", y: <?php echo $fmay['total']?> },
                         { label: "June", y: <?php echo $fjun['total']?> },
                        { label: "July", y: <?php echo $fjul['total']?> },
                         { label: "August", y: <?php echo $faug['total']?> },
                        { label: "September", y: <?php echo $fsep['total']?> },
                         { label: "October", y: <?php echo $foct['total']?> },
                        { label: "November", y: <?php echo $fnov['total']?> },
                         { label: "December", y: <?php echo $fdec['total']?> }
                    ] 
                }
            ] 
        });
        var chart2 = new CanvasJS.Chart("chartContainer2",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Quarterly Family Planning Count - BMHC", 
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
                    text: "Quarterly Patient Count - Year <?php echo $year?>"
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
                    //    markerType: "cross",
                    // color: "#0173c4",
                    dataPoints: [ 
                        { label: "Quarter 1", y: <?php echo $q1['total']?> },
                         { label: "Quarter 2", y: <?php echo $q2['total']?> },
                        { label: "Quarter 3", y: <?php echo $q3['total']?> },
                         { label: "Quarter 4", y: <?php echo $q4['total']?> }
                    ] 
                }
            ] 
        });
        var chart3 = new CanvasJS.Chart("chartContainer3",{
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            colorSet: "customColorSet",
            exportFileName: "Yearly Family Planning Patient Count - BMHC", 
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
                    text: "Yearly Patient Count <?php echo $year?>"
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
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label} <br/> {y}", 
                    indexLabel: "{y}", 
                    showInLegend: true,
                    legendText: "{label}",
                    dataPoints: <?php echo json_encode($data_points3); ?>
                }
                    ] 
                });
                
//                showDefaultText1(chart1, "No Data available");
//                showDefaultText2(chart2, "No Data available");
//                showDefaultText3(chart3, "No Data available");
                chart1.render();
                chart2.render();
                chart3.render();
                
//                function showDefaultText1(chart1, text) {
//
//			var isEmpty = !(chart1.options.data[0].dataPoints && chart1.options.data[0].dataPoints.length > 0);
//
//			if (!chart1.options.subtitles)
//				(chart1.options.subtitles = []);
//
//			if (isEmpty)
//				chart1.options.subtitles.push({
//					text: text,
//					verticalAlign: 'center',
//                    fontSize: 20,
//				});
//			else
//				(chart1.options.subtitles = []);
//		}
//                function showDefaultText2(chart2, text) {
//
//			var isEmpty = !(chart2.options.data[0].dataPoints && chart2.options.data[0].dataPoints.length > 0);
//
//			if (!chart2.options.subtitles)
//				(chart2.options.subtitles = []);
//
//			if (isEmpty)
//				chart2.options.subtitles.push({
//					text: text,
//					verticalAlign: 'center',
//                    fontSize: 20,
//				});
//			else
//				(chart2.options.subtitles = []);
//		}
//                function showDefaultText3(chart3, text) {
//
//			var isEmpty = !(chart3.options.data[0].dataPoints && chart3.options.data[0].dataPoints.length > 0);
//
//			if (!chart3.options.subtitles)
//				(chart3.options.subtitles = []);
//
//			if (isEmpty)
//				chart3.options.subtitles.push({
//					text: text,
//					verticalAlign: 'center',
//                    fontSize: 20,
//				});
//			else
//				(chart3.options.subtitles = []);
//		}
    });
</script>
