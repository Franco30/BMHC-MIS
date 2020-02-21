<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>BMHC-MIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="theme-color" content="#E91E63" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
	<link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
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
            $q2 = $conn->query("SELECT * FROM `family_planning` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]'") or die(mysqli_error());
			$f2 = $q2->fetch_array();
					?>
				<li>Transaction</li>
				<li><a href="patient_familyplanning?patient_id=<?php echo $fetch['patient_id']?>">Family Planning</a></li>
				<li>Overview</li>
				<li><mark><strong><?php echo $fetch['patient_name']?></strong></mark></li>
			</ul>
			<!-- END BREADCRUMB -->
			<!-- PAGE CONTENT WRAPPER -->
			<div class="page-content-wrap">

			<div class="row">
				<label class="hidden-header" style="display:none;">
					<br>
					<center><img src="assets/images/bmhclogo.png" style="width:131px;height:100px; padding: 10px; margin:0px 0px 0px -10px;" alt="drrmopicture" /></center>
					<!--                        <img src="assets/images/bmhc.png" style="width:131px;height:100px; padding: -10px; margin:0px 0px 0px -10px;" alt="drrmopicture" />-->
					<h3 style="margin: 0px 0px 0px 10px">
						<center>Barangay Mansilingan Health Center</center>
					</h3>
					<h4 style="margin: 0px 0px 0px 10px">
						<center>2nd Floor, Old City Hall, Luzuriaga St., Bacolod City 6100, Negros Occidental</center>
					</h4>
					<h4 style="margin: 0px 0px 0px 10px">
						<center>432-3879</center>
					</h4>
					<br>
				</label>
			</div>
				
				<div class="row">
					<div class="col-md-12">		
						<div class="panel panel-primary">
                                <div class="panel-heading print">
                                    <h3 class="panel-title"><strong>Family Planning Record</strong></h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="patient_familyplanning?patient_id=<?php echo $fetch['patient_id']?>" class="btn btn-default">Back</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <?php require 'masterfile/transactions_familyplanning.php'?>
                                </div>
                            </div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT WRAPPER -->
	</div>
	<!-- END PAGE CONTENT -->
	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
	<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
	<script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
    <script type="text/javascript" src="js/plugins/tocify/jquery.tocify.min.js"></script>
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
	<script type="text/javascript" src="js/settings.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/actions.js"></script>

	<!-- END THIS PAGE PLUGINS -->



</body>

</html>
