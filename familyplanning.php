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
                <li><mark><strong>Family Planning Service Record</strong></mark></li>
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
                                        <li><a href="#tab-shit" role="tab" data-toggle="tab">Medical History</a>
                                        </li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Obsterical History</a>
                                        </li>
                                        <li><a href="#tab-third" role="tab" data-toggle="tab">STI Risks</a></li>
                                        <li><a href="#tab-fourth" role="tab" data-toggle="tab">Physical Examination</a>
                                        </li>
                                        <li><a href="#tab-fifth" role="tab" data-toggle="tab">Pelvic Examination</a>
                                        </li>
                                        <li><a href="#tab-sixth" role="tab" data-toggle="tab">Risks for Violence </a>
                                        </li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Type of Acceptor</label>
                                                            <select class="form-control select" style="display: none;"
                                                                id="acceptor">
                                                                <option>Select</option>
                                                                <option>New to the Program</option>
                                                                <option>Continuing User</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Patient Name</label>
                                                            <select class="form-control select" data-live-search="true"
                                                                id="provider">
                                                                <option value="#">Select</option>
                                                                <?php
	                                                            $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					                                            $query = $conn->query("SELECT * FROM `patient` where `status` = 'Registered'") or die(mysqli_error());

                                                                 while($fetch = $query->fetch_array())
                                                                {
									                                ?>
                                                                <option value="<?php echo $fetch['patient_id'];?>">
                                                                    <?php echo $fetch['patient_name']?></option>
                                                                <?php
					                                            }
									                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <input type="text" class="form-control datepicker"
                                                                id="birthdate" placeholder="Enter Date of Birth"
                                                                required />
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Highest Education</label>
                                                                    <input type="text" class="form-control"
                                                                        id="education"
                                                                        placeholder="Enter highest Education"
                                                                        required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Occupation</label>
                                                                    <input type="text" class="form-control"
                                                                        id="occupation" placeholder="Enter Occupation"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Spouse Name</label>
                                                            <input type="text" class="form-control" id="spouse"
                                                                placeholder="Enter Complete Spouse Name" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Spouse Date of Birth</label>
                                                            <input type="text" class="form-control datepicker"
                                                                id="spousebirthdate" placeholder="Enter Date of Birth"
                                                                required />
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Spouse Highest Education</label>
                                                                    <input type="text" class="form-control"
                                                                        id="education"
                                                                        placeholder="Enter highest Education"
                                                                        required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Spouse Occupation</label>
                                                                    <input type="text" class="form-control"
                                                                        id="occupation" placeholder="Enter Occupation"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-group">
                                                            <label>Average Monthly Income</label>
                                                            <input type="number" class="form-control" id="monthlyincome"
                                                                placeholder="Enter Average Monthly Income" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Previosly Used Method</label>
                                                            <input type="text" class="form-control" id="prevmethod"
                                                                placeholder="Enter Previosly Used Method" required />
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Date</label>
                                                                    <input type="text" class="form-control datepicker"
                                                                        id="date" placeholder="Enter Date Today"
                                                                        required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Time</label>
                                                                    <div class="input-group bootstrap-timepicker">
                                                                        <input type="text"
                                                                            class="form-control timepicker" id="time"
                                                                            placeholder="Enter Time Today" required />
                                                                        <span class="input-group-addon"><span
                                                                                class="glyphicon glyphicon-time"></span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <textarea class="form-control" spellcheck="false"
                                                                id="address"></textarea>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>No. of Living Children</label>
                                                                    <input type="number" class="form-control"
                                                                        id="livingchildren"
                                                                        placeholder="Enter No. of Living Children"
                                                                        required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Plan More Children</label>
                                                                    <select class="form-control select"
                                                                        style="display: none;" id="acceptor">
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
                                                            <textarea class="form-control" spellcheck="false"
                                                                id="reason"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Method Accepted</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="methodaccepted">
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
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
                                        <div class="tab-pane" id="tab-shit">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Heent</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="heent">
                                                                <option>Epilepsy/Convulsion/Seizure</option>
                                                                <option>Severe Headache/dizziness</option>
                                                                <option>Visual disturbance/blurring of vision
                                                                </option>
                                                                <option>Yellowish conjunctiva</option>
                                                                <option>Enlarged thyroid</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Abdomen</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="abdomen">
                                                                <option>Mass in the abdomen</option>
                                                                <option>History of gallbladder disease</option>
                                                                <option>History of liver disease</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Extremities</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="extremities">
                                                                <option>Severe varicosities</option>
                                                                <option>Swelling or severe pain in the legs not
                                                                    related to
                                                                    injuries</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>History of any of the following</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="history">
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
                                                    <!-- &nbsp;&nbsp;&nbsp; -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Chest/Heart</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="chestheart">
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
                                                        <div class="form-group">
                                                            <label>Genital</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="genital">
                                                                <option>Mass in the uterus</option>
                                                                <option>Vaginal discharge</option>
                                                                <option>Intermenstrual bleeding</option>
                                                                <option>Postcoital bleeding</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Skin</label>
                                                            <select class="form-control select" style="display: none;"
                                                                id="skin">
                                                                <option>None</option>
                                                                <option>Yellowish Skin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <h5 style="font-size: 12px;font-weight: bold;">Number of
                                                            Pregnancies:
                                                        </h5>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Full Term</label>
                                                                    <input type="number" class="form-control"
                                                                        id="fullterm" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Premature</label>
                                                                    <input type="number" class="form-control"
                                                                        id="premature" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Abortions</label>
                                                                    <input type="number" class="form-control"
                                                                        id="abortions" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Living
                                                                        Children</label>
                                                                    <input type="number" class="form-control"
                                                                        id="livingchildren" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Past menstrual period</label>
                                                                    <input type="text" class="form-control"
                                                                        id="pastmenstrualperiod" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Last menstrual period</label>
                                                                    <input type="text" class="form-control"
                                                                        id="lastmenstrualperiod" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    &nbsp;
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-left:-10px;">
                                                                    <label>Date of last delivery</label>
                                                                    <input type="text" class="form-control datepicker"
                                                                        id="dateoflastdelivery"
                                                                        placeholder="Enter Date of last delivery"
                                                                        required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" style="margin-right:-10px;">
                                                                    <label>Type of last delivery</label>
                                                                    <input type="text" class="form-control" id="type"
                                                                        placeholder="Enter Type of last delivery"
                                                                        required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <div class="form-group">
                                                            <label>History of any of the following</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="history2">
                                                                <option>Hydatidiform mole (within the last 12
                                                                    months)</option>
                                                                <option>Ectopetic pregnancy</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Duration and character of Menstrual
                                                                bleeding</label>
                                                            <textarea class="form-control" spellcheck="false"
                                                                id="dcmenstrualbleeding"></textarea>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
                                        <div class="tab-pane" id="tab-third">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>STI Risks</label>
                                                            <select class="form-control select" style="display: none;"
                                                                id="stirisks">
                                                                <option>None</option>
                                                                <option>With history of multiple partners</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>For Women</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="forwomen">
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
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>For Men</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="formen">
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
                                            <hr>
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
                                        <div class="tab-pane" id="tab-fourth">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Blood Pressure</label>
                                                            <input type="text" class="form-control" id="bp"
                                                                placeholder="Enter Blood pressure" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Weight</label>
                                                            <input type="text" class="form-control" id="weight"
                                                                placeholder="Enter Weight" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Pulse Rate</label>
                                                            <input type="text" class="form-control" id="pulserate"
                                                                placeholder="Enter Pulse Rate" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                        <label>Breast</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Mass</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Nipple discharge</label>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Skin -- orange peel or dimpling</label>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Enlarged axillary lymph nodes</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Abdomen</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Enlarged Liver</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Mass</label>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Tenderness</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Extremities</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Edema</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Mass</label>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Varicosities</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Conjunctive</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Pale</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Yellowish</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Neck</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Enlarged Thyroid</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Enlarged lymph nodes</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <label>Thorax</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Abnormal heart sounds/cardiac rate</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Abnormal breath sounds/respiratory rate</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
                                        <div class="tab-pane" id="tab-fifth">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                        <label>Vagina</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Congested</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Bartholin's cyst</label> <br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Warts</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Skene's Gland Discharge</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Rectocoele</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Cystocoele</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Vagina Size</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Normal</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Small</label> <br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Large</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Perineum</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Scars</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Warts</label> <br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Reddish</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Laceration</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Uterus Position</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Mid</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Anteflexed</label> <br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Retroflexed</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Cervix</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Congested</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Erosion</label> <br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Discharge</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Polyps/cysts</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Laceration</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-2">
                                                        <label>Adnexa</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Mass</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Tenderness</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Consistency</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                Firm</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Soft</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <div class="form-group">
                                                            <label>Uterine Depth</label>
                                                            <input type="text" class="form-control" id="bp"
                                                                placeholder="Enter Uterine Depth in cms." required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
                                        <div class="tab-pane" id="tab-sixth">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <label>Option</label>
                                                        <div class="form-group">
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Pale" />
                                                                History of domestic violence or VAW</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Unpleasant relationship with partner</label> <br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Partner does not approve of the visit to FP Clinic</label><br>
                                                            <label class="check"><input type="checkbox"
                                                                    class="icheckbox" name="q6[]" value="Yellowish" />
                                                                Partner disagrees to use FP</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                            <label>Referred to</label>
                                                            <select class="form-control select" style="display: none;"
                                                                id="stirisks">
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
                                            <button type="submit" class="btn btn-info"
                                                name="add_laboratory_request"><span
                                                    class="fa fa-check"></span>Save</button>
                                            <a href="laboratory_request.php?id=<?php echo $_GET['id']?>"
                                                class="btn btn-danger"><span class="fa fa-times"></span>Cancel</a>
                                        </div>
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
    </div>
    <?php require 'modals/addfamilyplanning.php'?>
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