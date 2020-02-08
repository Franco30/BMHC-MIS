<div class="modal fade" id="editreferral<?php echo $fetch['referral_id']?>" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <center>
                    <h4 class="modal-title" id="defModalHead"><strong>Edit Referral Record</strong></h4>
                </center>
            </div>
            <div class="modal-body">
                <form id="referralform">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="text" class="form-control datepicker" id="date<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['referral_date']?>" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group"  style="margin-left:-10px;">
                                        <label>Patient Name:</label>
                                        <input type="text" class="form-control" id="patient_name<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['patient_name']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"  style="margin-right:-10px;">
                                        <label>Gender:</label>
                                        <select class="form-control select" data-live-search="true" id="gender<?php echo $fetch['referral_id']?>" required>
                                            <option value="<?php echo $fetch['gender']?>"><?php echo $fetch['gender']?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Weight:</label>
                                        <input type="number" class="form-control" id="weight<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['weight']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>BP:</label>
                                        <input type="text" class="mask_bp form-control" id="bp<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['bp']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Temperature:</label>
                                        <input type="text" class="mask_temp form-control" id="temp<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['temp']?>" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Age:</label>
                                        <input type="number" class="form-control" id="age<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['age']?>" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>From:</label>
                                        <input type="text" class="form-control" id="from" value="Mansilingan Health Center" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                        <label>To:</label>
                                        <input type="text" class="form-control" id="to<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['to_hospital']?>" placeholder="Enter Hospital" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Origin Address:</label>
                                        <input type="text" class="form-control" id="origin" value="Mansilingan, Bacolod City" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                        <label>Destination Address:</label>
                                        <input type="text" class="form-control" id="destination<?php echo $fetch['referral_id']?>" value="<?php echo $fetch['destination_address']?>" placeholder="Enter Destination Address" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Referred By:</label>
                                <select class="form-control select" data-live-search="true" id="referred_by<?php echo $fetch['referral_id']?>">
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
                                <textarea class="form-control" spellcheck="false" id="complaints<?php echo $fetch['referral_id']?>"><?php echo $fetch['complaints']?></textarea>
                            </div>
                            <!--
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder="Enter Designation" required />
                            </div>
-->
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="updatereferral btn btn-success" value="<?php echo $fetch['referral_id']?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
