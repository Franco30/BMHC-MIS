<?php require 'chartqueries/sick_forecasting.php'?>
<script type="text/javascript">
$(document).ready(function(){
var totalPatients = <?php echo $grandtotal ?>;
var sickData = {
	"Sickness Monthly Count": [{
		click: sickChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Sickness Monthly Count",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		indexLabel: "{label} {y}",
		dataPoints: [
			{ name: "Allergy", color: "#f6e58d", y: <?php echo $totala['total']?> },
			{ name: "Colds and Flu", color: "#ffbe76", y: <?php echo $totalb['total']?> },
			{ name: "Conjunctivitis", color: "#ff7979", y: <?php echo $totalc['total']?> },
			{ name: "Diarrhea", color: "#eb4d4b", y: <?php echo $totald['total']?> },
			{ name: "Fever", color: "#7ed6df", y: <?php echo $totale['total']?> },
			{ name: "Headache", color: "#22a6b3", y: <?php echo $totalf['total']?> },
			{ name: "Stomach Ache", color: "#6ab04c", y: <?php echo $totalg['total']?> },
			{ name: "Others", color: "#ff7979", y: <?php echo $totalh['total']?> },

		]
	}],
	"Allergy": [{
		color: "#f6e58d",
		name: "Allergy",
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
	"Colds and Flu": [{
		color: "#ffbe76",
		name: "Colds and Flu",
		showInLegend: true,
		legendText: "Number of Patient",
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
	}],
	"Conjunctivitis": [{
		color: "#ff7979",
		name: "Conjunctivitis",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
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
	}],
	"Diarrhea": [{
		color: "#eb4d4b",
		name: "Diarrhea",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
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
	}],
	"Fever": [{
		color: "#7ed6df",
		name: "Fever",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
		indexLabel: "{y}",
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
	}],
	"Headache": [{
		color: "#22a6b3",
		name: "Headache",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
		indexLabel: "{y}",
		dataPoints: [
			{ label: "January", y: <?php echo $headache1['total']?> },
			{ label: "February", y: <?php echo $headache2['total']?> },
			{ label: "March", y: <?php echo $headache3['total']?> },
			{ label: "April", y: <?php echo $headache4['total']?> },
			{ label: "May", y: <?php echo $headache5['total']?> },
			{ label: "June", y: <?php echo $headache6['total']?> },
			{ label: "July", y: <?php echo $headache7['total']?> },
			{ label: "August", y: <?php echo $headache8['total']?> },
			{ label: "September", y: <?php echo $headache9['total']?> },
			{ label: "October", y: <?php echo $headache10['total']?> },
			{ label: "November", y: <?php echo $headache11['total']?> },
			{ label: "December", y: <?php echo $headache12['total']?> }
		]
	}],
	"Stomach Ache": [{
		color: "#6ab04c",
		name: "Stomach Ache",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
		indexLabel: "{y}",
		dataPoints: [
			{ label: "January", y: <?php echo $g1['total']?> },
			{ label: "February", y: <?php echo $g2['total']?> },
			{ label: "March", y: <?php echo $g3['total']?> },
			{ label: "April", y: <?php echo $g4['total']?> },
			{ label: "May", y: <?php echo $g5['total']?> },
			{ label: "June", y: <?php echo $g6['total']?> },
			{ label: "July", y: <?php echo $g7['total']?> },
			{ label: "August", y: <?php echo $g8['total']?> },
			{ label: "September", y: <?php echo $g9['total']?> },
			{ label: "October", y: <?php echo $g10['total']?> },
			{ label: "November", y: <?php echo $g11['total']?> },
			{ label: "December", y: <?php echo $g12['total']?> }
		]
	}],
	"Others": [{
		color: "#ff7979",
		name: "Others",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
		indexLabel: "{y}",
		dataPoints: [
			{ label: "January", y: <?php echo $h1['total']?> },
			{ label: "February", y: <?php echo $h2['total']?> },
			{ label: "March", y: <?php echo $h3['total']?> },
			{ label: "April", y: <?php echo $h4['total']?> },
			{ label: "May", y: <?php echo $h5['total']?> },
			{ label: "June", y: <?php echo $h6['total']?> },
			{ label: "July", y: <?php echo $h7['total']?> },
			{ label: "August", y: <?php echo $h8['total']?> },
			{ label: "September", y: <?php echo $h9['total']?> },
			{ label: "October", y: <?php echo $h10['total']?> },
			{ label: "November", y: <?php echo $h11['total']?> },
			{ label: "December", y: <?php echo $h12['total']?> }
		]
	}],
};

var sicknessforecastingOptions = {
	animationEnabled: true,
	exportFileName: "Monthly Count - BMHC", 
	exportEnabled: true,
	theme: "light2",
	title: {
		text: "Sickness Monthly Count <?php echo $year?>",
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

var chart = new CanvasJS.Chart("chartContainer", sicknessforecastingOptions);
chart.options.data = sickData["Sickness Monthly Count"];
chart.render();

function sickChartDrilldownHandler(e) {
	chart = new CanvasJS.Chart("chartContainer", patientsDrilldownedChartOptions);
	chart.options.data = sickData[e.dataPoint.name];
	chart.options.title = { text: e.dataPoint.name }
	chart.render();
	$("#backButton").toggleClass("invisible");
}

$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	chart = new CanvasJS.Chart("chartContainer", sicknessforecastingOptions);
	chart.options.data = sickData["Sickness Monthly Count"];
	chart.render();
});

});
</script>