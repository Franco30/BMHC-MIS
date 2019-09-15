<div class="modal fade" id="fp_follow_up<?php echo $fetch1['patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Family Planning Service Record</strong></h4>
            </div>
            <div class="modal-body">
            <form id="fpfollowup">
                    <fieldset>
                        <div class="form-group">
                            <label>Date Service Given</label>
                            <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
							<input type="hidden" class="form-control" name="patient_name" value="<?php echo $fetch['patient_name'];?>" required>
                            <input type="text" class="form-control datepicker" id="date_given" name="date_given" required/>
                        </div>
                        <div class="form-group">
                            <label>Method/Brand</label>
                            <textarea type="text" class="form-control" id="method" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>No. of Units</label>
                            <input type="number" class="form-control" id="units" name="units" required/>
                        </div>
                        <div class="form-group">
                            <label>Remarks</label>
                            <textarea type="text" class="form-control" id="remarks" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Name of Provider</label>
                            <select class="form-control select" data-live-search="true" id="provider">
									<option value="#">Select</option>
									<?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `patient` where `status` = 'Registered'") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
									<option value="<?php echo $fetch['patient_id'];?>"><?php echo $fetch['patient_name']?></option>
									<?php
					}
									?> 
								</select>
                        </div>
                        <div class="form-group">
                            <label>Next Service Date</label>
                            <input type="text" class="form-control datepicker" id="date_given" name="date_given" required/>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="add_fp_follow_up" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>