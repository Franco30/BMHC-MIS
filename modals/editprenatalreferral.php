<div class="modal fade" id="editprenatalreferral<?php echo $fetch['referral_id']?>" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <center>
                    <h4 class="modal-title" id="defModalHead"><strong>Edit Prenatal Referral Record</strong></h4>
                </center>
            </div>
            <div class="modal-body">
                <form id="prenatalreferralform">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="text" class="form-control datepicker" id="date2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['referral_date']?>" required />
                            </div>
                            <div class="form-group" id="category3">
                                <label>Patient Name:</label>
                                <input type="text" class="form-control" id="patient_name2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['patient_name']?>" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Weight:</label>
                                        <input type="text" class="form-control" id="weight2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['weight']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>BP:</label>
                                        <input type="text" class="mask_bp form-control" id="bp2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['bp']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Temperature:</label>
                                        <input type="text" class="mask_temp form-control" id="temp2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['temp']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Age:</label>
                                        <input type="number" class="form-control" id="age2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['age']?>" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <h6>weeks AOG via UTZ:</h6>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Gravida:</label>
                                        <input type="text" class="form-control" id="gravida<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['gravida']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Para:</label>
                                        <input type="text" class="form-control" id="para<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['para']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Fundal Height:</label>
                                        <input type="text" class="form-control" id="fh<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['fh']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label style="font-size: 11.5px;">Fetal Heart Beat:</label>
                                        <input type="text" class="form-control" id="fhb<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['fhb']?>" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>From:</label>
                                        <input type="text" class="form-control" id="from2" value="Mansilingan Health Center" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>To:</label>
                                        <input type="text" class="form-control" id="to2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['to_hospital']?>" placeholder="Enter Hospital" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Origin Address:</label>
                                        <input type="text" class="form-control" id="origin2" value="Mansilingan, Bacolod City" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Destination Address:</label>
                                        <input type="text" class="form-control" id="destination2<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['destination_address']?>" placeholder="Enter Destination Address" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Tetanus Toxoid:</label>
                                        <select class="form-control select" data-live-search="true" id="tt<?php echo $fetch['referral_id']?>">
                                            <option value="<?php echo $fetch['tt']?>"><?php echo $fetch['tt']?></option>
                                            <option value="TT 1">TT 1</option>
                                            <option value="TT 2">TT 2</option>
                                            <option value="TT 3">TT 3</option>
                                            <option value="TT 4">TT 4</option>
                                            <option value="TT 5">TT 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Given</label>
                                        <input type="text" class="form-control datepicker" id="given<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['given']?>" placeholder="Enter Date" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Referred By:</label>
                                <select class="form-control select" data-live-search="true" id="referred_by2<?php echo $fetch['referral_id']?>">
                                    <option value="<?php echo $fetch['referred_by']?>"><?php echo $fetch['referred_by']?></option>
                                    <?php
	                require '../require/config.php';
					$q2 = $conn->query("SELECT * FROM `users` where `position` = 'Nurse'") or die(mysqli_error());
                                    
					while($f2 = $q2->fetch_array()){
                        
									?>
                                    <option value="<?php echo $f2['fullname'];?>">
                                        <?php echo $f2['fullname']?></option>
                                    <?php
					}
									?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Complaints</label>
                                <textarea class="form-control" spellcheck="false" id="complaints2<?php echo $fetch['referral_id']?>"><?php echo $fetch['complaints']?></textarea>
                            </div>
                            <!--
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" id="designation2" placeholder="Enter Designation" required />
                            </div>
-->
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="updateprenatalreferral btn btn-success" value="<?php echo $fetch['referral_id']?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
