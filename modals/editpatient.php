<div class="modal fade" id="edit_patient">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <center>
                <div id="alert" class="alert alert-success" style="display:none;">
                    <center><span class="fa fa-check"></span> <span id="alerttext"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Update Patient Information</h4>
            </div>
            <div class="modal-body">
                <center>
                    <h4><strong>Are you sure you want to update this patient?</strong></h4>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="updatepatient btn btn-success" value="<?php echo $fetch['patient_id']; ?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
