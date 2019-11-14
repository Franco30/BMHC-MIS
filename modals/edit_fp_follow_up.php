<div class="modal fade" id="edit_fp_follow_up<?php echo $fetch1['fp_follow_up_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Update Follow-up Visit - Family Planning</strong></h4>
            </div>
            <div class="modal-body">
                <form id="fpfollowup">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Patient Name</label>
                                    <select class="form-control select" data-live-search="true" id="patient<?php echo $fetch1['fp_follow_up_id']; ?>">
                                        <option value="<?php echo $fetch1['patient_id']; ?>"><?php echo $fetch1['patient_name']; ?></option>
                                        <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `family_planning`, `patient` WHERE `family_planning`.`patient_id` = `patient`.`patient_id` GROUP BY `family_planning`.`patient_id` ORDER BY `family_planning`.`family_planning_id` DESC") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
                                        <option value="<?php echo $fetch['patient_id'];?>"><?php echo $fetch['patient_name']?></option>
                                        <?php
					}
									?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Date Service Given</label>
                                    <input type="text" class="form-control datepicker" id="date_given<?php echo $fetch1['fp_follow_up_id']; ?>" value="<?php echo $fetch1['date_service_given']; ?>" required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <label>Method/Brand</label>
                                <input type="text" class="tagsinput" id="method<?php echo $fetch1['fp_follow_up_id']; ?>" value="<?php echo $fetch1['method_brand']; ?>" data-role="tagsinput" required />
                            </div>
                            <div class="form-group">
                                <label>No. of Units</label>
                                <input type="text" class="form-control" id="units<?php echo $fetch1['fp_follow_up_id']; ?>" value="<?php echo $fetch1['no_of_units']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea type="text" class="form-control" id="remarks2<?php echo $fetch1['fp_follow_up_id']; ?>" required><?php echo $fetch1['remarks']; ?></textarea>
                            </div>
                            &nbsp;
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name of Provider</label>
                                    <select class="form-control select" data-live-search="true" id="provider<?php echo $fetch1['fp_follow_up_id']; ?>">
                                        <option value="<?php echo $fetch1['name_of_provider']; ?>"><?php echo $fetch1['name_of_provider']; ?></option>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                            $query = $conn->query("SELECT * FROM `users`") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
                                        <option value="<?php echo $fetch['fullname']?>"><?php echo $fetch['fullname']?></option>
                                        <?php
					}
									?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Next Service Date</label>
                                    <input type="text" class="form-control datepicker" id="next_service_date<?php echo $fetch1['fp_follow_up_id']; ?>" value="<?php echo $fetch1['next_service_date']; ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            &nbsp;
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select" data-live-search="true" id="status<?php echo $fetch1['fp_follow_up_id']; ?>">
                                    <option value="<?php echo $fetch1['follow_up_status']; ?>"><?php echo $fetch1['follow_up_status']; ?></option>
                                    <option value="Done">Done</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" value="<?php echo $fetch1['fp_follow_up_id']; ?>" class="btn btn-success edit_fp_follow_up">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
