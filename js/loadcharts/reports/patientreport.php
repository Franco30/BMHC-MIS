<?php require 'chartqueries/patient_report.php'?>
<script type="text/javascript">
$(document).ready(function(){
var totalPatients = <?php echo $total3 ?>;
var patientsData = {
	"Active and Deceased Patient": [{
		click: patientsChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Active and Deceased Patient",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		indexLabel: "{label} {y}",
		dataPoints: [
			{ name: "Active Patient", color: "#3ce514", y: <?php echo $total['total']?> },
			{ name: "Deceased Patient", color: "#7c7f89", y: <?php echo $total2['total']?> }
		]
	}],
	"Active Patient": [{
		color: "#3ce514",
		name: "Active Patient",
		showInLegend: true, 
        legendText: "Number of Patient",
		type: "column",
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
	}],
	
	"Deceased Patient": [{
		color: "#7c7f89",
		name: "Deceased Patient",
		showInLegend: true,
		legendText: "Number of Patient",
		type: "column",
		indexLabel: "{y}",
		dataPoints: [
			{ label: "January", y: <?php echo $fjan2['total']?> },
			{ label: "February", y: <?php echo $ffeb2['total']?> },
			{ label: "March", y: <?php echo $fmar2['total']?> },
			{ label: "April", y: <?php echo $fapr2['total']?> },
			{ label: "May", y: <?php echo $fmay2['total']?> },
			{ label: "June", y: <?php echo $fjun2['total']?> },
			{ label: "July", y: <?php echo $fjul2['total']?> },
			{ label: "August", y: <?php echo $faug2['total']?> },
			{ label: "September", y: <?php echo $fsep2['total']?> },
			{ label: "October", y: <?php echo $foct2['total']?> },
			{ label: "November", y: <?php echo $fnov2['total']?> },
			{ label: "December", y: <?php echo $fdec2['total']?> }
		]
	}]
};

var patientandinfantpatientOptions = {
	animationEnabled: true,
	exportFileName: "Monthly Count - BMHC", 
	exportEnabled: true,
	theme: "light2",
	title: {
		text: "Active and Deceased Patient <?php echo $year?>",
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
chart.options.data = patientsData["Active and Deceased Patient"];
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
	chart.options.data = patientsData["Active and Deceased Patient"];
	chart.render();
});

});
</script>