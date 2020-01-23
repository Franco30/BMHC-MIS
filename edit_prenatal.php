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
            $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `patient_id` = '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
            date_default_timezone_set('Asia/Manila');
            $date=date("F j, Y");
            ?>
                <li>Transactions</li>
                <li><a href="prenatal">Prenatal</a></li>
                <li>Edit Prenatal</li>
                <li><mark><strong><?php echo $fetch['patient_name'];?></strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div id="alert2" class="alert alert-danger" style="display:none;">
                                <center><span id="alerttext2"></span></center>
                            </div>

                            <div id="alert" class="alert alert-info" style="display:none;">
                                <center><span id="alerttext"></span></center>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Prenatal</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button type="button" class="updateprenatal btn btn-success" value="<?php echo $fetch2['prenatal_id'];?>">Save</button>
                                            <a class="btn btn-danger" href="prenatal">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <?php
                                require 'require/config.php';
			                    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `patient_id` = '$_GET[patient_id]' && `prenatal_id` = '$_GET[prenatal_id]'") or die(mysqli_error());
                                $fetch2 = $query2->fetch_array();
                                date_default_timezone_set('Asia/Manila');
                                $date=date("F j, Y");
									?>
                                    <form id="prenatalform">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>Patient Name</label>
                                                            <input type="hidden" class="form-control" value="<?php echo $fetch['patient_id'];?>" id="patient_id" required />
                                                            <input type="text" class="form-control" value="<?php echo $fetch['patient_name'];?>" style="color:#444444;" readonly required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-right:-10px;">
                                                            <label>Age</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['age'];?>" style="color:#444444;" readonly required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>Menstrual Hx</label>
                                                            <input type="text" class="form-control" id="menstrual_hx<?php echo $fetch2['prenatal_id'];?>" placeholder="Enter Menstrual Hx" value="<?php echo $fetch2['menstrual_hx'];?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-right:-10px;">
                                                            <label>Menarch</label>
                                                            <input type="text" class="form-control" id="menarch<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['menarch'];?>" placeholder="Enter Menarch" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>Flow</label>
                                                            <input type="text" class="form-control" id="flow<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['flow'];?>" placeholder="Enter Flow" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-right:-10px;">
                                                            <label>Dysmenorrhea</label>
                                                            <input type="text" class="form-control" id="dysmenorrhea<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['dysmenorrhea'];?>" placeholder="Enter Dysmenorrhea" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-group">
                                                    <label>OB-Gyne Hx</label>
                                                    <textarea class="form-control" spellcheck="false" id="obgynehx<?php echo $fetch2['prenatal_id'];?>"><?php echo $fetch2['obgynehx'];?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Past Medical Hx</label>
                                                    <textarea class="form-control" spellcheck="false" id="past_medical_hx<?php echo $fetch2['prenatal_id'];?>"><?php echo $fetch2['past_medical_hx'];?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;">
                                                            <label>Phone No.</label>
                                                            <input type="text" class="form-control mask_cpnumber" id="phonenumber" placeholder="Enter Phone No." value="<?php echo $fetch['contact_no']?>" style="color:#444444;" readonly required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>Philhealth No.</label>
                                                            <input type="text" class="form-control" id="philhealth" value="<?php echo $fetch['philhealth_no'] ?>" style="color:#444444;" placeholder="Enter Philhealth No." readonly required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;">
                                                            <label>Date Today</label>
                                                            <input type="text" class="form-control datepicker" id="date<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['prenatal_date'];?>" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-left:-10px;">
                                                            <label>Name of Husband</label>
                                                            <input type="text" class="form-control" id="husband<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['husband'];?>" placeholder="Enter Name of Husband" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;">
                                                            <label>Purok</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['purok'];?>" id="purok" style="color:#444444;" readonly required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>Street Address</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['street_address'];?>" style="color:#444444;" readonly required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-left:-10px;">
                                                            <label>Cycle</label>
                                                            <input type="text" class="form-control" id="cycle<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['cycle'];?>" placeholder="Enter Cycle" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>Duration</label>
                                                            <input type="text" class="form-control" id="duration<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['duration'];?>" placeholder="Enter Duration" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-right:-10px;">
                                                            <label>Blood Type</label>
                                                            <input type="text" class="form-control" id="bloodtype<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['bloodtype'];?>" placeholder="Enter Blood Type" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <h5><strong>Tetanus Toxoid</strong></h5>
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-left:-10px;">
                                                            <label>TT1</label>
                                                            <input type="text" class="form-control datepicker" id="tt1<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['tt1'];?>" placeholder="Enter Date" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                            <label>TT2</label>
                                                            <input type="text" class="form-control datepicker" id="tt2<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['tt2'];?>" placeholder="Enter Date" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group" style="margin-right:-10px;">
                                                            <label>TT3</label>
                                                            <input type="text" class="form-control datepicker" id="tt3<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['tt3'];?>" placeholder="Enter Date" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                            <label>TT4</label>
                                                            <input type="text" class="form-control datepicker" id="tt4<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['tt4'];?>" placeholder="Enter Date" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" style="margin-right:-10px;">
                                                            <label>TT5</label>
                                                            <input type="text" class="form-control datepicker" id="tt5<?php echo $fetch2['prenatal_id'];?>" value="<?php echo $fetch2['tt5'];?>" placeholder="Enter Date" required />
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
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="functions/crudprenatal.js"></script>
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
