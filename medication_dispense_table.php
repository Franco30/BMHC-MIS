<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="html/favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />
    <!-- EOF CSS INCLUDE -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
	<?php require 'js/loadchart/medicines_dispensed.php'?>
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
            <ul class="breadcrumb">
                <li>Reports</li>
                <li class="active"><strong><mark>Medicines Dispensed</mark></strong></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Patients Medication Dispensation Reports</strong></h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												require 'require/config.php';
												$query = $conn->query("SELECT * FROM `medication_dispensation` group by received_by") or die(mysqli_error());
												while($fetch = $query->fetch_array()){
												?>
                                            <tr>
                                                <td><?php echo $fetch['received_by']?></td>
                                                <td>
                                                    <a href="view_drug_dispensation.php?health_center=<?php echo $fetch['health_center']?>"
                                                        class="btn btn-sm btn-default">View</a>
                                                </td>
                                            </tr>
                                            <?php
													}
													$conn->close();
												?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<?php require 'require/select_year.php'?>
								</div>
								<div class="panel-body scroll" style="height: 470px;">
									<div id="medicine" style="width: 100%; height: 425px"></div>
								</div>
							</div>
						</div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <?php require 'modals/addreferral.php'?>
        <script>
			$(document).ready(function(){
				$("#pyear").on('change', function(){
					var year=$(this).val();
					window.location = 'medication_dispense_table?year='+year;
				});
			});
		</script>
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->
</body>

</html>