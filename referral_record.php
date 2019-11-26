<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>BMHC-MIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />

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
                <?php
                require 'require/config.php';
                $query = $conn->query("SELECT * FROM `referral` WHERE `referral_id` = '$_GET[referral_id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                date_default_timezone_set('Asia/Manila');
                $date=date("F j, Y");
                    ?>
                <li>Transactions</li>
                <li>Referral Record</li>
                <li><mark><strong><?php echo $fetch['patient_name']; ?></strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div id="alert2" class="alert alert-danger" style="display:none;">
                            <center><span id="alerttext2"></span></center>
                        </div>

                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Referral Record</strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <a class="btn btn-default" href="referral"><span class="fa fa-undo"></span> Back</a>
                                        <a href="referral_print.php?referral_id=<?php echo $fetch['referral_id']?>" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Preview</a>
                                    </div>
                                </div>
                            </div>
                            <!--                            <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">-->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Patient Info. & Vital Signs</strong></h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table id="prenatal" class="table table-bordered">
                                                            <tbody>
                                                                <?php
                                require 'require/config.php';
                                $query = $conn->query("SELECT * FROM `referral` WHERE `referral_id` = '$_GET[referral_id]'") or die(mysqli_error());
                                while($fetch = $query->fetch_array()){
                                ?>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Referral Date</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['referral_date']?></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>From:</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['from_clinic']?></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>To:</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['to_hospital']?></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Origin Address:</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['origin_address']?></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Destination Address:</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['destination_address']?></center>
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
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table id="referral2" class="table table-bordered">
                                                            <tbody>
                                                                <?php
                                            require 'require/config.php';
                                            $query = $conn->query("SELECT * FROM `referral` WHERE `referral_id` = '$_GET[referral_id]'") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            ?>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Patient Name</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['patient_name']?></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Weight</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['weight']?> kg.</center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Blood Pressure</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['bp']?> mmHg</center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Temperature</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['temp']?> °C</center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Age</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['age']?> years old</center>
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
                                            <div class="panel panel-primary">
                                                <div class="panel-footer">
                                                    <h3 class="panel-title"><strong>Complaints and Etc.</strong></h3>
                                                </div>

                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table id="referral3" class="table table-bordered">
                                                            <tbody>
                                                                <?php
															require 'require/config.php';
								$query = $conn->query("SELECT * FROM `referral` WHERE `referral_id` = '$_GET[referral_id]'") or die(mysqli_error());
								while($fetch = $query->fetch_array()){
									?>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>COMPLAINTS</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['complaints']?></center>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="warning">
                                                                        <center><strong>Referred by</strong></center>
                                                                    </td>
                                                                    <td>
                                                                        <center><?php echo $fetch['referred_by']?></center>
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
                                    </div>
                                </div>
                            </div>
                            <!--                            </div>-->
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
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>

    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <!-- END THIS PAGE PLUGINS -->
</body>

</html>
