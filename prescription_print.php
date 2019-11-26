<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html>

<head>
	<!-- META SECTION -->
	<title>BMHC-MIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />
	<!-- END META SECTION -->
	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
	<style>
		@media print {
			@page {
				size: 8.5in 11in;
				max-width: 8.5in;
			}
		}

		#print {
			width: 850px;
			height: 1100px;
			overflow: hidden;
			margin: auto;
			border: 2px solid #000;
		}


	</style>
</head>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<!-- START TEXT ELEMENTS -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="btn-group pull-right">
							<div class="pull-left">
								<button class="btn btn-default btn-sm" onclick="printContent('print')"><span class="glyphicon glyphicon-print"></span> Print</button>
								<a href="consultation_treatment?patient_id=<?php echo $fetch['patient_id'] ?>&&consultation_id=<?php echo $fetch['consultation_id'] ?>" class="btn btn-default btn-sm">Back</a>
							</div>
						</div>
					</div>
					<div id="print">
						<div class="panel-body">
							<?php
								require 'require/config.php';
								$query = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
								$fetch = $query->fetch_array();
								$query2 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
								$fetch2 = $query2->fetch_array();
								$query3 = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
								$fetch3 = $query3->fetch_array();
								$query4 = $conn->query("SELECT * FROM `consultation_prescription` NATURAL JOIN `users` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
								$fetch4 = $query4->fetch_array();
								?>
							<center><img style="height:100px;width:130px;" src="assets/images/bmhclogo.png"> <br> <br>
								<h6><strong>Barangay Mansilingan Health Center</strong></h6>
								<p><small><strong>Brgy. Mansilingan 6100 Bacolod City</strong> <br>
										(034) 434 4098 <br>
										brgymansilingan@yahoo.com</small></p> <br>

								<h6 style="font-size:25px;"><strong>PRESCRIPTION PAD</strong></h6>
							</center>
							<br>
							<p style="font-size: 14px;margin-left: 20px;" class="text-justify"><strong>PATIENT NAME:</strong>&nbsp;&nbsp;<?php echo $fetch2['patient_name']?>&emsp;&emsp;<strong>AGE:</strong>&nbsp;&nbsp;<?php echo $fetch2['age']?>&emsp;&emsp;<strong>GENDER:</strong>&nbsp;&nbsp;<?php echo $fetch2['gender']?>&emsp;&emsp;<strong>AGE:</strong>&nbsp;&nbsp;<?php echo $fetch2['age']?>&emsp;&emsp;<strong>DATE:</strong>&nbsp;&nbsp;<?php echo $fetch['date']?></p>

							<br>

							<table id="prescriptiontable" class="table table-bordered" style="width: 92%;margin-left: 33px;">
								<thead>
									<tr class="warning">
										<th><center>Medicine Category</center></th>
										<th><center>Medication & Dosage</center></th>
										<th><center>6 <br> (AM)</center></th>
										<th><center>8 <br> (AM)</center></th>
										<th><center>12 <br> (NN)</center></th>
										<th><center>2 <br> (PM)</center></th>
										<th><center>4 <br> (PM)</center></th>
										<th><center>6 <br> (PM)</center></th>
										<th><center>8 <br> (PM)</center></th>
										<th><center>Quantity</center></th>
										<th><center>Recommendation</center></th>
									</tr>
								</thead>
								<tbody>
									<?php
$query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
									<tr>
										<td><center><strong><?php echo $fetch['medicine_category']?></strong></center></td>
										<td><center><strong><?php echo $fetch['medname']?></strong></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['6am']?></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['8am']?></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['12nn']?></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['2pm']?></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['4pm']?></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['6pm']?></center></td>
										<td style="font-weight: bold;"><center><?php echo $fetch['8pm']?></center></td>
										<td><center><?php echo $fetch['qty']?></center></td>
										<td><center><?php echo $fetch['recommendation']?></center></td>
									</tr>
									<?php
									}
									$conn->close();
									?>
								</tbody>
							</table>


							<br><br><br><br>
							<h6 class="text-center" style="margin-left:269px">
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u style="font-size: 17px;"><?php echo  $fetch4['fullname'] ?>, M.D.</u></h6>
							<p class="text-center" style="margin-left:269px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<strong>License No:</strong>&nbsp;<u style="font-size: 14px"><?php echo  $fetch4['license'] ?></u></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function printContent(el) {
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}

	</script>
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
	<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
	<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
	<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
</body>

</html>
