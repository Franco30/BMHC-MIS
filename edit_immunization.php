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
            $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
            $query2 = $conn->query("SELECT * FROM `immunization` WHERE `child_id` = '$_GET[child_id]' && `immunization_id` = '$_GET[immunization_id]'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
            date_default_timezone_set('Asia/Manila');
            $date=date("F j, Y");
            ?>
                <li>Transactions</li>
                <li>Immunization</li>
                <li>Edit Immunization</li>
                <li><mark><strong><?php echo $fetch['child_name'];?></strong></mark></li>
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
                                <h3 class="panel-title">Edit Immunization</h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button type="button" class="updateimmunization btn btn-success" value="<?php echo $fetch2['immunization_id'];?>">Save</button>
                                        <a class="btn btn-danger" href="immunization_table">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form id="immunizationform">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Patient Name</label>
                                                <input type="hidden" id="child_id" class="form-control" value="<?php echo $fetch['child_id'];?>" style="color:#444444;" readonly required />
                                                <input type="text" id="childname" class="form-control" value="<?php echo $fetch['child_name'];?>" style="color:#444444;" readonly required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Birthdate</label>
                                                        <input type="text" class="form-control" value="<?php echo $fetch['birthdate'];?>" style="color:#444444;" readonly required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                        <label>Time of Birth</label>
                                                        <input type="text" id="birthtime<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['birthtime'];?>" class="form-control timepicker" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-right:-10px;">
                                                        <label>Birth Weight</label>
                                                        <input type="text" class="form-control" id="birthweight<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['birth_weight'];?>" placeholder="Enter Weight" required />
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="form-group">
                                                <label>Purok</label>
                                                <input type="text" class="form-control" id="purok" value="<?php echo $fetch['purok'];?>" style="color:#444444;" readonly required />
                                                <input type="hidden" class="form-control" id="gender" value="<?php echo $fetch['gender'];?>" style="color:#444444;" readonly required />
                                            </div>
                                            <div class="form-group">
                                                <label>Street Address</label>
                                                <textarea style="color:#444444;" class="form-control" spellcheck="false" id="streetaddress" value="<?php echo $fetch['child_id'];?>" readonly><?php echo $fetch['street_address'];?></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Gravida</label>
                                                        <input type="number" class="form-control" id="gravida<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['gravida'];?>" placeholder="No. of pregnancy" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                        <label>Para</label>
                                                        <input type="number" class="form-control" id="para<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['para'];?>" placeholder="No. of child alive" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-right:-10px;">
                                                        <label>Abortion</label>
                                                        <input type="number" class="form-control" id="abortion<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['abortion'];?>" placeholder="No. of child aborted" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left:-10px;margin5-right:-10px">
                                                        <label>Phone No.</label>
                                                        <input type="text" class="mask_cpnumber form-control" id="phonenumber<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['cp_no'];?>" placeholder="Enter Phone No." required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                                        <label>Philhealth No.</label>
                                                        <input type="text" class="mask_philhealth form-control" id="philhealth<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['philhealth_no'];?>" placeholder="Enter Philhealth No." required />
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="form-group">
                                                <label>Mother</label>
                                                <input type="text" class="form-control" id="mname" value="<?php echo $fetch['mother_name'];?>" style="color:#444444;" readonly required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" id="mage<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['mother_age'];?>" placeholder="Enter Mother's age" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                        <label>Occupation</label>
                                                        <input type="text" class="form-control" id="moccupation" value="<?php echo $fetch['mother_occupation'];?>" style="color:#444444;" readonly required />
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="form-group">
                                                <label>Father</label>
                                                <input type="text" class="form-control" id="fname" value="<?php echo $fetch['father_name'];?>" style="color:#444444;" readonly required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" id="fage<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['father_age'];?>" placeholder="Enter Father's age" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                        <label>Occupation</label>
                                                        <input type="text" class="form-control" id="foccupation" value="<?php echo $fetch['father_occupation'];?>" style="color:#444444;" readonly required />
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-left:-10px;">
                                                        <label>Place of Prenatal</label>
                                                        <input type="text" class="form-control" id="placeprenatal<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['place_of_prenatal'];?>" placeholder="Enter Place of Prenatal" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                        <label>Place of Delivery</label>
                                                        <input type="text" class="form-control" id="placedelivery<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['place_of_delivery'];?>" placeholder="Enter Place of Delivery" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group" style="margin-right:-10px;">
                                                        <label>Type of Delivery</label>
                                                        <input type="text" class="form-control" id="typedelivery<?php echo $fetch2['immunization_id'];?>" value="<?php echo $fetch2['type_of_delivery'];?>" placeholder="Enter Type of Delivery" required />
                                                    </div>
                                                </div>
                                            </div>
                                            &nbsp;
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
    <!-- END PAGE CONTENT -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="functions/crudimmunization.js"></script>
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
