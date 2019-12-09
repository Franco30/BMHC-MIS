<div class="stackedareamonth3 stackedcolumn3 splinemonth3 colpatientmethod reporttype" style="display: none;">
	<?php
require 'require/config.php';
$query1 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.year = '$year'") or die(mysqli_error());
$fetch1 = $query1->fetch_array();

$query2 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.year = '$year'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();
	
$query3 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.year = '$year'") or die(mysqli_error());
$fetch3 = $query3->fetch_array();

$query4 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.year = '$year'") or die(mysqli_error());
$fetch4 = $query4->fetch_array();

$percentcoc = ($fetch1['total']/$fetch4['total']) * 100;
$percentcondom = ($fetch2['total']/$fetch4['total']) * 100;
$percentiud = ($fetch3['total']/$fetch4['total']) * 100;
?>
	<hr>
	<table class="table table-condensed">
		<thead>
			<tr class="warning">
				<th><center>Method</center></th>
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
				<th><center>COC</center></th>
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
				<td><center><strong><?php echo number_format($percentcoc)?>%</strong></center></td>
			</tr>
			<tr class="info">
				<th><center>Condom</center></th>
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
				<td><center><strong><?php echo number_format($percentcondom)?>%</strong></center></td>
			</tr>
			<tr class="danger">
				<th><center>IUD</center></th>
				<td><center><?php echo $e1['total']?></center></td>
				<td><center><?php echo $e2['total']?></center></td>
				<td><center><?php echo $e3['total']?></center></td>
				<td><center><?php echo $e4['total']?></center></td>
				<td><center><?php echo $e5['total']?></center></td>
				<td><center><?php echo $e6['total']?></center></td>
				<td><center><?php echo $e7['total']?></center></td>
				<td><center><?php echo $e8['total']?></center></td>
				<td><center><?php echo $e9['total']?></center></td>
				<td><center><?php echo $e10['total']?></center></td>
				<td><center><?php echo $e11['total']?></center></td>
				<td><center><?php echo $e12['total']?></center></td>
				<td><center><strong><?php echo number_format($percentiud)?>%</strong></center></td>
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
$query = $conn->query("SELECT count(*) as total FROM `family_planning` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<hr>
<h4>Total Family Planning for the Year <?php echo $year. ' : <strong> ' .$fetch['total'].' Patients</strong>'?></h4> <hr>
<small>Approved By:</small>
<br><br>
<h3><?php echo $find['fullname']?></h3>
<small><?php echo $find['position']?></small>
</div>
