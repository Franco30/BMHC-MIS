<div class="1drilldown reporttype" style="display: none;">
	<?php
require 'require/config.php';
$query1 = $conn->query("select count(*) as total from `patient` where patient.status = 'Active' && patient.year = '$year'") or die(mysqli_error());
$fetch1 = $query1->fetch_array();

$query2 = $conn->query("select count(*) as total from `patient` where patient.status = 'Deceased' && patient.year = '$year'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$query3 = $conn->query("select count(*) as total from `patient` where patient.year = '$year'") or die(mysqli_error());
$fetch3 = $query3->fetch_array();

$percentactive = ($fetch1['total']/$fetch3['total']) * 100;
$percentdeceased = ($fetch2['total']/$fetch3['total']) * 100;
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
			<?php require 'chartqueries/patient_report.php'?>
			<tr class="success">
				<th><center>Active</center></th>
				<td><center><?php echo $fjan['total']?></center></td>
				<td><center><?php echo $ffeb['total']?></center></td>
				<td><center><?php echo $fmar['total']?></center></td>
				<td><center><?php echo $fapr['total']?></center></td>
				<td><center><?php echo $fmay['total']?></center></td>
				<td><center><?php echo $fjun['total']?></center></td>
				<td><center><?php echo $fjul['total']?></center></td>
				<td><center><?php echo $faug['total']?></center></td>
				<td><center><?php echo $fsep['total']?></center></td>
				<td><center><?php echo $foct['total']?></center></td>
				<td><center><?php echo $fnov['total']?></center></td>
				<td><center><?php echo $fdec['total']?></center></td>
				<td><center><strong><?php echo number_format($percentactive)?>%</strong></center></td>
			</tr>
			<tr class="default">
				<?php require 'chartqueries/patient_report.php'?>
				<th><center>Deceased</center></th>
				<td><center><?php echo $fjan2['total']?></center></td>
				<td><center><?php echo $ffeb2['total']?></center></td>
				<td><center><?php echo $fmar2['total']?></center></td>
				<td><center><?php echo $fapr2['total']?></center></td>
				<td><center><?php echo $fmay2['total']?></center></td>
				<td><center><?php echo $fjun2['total']?></center></td>
				<td><center><?php echo $fjul2['total']?></center></td>
				<td><center><?php echo $faug2['total']?></center></td>
				<td><center><?php echo $fsep2['total']?></center></td>
				<td><center><?php echo $foct2['total']?></center></td>
				<td><center><?php echo $fnov2['total']?></center></td>
				<td><center><?php echo $fdec2['total']?></center></td>
				<td><center><strong><?php echo number_format($percentdeceased)?>%</strong></center></td>
			</tr>
		</tbody>
	</table>
  <?php
require 'require/config.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
$find = $query->fetch_array();
$query = $conn->query("SELECT count(*) as total FROM `patient` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<hr>
<h4>Total Patient for the Year <?php echo $year. ' : <strong> ' .$fetch['total'].' Patients</strong>'?></h4> <hr>
<small>Approved By:</small>
<br><br>
<h3><?php echo $find['fullname']?></h3>
<small><?php echo $find['position']?></small>
</div>