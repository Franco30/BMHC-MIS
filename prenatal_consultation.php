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

<!--
    <script src="js/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
-->

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
$query2 = $conn->query("SELECT * FROM `prenatal` WHERE `patient_id` = '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();
?>
                <li>Transactions</li>
                <li>Prenatal</li>
                <li><mark><strong>Prenatal Consultation</strong></mark></li>
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
                                <h3 class="panel-title"><strong>Prenatal Consultation</strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button type="button" class="btn btn-success" id="addnew"><span class="fa fa-check"></span>Save</button>
                                        <a href="prenatal_record?patient_id=<?php echo $fetch2['patient_id'] ?>&&prenatal_id=<?php echo $fetch2['prenatal_id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height:450px">
                                <div class="panel-body">
                                    <form id="prenatalconsultationform">
                                        <div class="row">
                                            <h5 style="font-size: 13px;"><strong>For Prenatal Check-up:</strong></h5>
                                            <div class="col-md-12">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="hidden" class="form-control" id="patient_id" value="<?php echo $fetch2['patient_id'] ?>" required />
                                                        <input type="hidden" class="form-control" id="prenatal_id" value="<?php echo $fetch2['prenatal_id'] ?>" required />
                                                        <input type="text" class="form-control datepicker" id="date" required />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Doctor's Order and Advice</label>
                                                        <textarea class="form-control" spellcheck="false" id="doctors_order_advice"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Presentation</label>
                                                        <input type="text" class="form-control" id="presentation" required />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Complaints</label>
                                                        <textarea class="form-control" spellcheck="false" id="complaints"></textarea>
                                                    </div>

                                                </div>
                                                <!-- &nbsp;&nbsp;&nbsp; -->
                                                <div class="col-md-6">
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>LMP</label>
                                                                <input type="text" class="form-control datepicker" id="lmp" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>EDC</label>
                                                                <input type="text" class="form-control datepicker" id="edc" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-row">
                                                        <div class="col-md-2">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>Gravida</label>
                                                                <input type="number" class="form-control" id="gravida" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>Para</label>
                                                                <input type="number" class="form-control" id="para" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>FT</label>
                                                                <input type="text" class="form-control" id="ft" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>PT</label>
                                                                <input type="text" class="form-control" id="pt" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>A</label>
                                                                <input type="text" class="form-control" id="a" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>LB</label>
                                                                <input type="text" class="form-control" id="lb" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-row">
                                                        <div class="col-md-3">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>FH</label>
                                                                <input type="number" class="form-control" id="fh" placeholder="Enter FH" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>FHB</label>
                                                                <input type="text" class="form-control" id="fhb" placeholder="Enter LB" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>BP</label>
                                                                <input type="text" class="mask_bp form-control" id="bp" placeholder="Enter mmHg" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>Temperature</label>
                                                                <input type="text" class="mask_temp form-control" id="temp" placeholder="Enter °C" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;
                                                    <div class="form-row">
                                                        <div class="col-md-4">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>Weight</label>
                                                                <input type="number" class="form-control" id="weight" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>Height</label>
                                                                <input type="number" class="form-control" id="height" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group" style="margin-left:-10px;">
                                                                <label>AOG</label>
                                                                <input type="text" class="form-control" id="aog" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudprenatalconsultation.js"></script>
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
