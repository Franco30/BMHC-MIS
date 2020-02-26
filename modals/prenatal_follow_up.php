<div class="modal fade" id="p_follow_up" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Follow-up Visit - Prenatal</strong></h4>
            </div>
            <div class="modal-body">
                <form id="followup">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Patient Name</label>
                                    <select class="form-control select" data-live-search="true" id="patient2">
                                        <option value="#">Select</option>
                                        <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `prenatal`, `patient` WHERE `prenatal`.`patient_id` = `patient`.`patient_id` GROUP BY `prenatal`.`patient_id` ORDER BY `prenatal`.`prenatal_id` DESC") or die(mysqli_error());

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
                                        <input type="text" class="form-control datetimepicker2" id="follow_up_date_time" required/>
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
                                <textarea type="text" class="form-control" id="remarks3" required></textarea>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="add_prenatal_follow_up" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" id="cancel22" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
