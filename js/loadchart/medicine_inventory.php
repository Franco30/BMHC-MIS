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
	$q1 = $conn->query("SELECT *, sum(running_balance) as total FROM `medicine` WHERE `medicine_name` = '$R'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['total']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script type="text/javascript"> 
	$(document).ready(function(){ 
		CanvasJS.addColorSet("customColorSet", [ 
			"#393f63",
			"#e5d8B0", 
			"#ffb367", 
			"#f98461", 
			"#d9695f",
			"#e05850",
			"#7E8F74",
		]);
		var chart1 = new CanvasJS.Chart("medicine",{
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			colorSet: "customColorSet",
			//exportFileName: "Monthly Population", 
			//exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Barangay Mansilingan Health Center",
				fontSize: 20
			},
			subtitles:[
				{
					text: "Medicine Current Stocks - Year <?php echo $year?>"
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
			data: [ 
				{ 
					type: "pie", 
					startAngle: 240,
					radius: 80,
					toolTipContent: "{label} <br/> {y} pcs.", 
					indexLabel: "{label} {y} pcs.", 
					//legendText: "<?php echo $f1['medicine_name']?>",
					//name: "Total Patients this year",
					dataPoints: <?php echo json_encode($data_points); ?>
				}
					] 
				}); 
				
				chart1.render();
			});
</script>