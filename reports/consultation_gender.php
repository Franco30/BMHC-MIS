<div class="stackedareamonth2 stackedcolmonth2 splinemonth2 colpatientgender reporttype">
	<?php
require 'require/config.php';
$query1 = $conn->query("select count(*) as total from `patient`, `consultation` where consultation.patient_id = patient.patient_id && consultation.gender = 'Male' && consultation.year = '$year'") or die(mysqli_error());
$fetch1 = $query1->fetch_array();

$query2 = $conn->query("select count(*) as total from `patient`, `consultation` where consultation.patient_id = patient.patient_id && consultation.gender = 'Female' && consultation.year = '$year'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$query3 = $conn->query("select count(*) as total from `patient`, `consultation` where consultation.patient_id = patient.patient_id && consultation.year = '$year'") or die(mysqli_error());
$fetch3 = $query3->fetch_array();

$percentmale = ($fetch1['total']/$fetch3['total']) * 100;
$percentfemale = ($fetch2['total']/$fetch3['total']) * 100;
?>
	<hr>
	<table class="table table-condensed">
		<thead>
			<tr class="warning">
				<th><center>Patient</center></th>
				<th><center>Jan</center></th>
				<th><center>Feb</center></th>
				<th><center>Mar</center></th>
				<th><center>Apr</center></th>
				<th><center>May</center></th>
				<th><center>June</center></th>
				<th><center>July</center></th>
				<th><center>Aug</center></th>
				<th><center>Sep</center></th>
				<th><center>Oct</center></th>
				<th><center>Nov</center></th>
				<th><center>Dec</center></th>
				<th><center>Percentage</center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="success">
				<th><center>Male</center></th>
				<td><center><?php echo $b1['total']?></center></td>
				<td><center><?php echo $b2['total']?></center></td>
				<td><center><?php echo $b3['total']?></center></td>
				<td><center><?php echo $b4['total']?></center></td>
				<td><center><?php echo $b5['total']?></center></td>
				<td><center><?php echo $b6['total']?></center></td>
				<td><center><?php echo $b7['total']?></center></td>
				<td><center><?php echo $b8['total']?></center></td>
				<td><center><?php echo $b9['total']?></center></td>
				<td><center><?php echo $b10['total']?></center></td>
				<td><center><?php echo $b11['total']?></center></td>
				<td><center><?php echo $b12['total']?></center></td>
				<td><center><strong><?php echo number_format($percentmale)?>%</strong></center></td>
			</tr>
			<tr class="info">
				<th><center>Female</center></th>
				<td><center><?php echo $d1['total']?></center></td>
				<td><center><?php echo $d2['total']?></center></td>
				<td><center><?php echo $d3['total']?></center></td>
				<td><center><?php echo $d4['total']?></center></td>
				<td><center><?php echo $d5['total']?></center></td>
				<td><center><?php echo $d6['total']?></center></td>
				<td><center><?php echo $d7['total']?></center></td>
				<td><center><?php echo $d8['total']?></center></td>
				<td><center><?php echo $d9['total']?></center></td>
				<td><center><?php echo $d10['total']?></center></td>
				<td><center><?php echo $d11['total']?></center></td>
				<td><center><?php echo $d12['total']?></center></td>
				<td><center><strong><?php echo number_format($percentfemale)?>%</strong></center></td>
			</tr>
		</tbody>
	</table>
 <?php require 'require/footerreport.php'; ?>
</div>
