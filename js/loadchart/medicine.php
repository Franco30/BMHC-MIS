<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
$res = $conn->query("SELECT * FROM `medicine` GROUP BY medicine_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$R = $result['medicine_name'];
	$q1 = $conn->query("SELECT * FROM `medicine` WHERE `medicine_name` = '$R'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['running_balance']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script type="text/javascript"> 
	window.onload = function(){
		CanvasJS.addColorSet("customColorSet", [ 
			"#393f63",
			"#e5d8B0", 
			"#ffb367", 
			"#f98461", 
			"#d9695f",
			"#e05850",
			"#7E8F74",
		]);
		$("#medicine").CanvasJSChart({
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
					text: "Medicines Remaining Stocks - Year <?php echo $year?>"
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
					type: "bar", 
					//showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					//legendText: "<?php echo $f1['medicine_name']?>",
					//name: "Total Patients this year",
					dataPoints: <?php echo json_encode($data_points); ?>
				}
					] 
				}); 
				}
</script>