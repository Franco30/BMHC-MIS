<div class="modal fade" id="edit_follow_up<?php echo $fetch1['follow_up_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Update Follow-up Visit - Prenatal</strong></h4>
            </div>
            <div class="modal-body">
                <form id="followup">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Patient Name</label>
                                    <select class="form-control select" data-live-search="true" id="patient2<?php echo $fetch1['follow_up_id'];?>">
                                        <option value="<?php echo $fetch1['patient_id'];?>"><?php echo $fetch1['patient_name'];?></option>
                                        <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `prenatal` NATURAL JOIN `patient` GROUP BY `patient_id` ORDER BY `prenatal_id` DESC") or die(mysqli_error());

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
                                    <label>Date and Time</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datetimepicker2" id="follow_up_date_time2<?php echo $fetch1['follow_up_id'];?>" value="<?php echo $fetch1['follow_up_date_time'];?>" />
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea type="text" class="form-control" id="remarks<?php echo $fetch1['follow_up_id'];?>" required><?php echo $fetch1['remarks'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select" data-live-search="true" id="status2<?php echo $fetch1['follow_up_id'];?>">
                                    <option value="<?php echo $fetch1['follow_up_status'];?>"><?php echo $fetch1['follow_up_status'];?></option>
                                    <option value="Done">Done</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success edit_prenatal_follow_up" value="<?php echo $fetch1['follow_up_id']; ?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
