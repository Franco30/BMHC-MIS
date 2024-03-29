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
    <link rel="stylesheet" type="text/css" href="js/sweetalertjs/sweetalert2.min.css" />

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
        $query = $conn->query("SELECT * FROM `patient_child`, `immunization` WHERE `patient_child`.`child_id`= '$_GET[child_id]' && `immunization`.`immunization_id` = '$_GET[immunization_id]'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $q2 = $conn->query("SELECT * FROM `immunization` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
        $f2 = $q2->fetch_array();
        date_default_timezone_set('Asia/Manila');
        $date=date("F j, Y");
        ?>
                <li>Transactions</li>
                <li><a href="immunization_table">Immunization</a></li>
                <li>Immunization Treatment</li>
                <li><mark><strong><?php echo $fetch['child_name']?></strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Treatment 1</a>
                                </li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Treatment 2</a>
                                </li>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#end_treatment<?php echo $f2['immunization_id'];?>">End Treatment</button>
                                        <a href="immunization_table" class="btn btn-default">Back</a>
                                    </div>
                                </div>
                            </ul>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                <form id="immunizationform">
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="btn-group pull-right">
                                                                <div class="pull-left">
                                                                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add_treatment">Add Treatment</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body list-group list-group-contacts scroll" style="height: 450px;">
                                                            <div class="panel-body">
                                                                <div id="immunizationtreatmentTable"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                                <div class="col-md-12">
                                                     <div class="panel panel-default tabs">
                                                         <ul class="nav nav-tabs" role="tablist">
                                                             <li class="active"><a href="#tab-2first" role="tab" data-toggle="tab">Child - Type of Feeding</a>
                                                             </li>
                                                             <li><a href="#tab-2second" role="tab" data-toggle="tab">Mother - Tetanus Toxoid</a>
                                                             </li>
                                                             <div class="btn-group pull-right">
                                                                 <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#add_feeding">Add Feeding</button>
                                                             </div>
                                                         </ul>
                                                         <div class="panel-body">
                                                            <form id="treatment2form">
                                                                 <div class="panel-body tab-content">
                                                                     <div class="tab-pane active" id="tab-2first">
                                                                         <?php require 'tables/type_of_feeding.php'; ?>
                                                                         <hr>
                                                                         <?php require 'tables/type_of_feeding2.php'; ?>
                                                                     </div>

                                                                     <div class="tab-pane" id="tab-2second">
                                                                         <?php require 'tables/tetanus_toxoid.php'; ?>
                                                                         <hr>
                                                                         <?php require 'tables/tetanus_toxoid_fp.php'; ?>
                                                                     </div>
                                                                 </div>
                                                             </form>
                                                         </div>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <?php require 'modals/add_feeding.php'; ?>
    <?php require 'modals/add_treatment.php'; ?>
    <?php require 'modals/end_treatment.php'; ?>
    <!-- END PAGE CONTENT -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudtreatment.js"></script>
    <script type="text/javascript" src="functions/crudfeeding.js"></script>
    <script type="text/javascript" src="functions/crudfeeding2.js"></script>
    <script type="text/javascript" src="functions/crudtetanustoxoid.js"></script>
    <script type="text/javascript" src="functions/crudttfp.js"></script>
    <script type="text/javascript" src="functions/endtreatment.js"></script>
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
    <script type='text/javascript' src='js/sweetalertjs/sweetalert2.min.js'></script>

    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <!-- END THIS PAGE PLUGINS -->



</body>

</html>
