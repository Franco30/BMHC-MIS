<div class="modal fade" id="fp_follow_up" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Follow-up Visit - Family Planning</strong></h4>
            </div>
            <div class="modal-body">
                <form id="fpfollowup">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Patient Name</label>
                                    <select class="form-control select" data-live-search="true" id="patient">
                                        <option value="#">Select</option>
                                        <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `family_planning` NATURAL JOIN `patient` GROUP BY `patient_id` ORDER BY `family_planning_id` DESC") or die(mysqli_error());

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
                                    <input type="text" class="form-control datepicker" id="date_given" required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Method/Brand</label>
                                <textarea type="text" class="form-control" id="method" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>No. of Units</label>
                                <input type="text" class="form-control" id="units" required />
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea type="text" class="form-control" id="remarks2" required></textarea>
                            </div>
                            &nbsp;
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Name of Provider</label>
                                    <select class="form-control select" data-live-search="true" id="provider">
                                        <option value="#">Select</option>
                                        <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `users`") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
                                        <option value="<?php echo $fetch['user_id'];?>"><?php echo $fetch['fullname']?></option>
                                        <?php
					}
									?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left:-10px;">
                                        <label>Next Service Date</label>
                                        <input type="text" class="form-control datepicker" id="next_service_date" required />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="add_fp_follow_up" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
