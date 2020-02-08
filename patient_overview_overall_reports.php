<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META SECTION -->
	<title>BMHC-MIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="theme-color" content="#E91E63" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />
	<!-- END META SECTION -->

	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
	<link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
	<!-- EOF CSS INCLUDE -->
	<link href="assets3/css/invoice-print.min.css" rel="stylesheet" />
	<style type="text/css">
		@media print {
			@page {
				margin: -40px 10px 10px 50px;
				size: letter;
			}

			.print {
				display: none !important;
			}

			.hidden-header {
				display: inline !important;
				margin: 0px 0px 0px 200px;
			}
		}

	</style>

</head>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-container page-navigation-top-fixed">
		<!-- START PAGE SIDEBAR -->
		<?php require 'require/adminsidebar.php' ?>
		<!-- END PAGE SIDEBAR -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<?php require 'require/adminheader.php' ?>
			<!-- START BREADCRUMB -->
			<ul class="breadcrumb print">
				<?php
			require 'require/config.php';
			$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$patient_id = $fetch['patient_id'];
					?>
				<li>Reports</li>
				<li><a href="patient">Patient Report</a></li>
				<li><a href="patient">Individual Patient Record</a></li>
				<li class="active"><strong><mark><?php echo $fetch['patient_name']; ?></mark></strong></li>
			</ul>

			<div class="page-content-wrap">
				<div class="row">
					<div class="invoice">
						<div class="col-md-12">
							<div id="alert" class="alert alert-info" style="display:none;">
								<center><span id="alerttext"></span></center>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading print">
									<h3 class="panel-title"><strong><?php echo $fetch['patient_name']; ?></strong></h3>
									<div class="btn-group pull-right">
										<div class="pull-left">
											<a href="patient" class="btn btn-default">Back</a>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<?php require 'masterfile/individual_patient_report.php'?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTAINER -->

	<!-- START PRELOADS -->
	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
	<!-- END PRELOADS -->

	<!-- START SCRIPTS -->
	<!-- START PLUGINS -->
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- END PLUGINS -->

	<!-- START THIS PAGE PLUGINS-->
	<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
	<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

	<script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
	<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<!-- END THIS PAGE PLUGINS-->

	<!-- START TEMPLATE -->
	<script type="text/javascript" src="js/settings.js"></script>

	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/actions.js"></script>
	<!-- END TEMPLATE -->

	<script>
		$(function() {
			var toc = $("#tocify").tocify({
				context: ".tocify-content",
				showEffect: "fadeIn",
				extendPage: false,
				selectors: "h2, h3, h4"
			});
		});

	</script>
</body>

</html>
