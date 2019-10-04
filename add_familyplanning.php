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
                <li>Transaction</li>
                <li><mark><strong>Family Planning Service Registration</strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Family Planning Service</h3>
                            </div>
                            <div class="panel-body">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Patient</a>
                                        </li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Medical, Obstetrical History and STI Risks </a>
                                        </li>
                                        <li><a href="#tab-third" role="tab" data-toggle="tab">Physical and Pelvic Examination</a>
                                        </li>
                                        <li><a href="#tab-fourth" role="tab" data-toggle="tab">Risks for Violence </a>
                                        </li>
                                    </ul>
                                    <div class="panel-body list-group list-group-contacts scroll" style="height: 470px;">
                                        <?php
	                            require 'require/config.php';
			                    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
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
                                                                <div class="form-group">
                                                                    <label>Patient Name</label>
                                                                    <input type="text" id="provider<?php echo $fetch['patient_id'];?>" class="form-control" value="<?php echo $fetch['patient_name'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Type of Acceptor</label>
                                                                    <select class="form-control select" style="display: none;" id="acceptor">
                                                                        <option>Select</option>
                                                                        <option>New to the Program</option>
                                                                        <option>Continuing User</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Date of Birth</label>
                                                                    <input type="text" class="form-control" id="birthdate<?php echo $fetch['patient_id'];?>" value="<?php echo $fetch['birthdate'];?>" placeholder="Enter Date of Birth" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Highest Education</label>
                                                                            <input type="text" class="form-control" id="education" placeholder="Enter highest Education" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Occupation</label>
                                                                            <input type="text" class="form-control" id="occupation<?php echo $fetch['patient_id'];?>" placeholder="Enter Occupation" value="<?php echo $fetch['occupation'];?>" style="color:#444444;" readonly required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Spouse Name</label>
                                                                    <input type="text" class="form-control" id="spouse" placeholder="Enter Complete Spouse Name" required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Spouse Date of Birth</label>
                                                                    <input type="text" class="form-control datepicker" id="spousebirthdate" placeholder="Enter Date of Birth" required />
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Spouse Highest Education</label>
                                                                            <input type="text" class="form-control" id="education" placeholder="Enter highest Education" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Spouse Occupation</label>
                                                                            <input type="text" class="form-control" id="occupation" placeholder="Enter Occupation" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Average Monthly Income</label>
                                                                    <input type="number" class="form-control" id="monthlyincome" placeholder="Enter Average Monthly Income" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Previosly Used Method</label>
                                                                    <input type="text" class="form-control" id="prevmethod" placeholder="Enter Previosly Used Method" required />
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Date</label>
                                                                            <input type="text" class="form-control datepicker" id="date<?php echo $fetch['patient_id'];?>" placeholder="Enter Date Today" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Time</label>
                                                                            <div class="input-group bootstrap-timepicker">
                                                                                <input type="text" class="form-control timepicker" id="time" placeholder="Enter Time Today" required />
                                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Purok</label>
                                                                    <input type="text" class="form-control" id="purok<?php echo $fetch['patient_id'];?>" value="<?php echo $fetch['purok'];?>" style="color:#444444;" readonly required />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Street Address</label>
                                                                    <textarea style="color:#444444;" class="form-control" spellcheck="false" id="streetaddress<?php echo $fetch['patient_id'];?>" value="<?php echo $fetch['patient_id'];?>" readonly><?php echo $fetch['street_address'];?></textarea>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>No. of Living Children</label>
                                                                            <input type="number" class="form-control" id="livingchildren" placeholder="Enter No. of Living Children" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Plan More Children</label>
                                                                            <select class="form-control select" style="display: none;" id="acceptor">
                                                                                <option>Select</option>
                                                                                <option>Yes</option>
                                                                                <option>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Reason for Practicing FP</label>
                                                                    <textarea class="form-control" spellcheck="false" id="reason"></textarea>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Method Accepted</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="methodaccepted">
                                                                        <option>COC</option>
                                                                        <option>Contraceptive patch</option>
                                                                        <option>POP</option>
                                                                        <option>Injectable</option>
                                                                        <option>Condom</option>
                                                                        <option>IUD</option>
                                                                        <option>BTL</option>
                                                                        <option>VSC</option>
                                                                        <option>LAM</option>
                                                                        <option>SDM</option>
                                                                        <option>BBT</option>
                                                                        <option>Billings/Cervical Mucus/Ovulatino Method
                                                                        </option>
                                                                        <option>Sympto-thermal</option>
                                                                    </select>
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
                                                                <h5><strong>Medical History</strong></h5>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Heent</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="heent">
                                                                                <option>Epilepsy/Convulsion/Seizure</option>
                                                                                <option>Severe Headache/dizziness</option>
                                                                                <option>Visual disturbance/blurring of vision
                                                                                </option>
                                                                                <option>Yellowish conjunctiva</option>
                                                                                <option>Enlarged thyroid</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Chest/Heart</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="chestheart">
                                                                                <option>Severe chest pain</option>
                                                                                <option>Shortness of breath and easy fatigability
                                                                                </option>
                                                                                <option>Breast/axillary masses</option>
                                                                                <option>Nipple discharges (specify if blood or pus)
                                                                                </option>
                                                                                <option>Systolic of 140 & above</option>
                                                                                <option>Diastolic of 90 & above</option>
                                                                                <option>Family history of CVA (strokes),
                                                                                    hypertension asthma,
                                                                                    rheumatic heart disease</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Extremities</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="extremities">
                                                                                <option>Severe varicosities</option>
                                                                                <option>Swelling or severe pain in the legs not
                                                                                    related to
                                                                                    injuries</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>History of any of the following</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="history">
                                                                                <option>Smoking</option>
                                                                                <option>Allergies</option>
                                                                                <option>Drug Intake (anti-tuberculosis,
                                                                                    anti-diabetic,
                                                                                    anticonvulsant)</option>
                                                                                <option>Bleeding tendencies (nose, gums, etc.)
                                                                                </option>
                                                                                <option>Anemia</option>
                                                                                <option>Diabetes</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Abdomen</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="abdomen">
                                                                                <option>Mass in the abdomen</option>
                                                                                <option>History of gallbladder disease</option>
                                                                                <option>History of liver disease</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Genital</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="genital">
                                                                                <option>Mass in the uterus</option>
                                                                                <option>Vaginal discharge</option>
                                                                                <option>Intermenstrual bleeding</option>
                                                                                <option>Postcoital bleeding</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Skin</label>
                                                                    <select class="form-control select" style="display: none;" id="skin">
                                                                        <option>None</option>
                                                                        <option>Yellowish Skin</option>
                                                                    </select>
                                                                </div>
                                                                <h5><strong>STI Risks</strong></h5>
                                                                <div class="form-group">
                                                                    <select class="form-control select" style="display: none;" id="stirisk">
                                                                        <option>None</option>
                                                                        <option>With history of multiple partners</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>For Women</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="forwomen">
                                                                                <option>Unusual discharge from vagina
                                                                                </option>
                                                                                <option>Itching or sores in or around vagina
                                                                                </option>
                                                                                <option>Pain or burning sensation</option>
                                                                                <option>Treated for STIs in the past
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>For Men</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="formen">
                                                                                <option>Pain or burning sensation</option>
                                                                                <option>Open sores anywhere in genital area
                                                                                </option>
                                                                                <option>Pus corning from penis</option>
                                                                                <option>Swollen testicles or penis</option>
                                                                                <option>Treated for STIs in the past
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5><strong>Obsterical History</strong></h5>
                                                                <div class="form-row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>No. of Pregnancies</label>
                                                                            <input type="number" class="form-control" id="pregnancies" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                            <label>Full Term</label>
                                                                            <input type="number" class="form-control" id="fullterm" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Premature</label>
                                                                            <input type="number" class="form-control" id="premature" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                            <label>Abortions</label>
                                                                            <input type="number" class="form-control" id="abortions" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Living
                                                                                Children</label>
                                                                            <input type="number" class="form-control" id="livingchildren" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                            <label>Date of last delivery</label>
                                                                            <input type="text" class="form-control datepicker" id="dateoflastdelivery" placeholder="Enter Date of last delivery" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Type of last delivery</label>
                                                                            <input type="text" class="form-control" id="type" placeholder="Enter Type of last delivery" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                            <label>Past menstrual period</label>
                                                                            <input type="text" class="form-control" id="pastmenstrualperiod" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Last menstrual period</label>
                                                                            <input type="text" class="form-control" id="lastmenstrualperiod" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>History of any of the following</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="history2">
                                                                        <option>Hydatidiform mole (within the last 12
                                                                            months)</option>
                                                                        <option>Ectopetic pregnancy</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Duration and character of Menstrual
                                                                        bleeding</label>
                                                                    <textarea class="form-control" spellcheck="false" id="dcmenstrualbleeding"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
                                                    <a href="laboratory_request.php?id=<?php echo $_GET['id']?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                                </div>

                                                <div class="tab-pane" id="tab-third">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-6">
                                                                <h5><strong>Physical Examination</strong></h5>
                                                                <div class="form-row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Blood Pressure</label>
                                                                            <input type="text" class="form-control" id="bp" placeholder="Enter mmhg" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                            <label>Weight</label>
                                                                            <input type="text" class="form-control" id="weight" placeholder="Enter kg." required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Height</label>
                                                                            <input type="text" class="form-control" id="height" placeholder="Enter cm." required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Pulse Rate</label>
                                                                            <input type="text" class="form-control" id="pulserate" placeholder="Enter mins." required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Conjunctiva</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="conjuntiva" required>
                                                                                <option>Pale</option>
                                                                                <option>Yellowish</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Neck</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="neck">
                                                                                <option>Enlarged thyroid</option>
                                                                                <option>Enlarged lymph nodes</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Breast</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="breast" required>
                                                                                <option>Mass</option>
                                                                                <option>Nipple discharge</option>
                                                                                <option>Skin - orange peel or dimpling</option>
                                                                                <option>Enlarged axillary lymph nodes</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Thorax</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="thorax">
                                                                                <option>Abnormal heart sounds/cardiac rate</option>
                                                                                <option>Abnormal breath sounds/respiratory rate</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Abdomen</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="abdomen" required>
                                                                                <option>Enlarged liver</option>
                                                                                <option>Mass</option>
                                                                                <option>Tenderness</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Extremities</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="extremities">
                                                                                <option>Edema</option>
                                                                                <option>Varicosities</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <h5><strong>Pelvic Examination</strong></h5>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Perineum</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="perineum" required>
                                                                                <option>Scars</option>
                                                                                <option>Warts</option>
                                                                                <option>Laceration</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Vagina</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="vagina">
                                                                                <option>Congested</option>
                                                                                <option>Bartholin's cyst</option>
                                                                                <option>Warts</option>
                                                                                <option>Skene's Gland Discharge</option>
                                                                                <option>Rectocoele</option>
                                                                                <option>Cystocoele</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Cervix</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="cervix" required>
                                                                                <option>Congested</option>
                                                                                <option>Erosion</option>
                                                                                <option>Discharge</option>
                                                                                <option>Polyps/cysts</option>
                                                                                <option>Laceration</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Consistency</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="consistency">
                                                                                <option>Firm</option>
                                                                                <option>Soft</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group">
                                                                    <label>Adnexa</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="adnexa">
                                                                        <option>Mass</option>
                                                                        <option>Tenderness</option>
                                                                    </select>
                                                                </div>
                                                                <h6><strong>Uterus</strong></h6>
                                                                <div class="form-row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-left:-10px;">
                                                                            <label>Position</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="position" required>
                                                                                <option>Mid</option>
                                                                                <option>Anteflexed</option>
                                                                                <option>Retroflexed</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group" style="margin-right:-10px;">
                                                                            <label>Size</label>
                                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="size">
                                                                                <option>Normal</option>
                                                                                <option>Small</option>
                                                                                <option>Large</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                &nbsp;
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Mass</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="size">
                                                                        <option>none</option>
                                                                        <option>Yes</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Uterine Depth (for intendted IUD users)</label>
                                                                    <input type="text" class="form-control" id="uterinedepth" placeholder="Enter Uterine Depth in cms." required />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button type="submit" class="btn btn-info" name="add_laboratory_request"><span class="fa fa-check"></span>Save</button>
                                                    <a href="laboratory_request.php?id=<?php echo $_GET['id']?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                                </div>

                                                <div class="tab-pane" id="tab-fourth">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4">
                                                                <label>Option</label>
                                                                <div class="form-group">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Pale" />
                                                                        History of domestic violence or VAW</label><br>
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Yellowish" />
                                                                        Unpleasant relationship with partner</label> <br>
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Yellowish" />
                                                                        Partner does not approve of the visit to FP
                                                                        Clinic</label><br>
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="q6[]" value="Yellowish" />
                                                                        Partner disagrees to use FP</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Referred to</label>
                                                                    <select class="form-control select" style="display: none;" id="stirisks">
                                                                        <option>DSWD</option>
                                                                        <option>WCPU</option>
                                                                        <option>NGO'S</option>
                                                                        <option>Others</option>
                                                                    </select>
                                                                </div>
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
