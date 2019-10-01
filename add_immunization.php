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
                <li>Transactions</li>
                <li><mark><strong>Immunization Service Registration</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Immunization Patient Registration</h3>
                            </div>
                            <div class="panel-body">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Immunization Registration</a>
                                        </li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Treatment 1</a>
                                        </li>
                                        <li><a href="#tab-third" role="tab" data-toggle="tab">Treatment 2</a>
                                        </li>
                                    </ul>
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                        <?php
                                require 'require/config.php';
			                    $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                date_default_timezone_set('Asia/Manila');
                                $date=date("F j, Y");
									?>
                                        <form id="immunizationform">
                                            <div class="panel-body tab-content">
                                                <div class="tab-pane active" id="tab-first">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Patient Name</label>
                                                                    <input type="text" id="childname<?php echo $fetch['child_id'];?>" class="form-control" value="<?php echo $fetch['child_name'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Birthdate</label>
                                                                            <input type="text" id="provider<?php echo $fetch['child_id'];?>" class="form-control" value="<?php echo $fetch['birthdate'];?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Time of Birth</label>
                                                                            <input type="text" id="timeofbirth" class="form-control timepicker" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Birth Weight</label>
                                                                            <input type="text" class="form-control" id="birthweight" placeholder="Enter Weight" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Purok</label>
                                                                    <input type="text" class="form-control" id="purok<?php echo $fetch['child_id'];?>" value="<?php echo $fetch['purok'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Street Address</label>
                                                                    <textarea style="color:#444444;" class="form-control" spellcheck="false" id="streetaddress<?php echo $fetch['child_id'];?>" value="<?php echo $fetch['child_id'];?>" readonly><?php echo $fetch['street_address'];?></textarea>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Gravida</label>
                                                                            <input type="number" class="form-control" id="gravida" placeholder="No. of pregnancy" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Para</label>
                                                                            <input type="number" class="form-control" id="para" placeholder="No. of child alive" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Abortion</label>
                                                                            <input type="number" class="form-control" id="abortion" placeholder="No. of child aborted" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;margin5-right:-10px">
                                                                            <label>Phone No.</label>
                                                                            <input type="number" class="form-control" id="phonenumber" placeholder="Enter Phone No." required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                                                            <label>Philhealth No.</label>
                                                                            <input type="text" class="form-control" id="philhealth" placeholder="Enter Philhealth No." required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Mother</label>
                                                                    <input type="text" class="form-control" id="mname<?php echo $fetch['child_id'];?>" value="<?php echo $fetch['mother_name'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Age</label>
                                                                            <input type="text" class="form-control" id="mage" placeholder="Enter Mother's age" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Occupation</label>
                                                                            <input type="text" class="form-control" id="moccupation<?php echo $fetch['child_id'];?>" value="<?php echo $fetch['mother_occupation'];?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Father</label>
                                                                    <input type="text" class="form-control" id="fname<?php echo $fetch['child_id'];?>" value="<?php echo $fetch['father_name'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Age</label>
                                                                            <input type="text" class="form-control" id="fage" placeholder="Enter Father's age" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Occupation</label>
                                                                            <input type="text" class="form-control" id="foccupation<?php echo $fetch['child_id'];?>" value="<?php echo $fetch['father_occupation'];?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Place of Prenatal</label>
                                                                            <input type="text" class="form-control" id="placeprenatal" placeholder="Enter Place of Prenatal" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                            <label>Place of Delivery</label>
                                                                            <input type="text" class="form-control" id="placedelivery" placeholder="Enter Place of Delivery" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Type of Delivery</label>
                                                                            <input type="text" class="form-control" id="typedelivery" placeholder="Enter Type of Delivery" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
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
                                                            <div class="form-row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-left:-10px;">
                                                                        <label>Type of Treatment</label>
                                                                        <select name="patient_id" class="form-control select" data-live-search="true" id="treatmenttype">
                                                                            <option value="#">Select</option>
                                                                            <option>BCG</option>
                                                                            <option>HEPA B</option>
                                                                            <option>PHIB 1</option>
                                                                            <option>PHIB 2</option>
                                                                            <option>PHIB 3</option>
                                                                            <option>OPV 1</option>
                                                                            <option>OPV 2</option>
                                                                            <option>OPV 3</option>
                                                                            <option>IPV</option>
                                                                            <option>PCV 1</option>
                                                                            <option>PCV 2</option>
                                                                            <option>PCV 3</option>
                                                                            <option>MVO(6 mos.)</option>
                                                                            <option>MV(9 mos.)</option>
                                                                            <option>MMR</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                                                        <label>Date</label>
                                                                        <input type="text" class="form-control datepicker" id="date" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-right:-10px;">
                                                                        <label>Age</label>
                                                                        <input type="text" class="form-control" id="age" placeholder="Enter Age" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-right:-10px;">
                                                                        <label>Weight</label>
                                                                        <input type="text" class="form-control" id="weight" placeholder="Enter Weight" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-right:-10px;">
                                                                        <label>Height</label>
                                                                        <input type="text" class="form-control" id="height" placeholder="Enter Height" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group" style="margin-right:-10px;">
                                                                        <label>Temperature</label>
                                                                        <input type="text" class="form-control" id="temperature" placeholder="Enter degrees" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            &nbsp;
                                                            <br />
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Remarks</label>
                                                                    <textarea id="remarks" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            &nbsp;
                                                            <br />
                                                            <div class="col-md-6">
                                                                <div class="btn-group pull-left" style="margin:15px;">
                                                                    <div class="pull-left">
                                                                        <button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
                                                                        <a href="laboratory_request.php?id=<?php echo $_GET['id']?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            &nbsp;
                                                            <hr>
                                                            <table class="table datatable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <center></center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Date</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Age</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Weight</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Height</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Temperature</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Remarks</center>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>PHIB 1</td>
                                                                        <td>
                                                                            <center>2019-15-11</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>1 month & 15 days</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>43 kg</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>54 cm</center>
                                                                        </td>
                                                                        <td>
                                                                            <center>36 C</center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>PHIB 2</td>
                                                                        <td>
                                                                            <center>2019-16-10</center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>PHIB 3</td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                        <td>
                                                                            <center></center>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane" id="tab-third">
                                                    <div class="row">
                                                        <div class="col-md-12">
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
