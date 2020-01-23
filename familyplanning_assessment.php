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
    <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
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
            $query2 = $conn->query("SELECT * FROM `family_planning` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
            ?>
                <li>Transaction</li>
                <li>Family Planning</li>
                <li>Assessment</li>
                <li><mark><strong><?php echo $fetch['patient_name'];?></strong></mark></li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <div id="alert" class="alert alert-info" style="display:none;">
                            <center><span id="alerttext"></span></center>
                        </div>
                        <div id="alert2" class="alert alert-danger" style="display:none;">
                            <center><span id="alerttext2"></span></center>
                        </div>
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Medical History and Obstetrical History</a>
                                </li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Physical Examination and Pelvic Examination</a>
                                </li>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button type="button" class="btn btn-success" id="addassessment"><span class="fa fa-check"></span>Save</button>
                                        <a href="patient_familyplanning?patient_id=<?php echo $fetch['patient_id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                    </div>
                                </div>
                            </ul>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 520px;">
                                <form id="familyplanningform">
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <h5><strong>Medical History</strong></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Heent</label>
                                                                    <input type="hidden" class="form-control" value="<?php echo $fetch2['family_planning_id'];?>" id="family_planning_id" required />
                                                                    <input type="hidden" class="form-control" value="<?php echo $fetch['patient_id'];?>" id="patient_id" required />
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="heent" name="heent[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Epilepsy/Convulsion/Seizure">Epilepsy/Convulsion/Seizure</option>
                                                                        <option value="Severe Headache/dizziness">Severe Headache/dizziness</option>
                                                                        <option value="Visual disturbance/blurring of vision">Visual disturbance/blurring of vision
                                                                        </option>
                                                                        <option value="Yellowish conjunctiva">Yellowish conjunctiva</option>
                                                                        <option value="Enlarged thyroid">Enlarged thyroid</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Chest/Heart</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="chestheart" name="chestheart[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Severe chest pain">Severe chest pain</option>
                                                                        <option value="Shortness of breath and easy fatigability">Shortness of breath and easy fatigability
                                                                        </option>
                                                                        <option value="Breast/axillary masses">Breast/axillary masses</option>
                                                                        <option value="Nipple discharges (specify if blood or pus)">Nipple discharges (specify if blood or pus)
                                                                        </option>
                                                                        <option value="Systolic of 140 & above">Systolic of 140 & above</option>
                                                                        <option value="Diastolic of 90 & above">Diastolic of 90 & above</option>
                                                                        <option value="Family history of CVA (strokes),
                                                                            hypertension asthma,
                                                                            rheumatic heart disease">Family history of CVA (strokes),
                                                                            hypertension asthma,
                                                                            rheumatic heart disease</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Abdomen</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="abdomen" name="abdomen[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Mass in the abdomen">Mass in the abdomen</option>
                                                                        <option value="History of gallbladder disease">History of gallbladder disease</option>
                                                                        <option value="History of liver disease">History of liver disease</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Genital</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="genital" name="genital[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Mass in the uterus">Mass in the uterus</option>
                                                                        <option value="Vaginal discharge">Vaginal discharge</option>
                                                                        <option value="Intermenstrual bleeding">Intermenstrual bleeding</option>
                                                                        <option value="Postcoital bleeding">Postcoital bleeding</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Extremities</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="extremities" name="extremities[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Severe varicosities">Severe varicosities</option>
                                                                        <option value="Swelling or severe pain in the legs not
                                                                            related to
                                                                            injuries">Swelling or severe pain in the legs not
                                                                            related to
                                                                            injuries</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>History of any of the following</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="history" name="history[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Smoking">Smoking</option>
                                                                        <option value="Allergies">Allergies</option>
                                                                        <option value="Drug Intake (anti-tuberculosis,
                                                                            anti-diabetic,
                                                                            anticonvulsant)">Drug Intake (anti-tuberculosis,
                                                                            anti-diabetic,
                                                                            anticonvulsant)</option>
                                                                        <option value="Bleeding tendencies (nose, gums, etc.)">Bleeding tendencies (nose, gums, etc.)
                                                                        </option>
                                                                        <option value="Anemia">Anemia</option>
                                                                        <option value="Diabetes">Diabetes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-group">
                                                            <label>Skin</label>
                                                            <select class="form-control select" style="display: none;" id="skin">
                                                                <option value="None">None</option>
                                                                <option value="Yellowish Skin">Yellowish Skin</option>
                                                            </select>
                                                        </div>
                                                        <h5><strong>STI Risks</strong></h5>
                                                        <div class="form-group">
                                                            <select class="form-control select" style="display: none;" id="stirisk">
                                                                <option value="None">None</option>
                                                                <option value="With history of multiple partners">With history of multiple partners</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>For Women</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="forwomen" name="forwomen[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Unusual discharge from vagina">Unusual discharge from vagina
                                                                        </option>
                                                                        <option value="Itching or sores in or around vagina">Itching or sores in or around vagina
                                                                        </option>
                                                                        <option value="Pain or burning sensation">Pain or burning sensation</option>
                                                                        <option value="Treated for STIs in the past">Treated for STIs in the past
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>For Men</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="formen" name="formen[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Pain or burning sensation">Pain or burning sensation</option>
                                                                        <option value="Open sores anywhere in genital area">Open sores anywhere in genital area
                                                                        </option>
                                                                        <option value="Pus corning from penis">Pus corning from penis</option>
                                                                        <option value=">Swollen testicles or penis">Swollen testicles or penis</option>
                                                                        <option value="Treated for STIs in the past">Treated for STIs in the past
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5><strong>Obstetrical History</strong></h5>
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
                                                                    <input type="text" class="form-control" id="typeoflastdelivery" placeholder="Enter Type of last delivery" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
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
                                                            <select multiple class="form-control select" data-live-search="true" style="display: none;" id="history2" name="history2[]">
                                                                <option value="None">None</option>
                                                                <option value="Hydatidiform mole (within the last 12
                                                                    months)">Hydatidiform mole (within the last 12
                                                                    months)</option>
                                                                <option value="Ectopetic pregnancy">Ectopetic pregnancy</option>
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
                                        </div>

                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <h5><strong>Physical Examination</strong></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Blood Pressure</label>
                                                                    <input type="text" class="mask_bp form-control" id="bp" placeholder="Enter mmHg" required />
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
                                                                    <input type="text" class="form-control" id="pr" placeholder="Enter mins." required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Conjunctiva</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="conjuntiva" name="conjunctiva[]" required>
                                                                        <option value="None">None</option>
                                                                        <option value="Pale">Pale</option>
                                                                        <option value="Yellowish">Yellowish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Neck</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="neck" name="neck[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Enlarged thyroid">Enlarged thyroid</option>
                                                                        <option value="Enlarged lymph nodes">Enlarged lymph nodes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Breast</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="breast" name="breast[]" required>
                                                                        <option value="None">None</option>
                                                                        <option value="Mass">Mass</option>
                                                                        <option value="Nipple discharge">Nipple discharge</option>
                                                                        <option value="Skin - orange peel or dimpling">Skin - orange peel or dimpling</option>
                                                                        <option value="Enlarged axillary lymph nodes">Enlarged axillary lymph nodes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Thorax</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="thorax" name="thorax[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Abnormal heart sounds/cardiac rate">Abnormal heart sounds/cardiac rate</option>
                                                                        <option value="Abnormal breath sounds/respiratory rate">Abnormal breath sounds/respiratory rate</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Abdomen</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="abdomen2" name="abdomen2[]" required>
                                                                        <option value="None">None</option>
                                                                        <option value="Enlarged liver">Enlarged liver</option>
                                                                        <option value="Mass">Mass</option>
                                                                        <option value="Tenderness">Tenderness</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Extremities</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="extremities2" name="extremities2[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Edema">Edema</option>
                                                                        <option value="Varicosities">Varicosities</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <h5><strong>Risks for Violence Against Women (VAW)</strong></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Option</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="risks" name="risks[]">
                                                                        <option value="None">None</option>
                                                                        <option value="History of domestic violence or VAW">History of domestic violence or VAW</option>
                                                                        <option value="Unpleasant relationship with partner">Unpleasant relationship with partner</option>
                                                                        <option value="Partner does not approve of the visit to FP Clinic">Partner does not approve of the visit to FP
                                                                            Clinic</option>
                                                                        <option value="Partner disagrees to use FP">Partner disagrees to use FP</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Referred to</label>
                                                                    <select class="form-control select" style="display: none;" data-live-search="true" id="referredrisks">
                                                                        <option value="None">None</option>
                                                                        <option value="DSWD">DSWD</option>
                                                                        <option value="WCPU">WCPU</option>
                                                                        <option value="NGOs">NGOs</option>
                                                                        <option value="Others">Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            &nbsp;
                                                            <div class="form-group" id="category1" style="display: none;">
                                                                <label>Others</label>
                                                                <input type="text" class="form-control" id="risksothers" placeholder="please specify" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <h5><strong>Pelvic Examination</strong></h5>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Perineum</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="perineum" name="perineum[]" required>
                                                                        <option value="None">None</option>
                                                                        <option value="Scars">Scars</option>
                                                                        <option value="Warts">Warts</option>
                                                                        <option value="Reddish">Reddish</option>
                                                                        <option value="Laceration">Laceration</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Vagina</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="vagina" name="vagina[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Congested">Congested</option>
                                                                        <option value="Bartholin cyst">Bartholin's cyst</option>
                                                                        <option value="Warts">Warts</option>
                                                                        <option value="Skene Gland Discharge">Skene's Gland Discharge</option>
                                                                        <option value="Rectocoele">Rectocoele</option>
                                                                        <option value="Cystocoele">Cystocoele</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Cervix</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="cervix" name="cervix[]" required>
                                                                        <option value="None">None</option>
                                                                        <option value="Congested">Congested</option>
                                                                        <option value="Erosion">Erosion</option>
                                                                        <option value="Discharge">Discharge</option>
                                                                        <option value="Polyps/cysts">Polyps/cysts</option>
                                                                        <option value="Laceration">Laceration</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Consistency</label>
                                                                    <select multiple class="form-control select" style="display: none;" id="consistency" name="consistency[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Firm">Firm</option>
                                                                        <option value="Soft">Soft</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <h6><strong>Uterus</strong></h6>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Position</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="position" name="position[]" required>
                                                                        <option value="None">None</option>
                                                                        <option value="Mid">Mid</option>
                                                                        <option value="Anteflexed">Anteflexed</option>
                                                                        <option value="Retroflexed">Retroflexed</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Size</label>
                                                                    <select multiple class="form-control select" style="display: none;" id="size" name="size[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Normal">Normal</option>
                                                                        <option value="Small">Small</option>
                                                                        <option value="Large">Large</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Mass</label>
                                                                    <select class="form-control select" data-live-search="true" style="display: none;" id="mass">
                                                                        <option value="None">None</option>
                                                                        <option value="Yes">Yes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Uterine Depth (for intendted IUD users)</label>
                                                                    <input type="text" class="form-control" id="uterinedepth" placeholder="Enter Uterine Depth in cms." required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                                                    <label>Adnexa</label>
                                                                    <select multiple class="form-control select" data-live-search="true" style="display: none;" id="adnexa" name="adnexa[]">
                                                                        <option value="None">None</option>
                                                                        <option value="Mass">Mass</option>
                                                                        <option value="Tenderness">Tenderness</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
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
    <script type="text/javascript" src="functions/crudfpassessment.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="assets2/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#referredrisks').change(function() {
                var risks = $('#referredrisks').val();

                switch (risks) {

                    case 'DSWD':
                        document.getElementById("category1").style.display = "none";
                        break;

                    case 'WCPU':
                        document.getElementById("category1").style.display = "none";
                        break;

                    case 'NGOs':
                        document.getElementById("category1").style.display = "none";
                        break;

                    case 'Others':
                        document.getElementById("category1").style.display = "block";
                        break;

                    default:
                        document.getElementById("category1").style.display = "none";
                }
            });
        });

    </script>


</body>

</html>
