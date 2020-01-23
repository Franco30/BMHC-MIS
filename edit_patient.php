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
    <!-- EOF CSS INCLUDE -->
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
                <li>Data Entry</li>
                <li><mark><strong>Patient Master File</strong></mark></li>
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
                <?php
	               require 'require/config.php';
			$q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
			$fetch = $q->fetch_array();
									?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Update Patient Information</strong></h3>
                            </div>
                            <div class="panel-body">
                                <form id="patientform">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Patient Name</label>
                                                <input type="text" class="form-control" value="<?php echo $fetch['patient_name']; ?>" id="patient_name<?php echo $fetch['patient_id']; ?>" placeholder="Enter Patient Name" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Birthdate</label>
                                                        <input id="birthdate<?php echo $fetch['patient_id']; ?>" type="text" class="birthdate form-control datepicker" value="<?php echo $fetch['birthdate']; ?>" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-right:-10px;">
                                                        <label>Age</label>
                                                        <input id="age<?php echo $fetch['patient_id']; ?>" type="text" class="age form-control" style="font-size:11px;font-weight:bold;color:black" value="<?php echo $fetch['age']; ?>" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Gender</label>
                                                        <select class="form-control select" style="display: none;" id="gender<?php echo $fetch['patient_id']; ?>">
                                                            <option value="<?php echo $fetch['gender']; ?>"><?php echo $fetch['gender']; ?></option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-right:-10px;">
                                                        <label>Civil Status</label>
                                                        <select class="form-control select" style="display: none;" id="civilstatus<?php echo $fetch['patient_id']; ?>">
                                                            <option value="<?php echo $fetch['civil_status'];?>"><?php echo $fetch['civil_status']; ?></option>
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="form-group">
                                                <label>Purok</label>
                                                <select class="form-control select" data-live-search="true" style="display: none;" id="purok<?php echo $fetch['patient_id']; ?>">
                                                    <option value="<?php echo $fetch['purok']; ?>"><?php echo $fetch['purok']; ?></option>
                                                    <option value="Gauzon">Prk. Gauzon</option>
                                                    <option value="Himaya">Prk. Himaya</option>
                                                    <option value="Kabugwason">Prk. Kabugwason</option>
                                                    <option value="Kahirup A">Prk. Kahirup A</option>
                                                    <option value="Kahirup B">Prk. Kahirup B</option>
                                                    <option value="Kasilingan">Prk. Kasilingan</option>
                                                    <option value="Katilingban">Prk. Katilingban</option>
                                                    <option value="Mabinuligon">Prk. Mabinuligon</option>
                                                    <option value="Matahum">Prk. Matahum</option>
                                                    <option value="Paghidaet">Prk. Paghidaet</option>
                                                    <option value="Paglaum">Prk. Paglaum</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Street Address</label>
                                                <textarea class="form-control" spellcheck="false" id="streetaddress<?php echo $fetch['patient_id']; ?>"><?php echo $fetch['street_address']; ?></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>height</label>
                                                        <input type="text" id="height<?php echo $fetch['patient_id']; ?>" value="<?php echo $fetch['height']; ?>" class="form-control" placeholder="Enter Height in cms." required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-right:-10px;">
                                                        <label>Weight</label>
                                                        <input type="text" id="weight<?php echo $fetch['patient_id']; ?>" value="<?php echo $fetch['weight']; ?>" class="form-control" placeholder="Enter Weight in kg" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="mask_cpnumber form-control" id="contact_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Contact" value="<?php echo $fetch['contact_no']; ?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Region/Province</label>
                                                <input type="text" class="form-control" id="region_province<?php echo $fetch['patient_id']; ?>" placeholder="Enter Region or Province" value="<?php echo $fetch['region_province']; ?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Occupation</label>
                                                <input type="text" class="form-control" id="occupation<?php echo $fetch['patient_id']; ?>" placeholder="Enter Occupation" value="<?php echo $fetch['occupation']; ?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Philhealth Number</label>
                                                <input type="text" class="mask_philhealth form-control" id="philhealth_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Philhealth Number" value="<?php echo $fetch['philhealth_no']; ?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Contact Person</label>
                                                <input type="text" class="form-control" id="contact_person<?php echo $fetch['patient_id']; ?>" placeholder="Enter Contact Person" value="<?php echo $fetch['contact_person']; ?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Emergency Number</label>
                                                <input type="text" class="mask_cpnumber form-control" id="emergency_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Emergency Number" value="<?php echo $fetch['emergency_no']; ?>" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Patient Condition</label>
                                                <select class="form-control select" data-live-search="true" style="display: none;" id="status<?php echo $fetch['patient_id']; ?>">
                                                    <option value="<?php echo $fetch['status']; ?>"><?php echo $fetch['status']; ?></option>
                                                    <option value="Deceased">Deceased</option>
                                                    <option value="Active">Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#edit_patient">Save</button>
                                        <button type="button" class="btn btn-danger" onclick="goBack()">Cancel</button>
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
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START PRELOADS -->
    <?php require 'modals/editpatient.php'; ?>
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
    <script type="text/javascript" src="functions/patientmasterfile.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
    <!-- END THIS PAGE PLUGINS-->
    <!-- START TEMPLATE -->
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <!-- END TEMPLATE -->
    <script>
        function goBack() {
            window.history.back();
        }

    </script>
    <script>
        $(".birthdate").change(function() {
            var birthdate = new Date($(this).val());
            var today = new Date();
            var age = Math.floor((today - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
            $(".age").val(age);
        });

    </script>
    <script>
        var date = new Date();
        $(".birthdate").datepicker({
            format: 'mm-dd-yyyy',
            language: 'en',
            startDate: new Date('1900-01-01'),
            endDate: date
        });

    </script>
    <!-- END SCRIPTS -->
</body>

</html>
