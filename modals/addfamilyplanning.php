<div class="modal fade" id="new_familyplanning" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New Family Planning</h4>
            </div>
            <div class="modal-body">
                <form id="patientform">
                    <div class="row">

                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <!-- START ACCORDION -->
                            <div class="panel-group accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#personalInfo">
                                                Personal Information
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-body" id="personalInfo">
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

					while($fetch = $query->fetch_array()){
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
                                                <input type="text" class="form-control datepicker" id="birthdate"
                                                    placeholder="Enter Date of Birth" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Highest Education</label>
                                                        <input type="text" class="form-control" id="education"
                                                            placeholder="Enter highest Education" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Occupation</label>
                                                        <input type="text" class="form-control" id="occupation"
                                                            placeholder="Enter Occupation" required />
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
                                                <input type="text" class="form-control datepicker" id="spousebirthdate"
                                                    placeholder="Enter Date of Birth" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Highest Education</label>
                                                        <input type="text" class="form-control" id="education"
                                                            placeholder="Enter highest Education" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Occupation</label>
                                                        <input type="text" class="form-control" id="occupation"
                                                            placeholder="Enter Occupation" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Average Monthly Income</label>
                                                <input type="number" class="form-control" id="monthlyincome"
                                                    placeholder="Enter Average Monthly Income" required />
                                            </div>
                                            <!-- &nbsp; -->

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Previosly Used Method</label>
                                                <input type="text" class="form-control" id="prevmethod"
                                                    placeholder="Enter Previosly Used Method" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input type="text" class="form-control datepicker" id="date"
                                                            placeholder="Enter Date Today" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Time</label>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input type="text" class="form-control timepicker" id="time"
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
                                                    <div class="form-group">
                                                        <label>No. of Living Children</label>
                                                        <input type="number" class="form-control" id="livingchildren"
                                                            placeholder="Enter No. of Living Children" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Plan More Children</label>
                                                        <select class="form-control select" style="display: none;"
                                                            id="acceptor">
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
                                                <select multiple class="form-control select" data-live-search="true"
                                                    style="display: none;" id="methodaccepted">
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
                                                    <option>Billings/Cervical Mucus/Ovulatino Method</option>
                                                    <option>Sympto-thermal</option>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColTwo">
                                                    Medical History
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-body" id="accOneColTwo">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>HEENT</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="heent">
                                                        <option>Epilepsy/Convulsion/Seizure</option>
                                                        <option>Severe Headache/dizziness</option>
                                                        <option>Visual disturbance/blurring of vision</option>
                                                        <option>Yellowish conjunctiva</option>
                                                        <option>Enlarged thyroid</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>ABDOMEN</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="abdomen">
                                                        <option>Mass in the abdomen</option>
                                                        <option>History of gallbladder disease</option>
                                                        <option>History of liver disease</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>EXTREMITIES</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="extremities">
                                                        <option>Severe varicosities</option>
                                                        <option>Swelling or severe pain in the legs not related to
                                                            injuries</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>HISTORY OF ANY OF THE FOLLOWING</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="history">
                                                        <option>Smoking</option>
                                                        <option>Allergies</option>
                                                        <option>Drug Intake (anti-tuberculosis, anti-diabetic,
                                                            anticonvulsant)</option>
                                                        <option>Bleeding tendencies (nose, gums, etc.)</option>
                                                        <option>Anemia</option>
                                                        <option>Diabetes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- &nbsp;&nbsp;&nbsp; -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>CHEST/HEART</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="chestheart">
                                                        <option>Severe chest pain</option>
                                                        <option>Shortness of breath and easy fatigability</option>
                                                        <option>Breast/axillary masses</option>
                                                        <option>Nipple discharges (specify if blood or pus)</option>
                                                        <option>Systolic of 140 & above</option>
                                                        <option>Diastolic of 90 & above</option>
                                                        <option>Family history of CVA (strokes), hypertension asthma,
                                                            rheumatic heart disease</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>GENITAL</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="genital">
                                                        <option>Mass in the uterus</option>
                                                        <option>Vaginal discharge</option>
                                                        <option>Intermenstrual bleeding</option>
                                                        <option>Postcoital bleeding</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>SKIN</label>
                                                    <select class="form-control select" style="display: none;"
                                                        id="skin">
                                                        <option>None</option>
                                                        <option>Yellowish Skin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColThree">
                                                    Obsterical History
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-body" id="accOneColThree">
                                            <div class="col-md-6">
                                                <h5 style="font-size: 12px;font-weight: bold;">Number of pregnancies:
                                                </h5>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Full Term</label>
                                                            <input type="number" class="form-control" id="fullterm"
                                                                required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Premature</label>
                                                            <input type="number" class="form-control" id="premature"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Abortions</label>
                                                            <input type="number" class="form-control" id="abortions"
                                                                required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label style="font-size: 10.5px;">Living Children</label>
                                                            <input type="number" class="form-control"
                                                                id="livingchildren" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Past menstrual period</label>
                                                            <input type="text" class="form-control"
                                                                id="pastmenstrualperiod" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last menstrual period</label>
                                                            <input type="text" class="form-control"
                                                                id="lastmenstrualperiod" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- &nbsp;&nbsp;&nbsp; -->
                                            <div class="col-md-6">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Date of last delivery</label>
                                                            <input type="text" class="form-control datepicker"
                                                                id="dateoflastdelivery"
                                                                placeholder="Enter Date of last delivery" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Type of last delivery</label>
                                                            <input type="text" class="form-control" id="type"
                                                                placeholder="Enter Occupation" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Duration and character of Menstrual bleeding</label>
                                                    <textarea class="form-control" spellcheck="false"
                                                        id="dcmenstrualbleeding"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>HISTORY OF ANY OF THE FOLLOWING</label>
                                                    <select multiple class="form-control select" data-live-search="true"
                                                        style="display: none;" id="history2">
                                                        <option>Hydatidiform mole (within the last 12 months)</option>
                                                        <option>Ectopetic pregnancy</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#accOneColFour">
                                                    STI Risks
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-body" id="accOneColFour">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>STI Risks</label>
                                                    <select class="form-control select" style="display: none;"
                                                        id="stirisks">
                                                        <option>None</option>
                                                        <option>With history of multiple partners</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>For Women</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="forwomen">
                                                                <option>Unusual discharge from vagina</option>
                                                                <option>Itching or sores in or around vagina</option>
                                                                <option>Pain or burning sensation</option>
                                                                <option>Treated for STIs in the past</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>For Men</label>
                                                            <select multiple class="form-control select"
                                                                data-live-search="true" style="display: none;"
                                                                id="formen">
                                                                <option>Pain or burning sensation</option>
                                                                <option>Open sores anywhere in genital area</option>
                                                                <option>Pus corning from penis</option>
                                                                <option>Swollen testicles or penis</option>
                                                                <option>Treated for STIs in the past</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- END ACCORDION -->
                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>