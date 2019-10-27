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
				size: 8.5in 13in;
				max-width: 8.5in;
			}
		}

		#print {
			width: 850px;
			height: 750px;
			overflow: hidden;
			margin: auto;
			border: 2px solid #000;
		}

	</style>
</head>
<?php
$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `referral_prenatal` WHERE `referral_id` = '$_GET[referral_id]'") or die(mysqli_error());
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
								<a href="referral_prenatal_record?referral_id=<?php echo $fetch['referral_id'] ?>" class="btn btn-default btn-sm">Back</a>
							</div>
						</div>
					</div>
					<div id="print">
						<div class="panel-body">
							<?php
								$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
								$query = $conn->query("SELECT * FROM `referral_prenatal` WHERE `referral_id` = '$_GET[referral_id]'") or die(mysqli_error());
								$fetch = $query->fetch_array();
								?>
							<center><img style="height:130px;width:160px;" src="assets/images/bmhclogo.png"> <br> <br>
								<h6><strong>Barangay Mansilingan Health Center</strong></h6>
								<p><small><strong>Brgy. Mansilingan 6100 Bacolod City</strong> <br>
										(034) 434 4098 <br>
										cho_bacolod_city@yahoo.com</small></p> <br>

								<h6 style="font-size:25px;"><strong>PRENATAL REFERRAL SLIP</strong></h6>
							</center>
							<br>
							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>DATE:</strong>&nbsp;&nbsp;<?php echo $fetch['referral_date']?></p>
							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>FROM:</strong>&nbsp;&nbsp;<strong><?php echo $fetch['from_clinic']?></strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>TO:</strong>&nbsp;&nbsp;<?php echo $fetch['to_hospital']?></p>

							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>ADDRESS:</strong>&nbsp;&nbsp;<strong><?php echo $fetch['origin_address']?></strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>ADDRESS:</strong>&nbsp;&nbsp;<?php echo $fetch['destination_address']?></p>

							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>NAME OF PATIENT:</strong>&nbsp;&nbsp;<?php echo $fetch['patient_name']?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>DESIGNATION:</strong>&nbsp;&nbsp;<?php echo $fetch['designation']?>&emsp;&emsp;</p>

							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>WT:</strong>&nbsp;&nbsp;<?php echo $fetch['weight']?> kg.&nbsp;&nbsp;&nbsp;&nbsp; <strong>BP:</strong>&nbsp;&nbsp;<?php echo $fetch['bp']?> mmHg&nbsp;&nbsp;&nbsp;&nbsp;
								<strong>TEMP:</strong>&nbsp;&nbsp;<?php echo $fetch['temp']?> °C&nbsp;&nbsp;&nbsp;&nbsp; <strong>AGE:</strong>&nbsp;&nbsp;<?php echo $fetch['age']?> yrs. old</p>

							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>G:</strong>&nbsp;&nbsp;<?php echo $fetch['gravida']?>;&nbsp;&nbsp;&nbsp;&nbsp; <strong>P:</strong>&nbsp;&nbsp;<?php echo $fetch['para']?>;&nbsp;&nbsp;&nbsp;&nbsp;
								<strong>FH:</strong>&nbsp;&nbsp;<?php echo $fetch['fh']?>;&nbsp;&nbsp;&nbsp;&nbsp; <strong>FHB:</strong>&nbsp;&nbsp;<?php echo $fetch['fhb']?>;</p>
							<br>
							<p style="font-size: 15px;margin-left: 20px;" class="text-justify"><strong>COMPLAINTS:</strong>&nbsp;&nbsp;
								<br>
								<u style="margin-left: 103px;"><?php echo $fetch['complaints']?></u></p>


							<br><br><br><br><br><br>
							<h6 class="text-center" style="margin-left:269px">
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<u style="font-size: 17px;"><?php echo  $fetch['referred_by'] ?>, RN</u></h6>
							<p class="text-center" style="margin-left:269px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								&nbsp; &nbsp; &nbsp;&nbsp;REFERRED BY</p>
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
