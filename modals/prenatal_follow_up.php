<div class="modal fade" id="follow_up<?php echo $fetch['patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
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
                        <div class="form-group">
                            <label>Date and Time</label>
                            <div class="input-group date">
                                <input type="hidden" class="form-control" name="patient_id" value="<?php echo $fetch['patient_id'];?>" required>
                                <input type="hidden" class="form-control" name="patient_name" value="<?php echo $fetch['patient_name'];?>" required>
                                <input type="text" class="form-control datetimepicker" id="follow_up_date_time" />
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Remarks</label>
                            <textarea type="text" class="form-control" id="remarks3" required></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="add_prenatal_follow_up" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
