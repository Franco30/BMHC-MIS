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
                <li>Data Entry</li>
                <li><mark><strong>Prenatal Record</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Prenatal Record</h3>
                            </div>
                            <div class="panel-body">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Prenatal Registration</a>
                                        </li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Prenatal Consultation</a>
                                        </li>
                                    </ul>
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                        <?php
	                            require 'require/config.php';
			                    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                date_default_timezone_set('Asia/Manila');
                                $date=date("F j, Y");
									?>
                                        <form id="familyplanningform">
                                            <div class="panel-body tab-content">
                                                <div class="tab-pane active" id="tab-first">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Patient Name</label>
                                                                            <input type="text" id="provider<?php echo $fetch['patient_id'];?>" class="form-control" value="<?php echo $fetch['patient_name'];?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Age</label>
                                                                            <input type="text" id="provider<?php echo $fetch['patient_id'];?>" class="form-control" value="<?php echo $fetch['age'];?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Menstrual Hx</label>
                                                                            <input type="text" class="form-control" id="menstrualhx" placeholder="Enter Menstrual Hx" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Menarch</label>
                                                                            <input type="text" class="form-control" id="menarch" placeholder="Enter Menarch" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Flow</label>
                                                                            <input type="text" class="form-control" id="flow" placeholder="Enter Flow" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Dysmenorrhea</label>
                                                                            <input type="text" class="form-control" id="dysmenorrhea" placeholder="Enter Dysmenorrhea" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>OB-Gyne Hx</label>
                                                                    <textarea class="form-control" spellcheck="false" id="address<?php echo $fetch['patient_id']?>"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>OB-Gyne Hx</label>
                                                                    <textarea class="form-control" spellcheck="false" id="address<?php echo $fetch['patient_id']?>"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Phone No.</label>
                                                                            <input type="number" class="form-control" id="phonenumber<?php echo $fetch['patient_id']?>" placeholder="Enter Phone No." value="<?php echo $fetch['contact_no']?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Philhealth No.</label>
                                                                            <input type="text" class="form-control" id="philhealth<?php echo $fetch['patient_id']?>" value="<?php echo $fetch['philhealth_no'] ?>" style="color:#444444;" placeholder="Enter Philhealth No." readonly required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Civil Status</label>
                                                                            <input type="text" style="color:#444444;" class="form-control" id="civilstatus<?php echo $fetch['patient_id']?>" value="<?php echo $fetch['philhealth_no'] ?>" readonly required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Name of Husband</label>
                                                                    <input type="text" class="form-control" id="prevmethod" placeholder="Enter Name of Husband" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <textarea class="form-control" style="color:#444444;" readonly spellcheck="false" id="address<?php echo $fetch['patient_id']?>" value="<?php echo $fetch['address']?>"><?php echo $fetch['address'];?></textarea>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Cycle</label>
                                                                            <input type="text" class="form-control" id="cycle" placeholder="Enter Duration" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Duration</label>
                                                                            <input type="text" class="form-control" id="duration" placeholder="Enter Duration" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Blood Type</label>
                                                                            <input type="text" class="form-control" id="bloodtype" placeholder="Enter Blood Type" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Tetanus Toxoid 1</label>
                                                                            <input type="text" class="form-control datepicker" id="tt1" placeholder="Enter Date" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Tetanus Toxoid 2</label>
                                                                            <input type="text" class="form-control datepicker" id="tt2" placeholder="Enter Date" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Tetanus Toxoid 3</label>
                                                                            <input type="text" class="form-control datepicker" id="tt3" placeholder="Enter Date" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Tetanus Toxoid 4</label>
                                                                            <input type="text" class="form-control datepicker" id="tt3" placeholder="Enter Date" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Tetanus Toxoid 5</label>
                                                                            <input type="text" class="form-control datepicker" id="tt5" placeholder="Enter Date" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
                                                    <a href="familyplanning" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                                </div>

                                                <div class="tab-pane" id="tab-second">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Doctor's Order and Advice</label>
                                                                    <textarea class="form-control" spellcheck="false" id="doctorsadvice"></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Date</label>
                                                                    <input type="text" class="form-control datepicker" id="date" required />
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
                                                                <h5 style="font-size: 13px;">For Prenatal Check-up:</h5>
                                                                <div class="form-row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Gravida</label>
                                                                            <input type="number" class="form-control" id="gravida" placeholder="Enter Gravida" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Para</label>
                                                                            <input type="number" class="form-control" id="para" placeholder="Enter Para" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Height</label>
                                                                            <input type="number" class="form-control" id="height" placeholder="Enter Height" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Temperature</label>
                                                                            <input type="number" class="form-control" id="temperature" placeholder="Enter Temperature" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Fetal Heart</label>
                                                                            <input type="text" class="form-control" id="fetalheart" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>PT</label>
                                                                            <input type="number" class="form-control" id="pt" placeholder="Enter PT" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Abortion</label>
                                                                            <input type="number" class="form-control" id="height" placeholder="Enter Height" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>LB</label>
                                                                            <input type="text" class="form-control" id="lb" placeholder="Enter LB" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>LMP</label>
                                                                            <input type="text" class="form-control datepicker" id="lmp" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Foetal Heart</label>
                                                                            <input type="text" class="form-control" id="fh" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>EDC</label>
                                                                            <input type="text" class="form-control datepicker" id="edc" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>FHB</label>
                                                                            <input type="text" class="form-control" id="fhb" placeholder="Enter FHB" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Blood Pressure</label>
                                                                            <input type="text" class="form-control" id="blood_pressure" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Weight</label>
                                                                            <input type="number" class="form-control" id="weight" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Age of Gestation</label>
                                                                            <input type="text" class="form-control" id="aog" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
                                                    <a href="laboratory_request.php?id=<?php echo $_GET['id']?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
    <script type="text/javascript" src="functions/crudpatient.js"></script>
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

    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <!-- END THIS PAGE PLUGINS -->



</body>

</html>
