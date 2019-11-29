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
                $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                date_default_timezone_set('Asia/Manila');
                $date=date("F j, Y");
                    ?>
                <li>Transactions</li>
                <li>Add Consultation</li>
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
                                <h3 class="panel-title"><strong>Consultation</strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <a class="btn btn-danger" href="consultation">Cancel</a>
                                        <button type="button" id="addnew" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                <div class="panel-body">
                                    <!-- START WIZARD WITH SUBMIT BUTTON -->
                                    <div class="block">
                                        <form id="consultationform">
                                            <div class="wizard">
                                                <ul>
                                                    <li>
                                                        <a href="#step-1">
                                                            <span class="stepNumber">1</span>
                                                            <span class="stepDesc">Patient
                                                                Information<br /></span>
                                                            <!--
                                                            <small>Patient
                                                                    Information</small>
-->
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <span class="stepNumber">2</span>
                                                            <span class="stepDesc">Complaints,
                                                                Diagnosis, etc.<br /></span>
                                                        </a>
                                                    </li>
                                                    <!--
                                                    <li>
                                                        <a href="#step-3">
                                                            <span class="stepNumber">3</span>
                                                            <span class="stepDesc">Treatment<br /></span>
                                                        </a>
                                                    </li>
-->
                                                </ul>

                                                <div id="step-1">
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Date</label>
                                                                    <input type="text" class="form-control datepicker" id="date_today" placeholder="Enter Date Today" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>PhilHealth #</label>
                                                                    <input type="text" class="form-control" id="philhealth" value="<?php echo $fetch['philhealth_no']?>" placeholder="Enter Philhealth #" style="color:#444444;" readonly required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Patient Name</label>
                                                                    <input type="hidden" class="form-control" id="patient_id" value="<?php echo $fetch['patient_id']?>" required />
                                                                    <input type="text" class="form-control" value="<?php echo $fetch['patient_name']?>" style="color:#444444;" readonly required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Birth Date</label>
                                                                    <input type="text" class="form-control" id="birthdate" value="<?php echo $fetch['birthdate'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Weight</label>
                                                                    <input type="number" class="form-control" id="weight" placeholder="kgs." required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Height</label>
                                                                    <input type="number" class="form-control" id="height" placeholder="cm." required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Blood Pressure - BP</label>
                                                                    <input type="text" class="mask_bp form-control" id="bp" name="bp" placeholder="mmHg" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Temperature</label>
                                                                    <input type="text" class="mask_temp form-control" id="temp" placeholder="°C" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- &nbsp;&nbsp;&nbsp; -->
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Purok</label>
                                                                    <input type="text" class="form-control" id="purok" value="<?php echo $fetch['purok'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Street Address</label>
                                                                    <input type="text" class="form-control" id="streetaddress" value="<?php echo $fetch['street_address'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Gender</label>
                                                                    <input type="text" class="form-control" id="gender" value="<?php echo $fetch['gender'];?>" style="color:#444444;" readonly required />
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Age</label>
                                                                    <input type="text" class="form-control" id="age" value="<?php echo $fetch['age'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-group">
                                                            <label>Head of the Family</label>
                                                            <input type="text" class="form-control" id="headfamily" placeholder="Enter Head of the Family" required />
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Respiratory Rate - RR</label>
                                                                    <input type="number" class="form-control" id="rr" placeholder="bpm" required />
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Pulse Rate - PR</label>
                                                                    <input type="number" class="form-control" id="pr" placeholder="cpm" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END OF STEP 2 -->
                                                <div id="step-2">
                                                    <div class="col-md-6">

                                                        <h5 style="font-size: 12px;font-weight: bold;">S</h5>
                                                        <div class="form-group">
                                                            <label>Complaints:</label>
                                                            <textarea class="form-control" spellcheck="false" id="complaints"></textarea>
                                                            <!--
                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="complaints" name="complaints[]">
                                                                <option value="">Select</option>
                                                                <option value="Fever">Fever</option>
                                                                <option value="Colds">Colds</option>
                                                                <option value="Headache">Headache</option>
                                                                <option value="Allergy">Allergy</option>
                                                                <option value="Cough">Cough</option>
                                                            </select>
-->
                                                        </div>

                                                        <h5 style="font-size: 12px;font-weight: bold;">O:</h5>
                                                        <div class="form-group">
                                                            <label>Pertinent P.E Findings:</label>
                                                            <textarea class="form-control" spellcheck="false" id="pefindings"></textarea>
                                                        </div>




                                                    </div>
                                                    <!-- &nbsp;&nbsp;&nbsp; -->
                                                    <div class="col-md-6">

                                                        <h5 style="font-size: 12px;font-weight: bold;">A</h5>
                                                        <div class="form-group">
                                                            <label>Diagnosis:</label>
                                                            <textarea class="form-control" spellcheck="false" id="diagnosis"></textarea>
                                                        </div>

                                                        <h5 style="font-size: 12px;font-weight: bold;">P - Plan of
                                                            Actions:</h5>
                                                        <div class="form-group">
                                                            <label>Laboratory Request:</label>
                                                            <textarea class="form-control" spellcheck="false" id="labrequest"></textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END WIZARD WITH SUBMIT BUTTON -->
                                </div>
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
    <script type="text/javascript" src="functions/crudconsultation.js"></script>
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
    <!--
    <script>
        $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
            options.async = true;
        });
    </script>
-->
</body>

</html>
