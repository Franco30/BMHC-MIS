<?php require 'chartqueries/sick_forecasting.php'?>
<script type="text/javascript">
$(document).ready(function(){
var totalPatients = <?php echo $grandtotal ?>;
var patientsData = {
	"Patient and Infant Patient": [{
		click: patientsChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Patient and Infant Patient",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		indexLabel: "{label} {y}",
		dataPoints: [
			{ name: "Patient", color: "#E7823A", y: <?php echo $totala['total']?> },
			{ name: "Infant Patient", color: "#546BC1", y: <?php echo $totalb['total']?> },
			{ name: "Infant Patient", color: "#546BC1", y: <?php echo $totalc['total']?> }
		]
	}],
	"Patient": [{
		color: "#E7823A",
		name: "Patient",
		showInLegend: true, 
        legendText: "Number of Patient",
		type: "column",
		indexLabel: "{y}",
		dataPoints: [
			{ label: "January", y: <?php echo $a1['total']?> },
			 { label: "February", y: <?php echo $a1['total']?> },
			{ label: "March", y: <?php echo $a1['total']?> },
			 { label: "April", y: <?php echo $a1['total']?> },
			{ label: "May", y: <?php echo $a5['total']?> },
			 { label: "June", y: <?php echo $a6['total']?> },
			{ label: "July", y: <?php echo $a7['total']?> },
			 { label: "August", y: <?php echo $a8['total']?> },
			{ label: "September", y: <?php echo $a9['total']?> },
			 { label: "October", y: <?php echo $a10['total']?> },
			{ label: "November", y: <?php echo $a11['total']?> },
			 { label: "December", y: <?php echo $a12['total']?> }
		]
	}],
	"Infant Patient": [{
		color: "#546BC1",
		name: "Infant Patient",
		showInLegend: true,
		legendText: "Number of Infant Patient",
		type: "column",
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
	}]
};

var patientandinfantpatientOptions = {
	animationEnabled: true,
	exportFileName: "Monthly Count - BMHC", 
	exportEnabled: true,
	theme: "light2",
	title: {
		text: "Patient and Infant Patient <?php echo $year?>",
	},
	subtitles: [{
		text: "Click on Any Segment to Drilldown",
		backgroundColor: "#2eacd1",
		fontSize: 16,
		fontColor: "white",
		padding: 5
	}],
	legend: {
		fontFamily: "calibri",
		fontSize: 14,
		itemTextFormatter: function (e) {
			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalPatients * 100) + "%";
		}
	},
	data: []
};

var patientsDrilldownedChartOptions = {
	theme: "light2",
	zoomEnabled: true,
	zoomType: "x",
	panEnabled: true,
	animationEnabled: true,
	animationDuration: 1000,
	exportFileName: "Monthly Count - BMHC", 
	exportEnabled: true,
	toolTip: {
		shared: true  
	},
	subtitles:[
		{
		text: "Patients Monthly Count - Year <?php echo $year?>"
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
	data: []
};

var chart = new CanvasJS.Chart("chartContainer", patientandinfantpatientOptions);
chart.options.data = patientsData["Patient and Infant Patient"];
chart.render();

function patientsChartDrilldownHandler(e) {
	chart = new CanvasJS.Chart("chartContainer", patientsDrilldownedChartOptions);
	chart.options.data = patientsData[e.dataPoint.name];
	chart.options.title = { text: e.dataPoint.name }
	chart.render();
	$("#backButton").toggleClass("invisible");
}

$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	chart = new CanvasJS.Chart("chartContainer", patientandinfantpatientOptions);
	chart.options.data = patientsData["Patient and Infant Patient"];
	chart.render();
});

});
</script>