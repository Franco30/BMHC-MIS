<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

require 'require/config.php';
$res = $conn->query("SELECT * FROM `medicine` GROUP BY medicine_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$R = $result['medicine_name'];
	$q1 = $conn->query("SELECT *, sum(quantity) as total FROM `medicine`, `medication_dispensation` WHERE medicine.medicine_id = medication_dispensation.medicine_id && medicine.medicine_name = '$R' && `year` = '$year'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['total']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script type="text/javascript">
	$(document).ready(function() {
		CanvasJS.addColorSet("customColorSet", [
			"#f6e58d",
			"#ffbe76",
			"#ff7979",
			"#eb4d4b",
			"#7ed6df",
			"#22a6b3",
			"#6ab04c",
		]);
		var chart1 = new CanvasJS.Chart("chartContainer2", {
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "Monthly Population",
			exportEnabled: true,
			toolTip: {
				shared: true
			},
			title: {
				text: "Barangay Mansilingan Health Center",
				fontSize: 20
			},
			subtitles: [{
				text: "Total Dispensed Medicines - Year <?php echo $year?>"
			}],
			legend: {
				cursor: "pointer",
				itemclick: function(e) {
					if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
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
				labelFontSize: 8,
			},
			axisY: {
				//title: "Stocks Remaining", 
				labelFontColor: "black",
			},
			data: [{
				type: "column",
				toolTipContent: "{label} <br/> {y} pcs.",
				indexLabel: "{y} pcs.",
				//legendText: "<?php echo $f1['medicine_name']?>",
				//					name: "Total Patients this year",
				dataPoints: <?php echo json_encode($data_points); ?>
			}]
		});
		var chart2 = new CanvasJS.Chart("chartContainer3", {
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "Monthly Population",
			exportEnabled: true,
			toolTip: {
				shared: true
			},
			title: {
				text: "Barangay Mansilingan Health Center",
				fontSize: 20
			},
			subtitles: [{
				text: "Total Dispensed Medicines - Year <?php echo $year?>"
			}],
			legend: {
				cursor: "pointer",
				itemclick: function(e) {
					if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
			},
			axisX: {
				interval: 1,
				gridDashType: "dot",
				gridThickness: 1,
				labelFontColor: "black",
				crosshair: {
					enabled: true
				}
			},
			axisY: {
				//title: "Stocks Remaining", 
				labelFontColor: "black",
				crosshair: {
					enabled: true
				}
			},
			data: [{
				type: "pie",
				startAngle: 240,
				radius: 100,
				toolTipContent: "{label} <br/> {y} pcs.",
				indexLabel: "{label} {y} pcs.",
				//legendText: "<?php echo $f1['medicine_name']?>",
				//					name: "Total Patients this year",
				dataPoints: <?php echo json_encode($data_points); ?>
			}]
		});
		var chart3 = new CanvasJS.Chart("chartContainer4", {
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "Monthly Population",
			exportEnabled: true,
			toolTip: {
				shared: true
			},
			title: {
				text: "Barangay Mansilingan Health Center",
				fontSize: 20
			},
			subtitles: [{
				text: "Total Dispensed Medicines - Year <?php echo $year?>"
			}],
			legend: {
				cursor: "pointer",
				itemclick: function(e) {
					if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
			},
			axisX: {
				interval: 1,
				labelFontColor: "black",
			},
			axisY: {
				//title: "Stocks Remaining", 
				labelFontColor: "black",
			},
			data: [{
				type: "bar",
				indexLabel: "{y} pcs.",
				toolTipContent: "{label} <br/> {y} pcs.",
				//legendText: "<?php echo $f1['medicine_name']?>",
				//					name: "Total Patients this year",
				dataPoints: <?php echo json_encode($data_points); ?>
			}]
		});
		var chart4 = new CanvasJS.Chart("chartContainer5", {
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "Monthly Population",
			exportEnabled: true,
			toolTip: {
				shared: true
			},
			title: {
				text: "Barangay Mansilingan Health Center",
				fontSize: 20
			},
			subtitles: [{
				text: "Total Dispensed Medicines - Year <?php echo $year?>"
			}],
			legend: {
				cursor: "pointer",
				itemclick: function(e) {
					if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
			},
			axisX: {
				interval: 1,
				labelFontColor: "black",
			},
			axisY: {
				//title: "Stocks Remaining", 
				labelFontColor: "black",
			},
			data: [{
				type: "line",
				indexLabel: "{y} pcs.",
				toolTipContent: "{label} <br/> {y} pcs.",
				//legendText: "<?php echo $f1['medicine_name']?>",
				//					name: "Total Patients this year",
				dataPoints: <?php echo json_encode($data_points); ?>
			}]
		});
		var chart5 = new CanvasJS.Chart("chartContainer6", {
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			exportFileName: "Monthly Population",
			exportEnabled: true,
			toolTip: {
				shared: true
			},
			title: {
				text: "Barangay Mansilingan Health Center",
				fontSize: 20
			},
			subtitles: [{
				text: "Total Dispensed Medicines - Year <?php echo $year?>"
			}],
			legend: {
				cursor: "pointer",
				itemclick: function(e) {
					if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
			},
			axisX: {
				interval: 1,
				labelFontColor: "black",
			},
			axisY: {
				//title: "Stocks Remaining", 
				labelFontColor: "black",
			},
			data: [{
				type: "doughnut",
				startAngle: 240,
				radius: 100,
				indexLabel: "{label} {y} pcs.",
				toolTipContent: "{label} <br/> {y} pcs.",
				//legendText: "<?php echo $f1['medicine_name']?>",
				//					name: "Total Patients this year",
				dataPoints: <?php echo json_encode($data_points); ?>
			}]
		});

		chart1.render();
		chart2.render();
		chart3.render();
		chart4.render();
		chart5.render();

//		showDefaultText1(chart1, "No Data available");	   
//		function showDefaultText1(chart1, text) {
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
//				});
//			else
//				(chart1.options.subtitles = []);
//		}
	});

</script>
