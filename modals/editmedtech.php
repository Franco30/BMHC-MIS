<div class="modal fade" id="editmedtech<?php echo $fetch['chicks_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
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
                <h4 class="modal-title" id="defModalHead">Edit Medtech</h4>
            </div>
            <div class="modal-body">
            <form id="dispatchform">
                    <fieldset>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="<?php echo $fetch['mname']; ?>" id="mname<?php echo $fetch['chicks_id']; ?>" class="form-control" placeholder="Enter Medtech Name" required />
                        </div>
                        <div class="form-group">
                            <label>FB Account</label>
                            <input type="text" value="<?php echo $fetch['fblink']; ?>" id="fblink<?php echo $fetch['chicks_id']; ?>" class="form-control" id="fblink" placeholder="Paste FB Account" required />
                        </div>
                        <div class="form-group">
                            <label>Instagram Account</label>
                            <input type="text" value="<?php echo $fetch['ig']; ?>" id="ig<?php echo $fetch['chicks_id']; ?>" class="form-control" placeholder="Paste Instagram Account" required />
                        </div>
                        <div class="form-group">
                            <label>Beauty Percentage</label>
                            <input type="number" value="<?php echo $fetch['bp']; ?>" id="bp<?php echo $fetch['chicks_id']; ?>" class="form-control" placeholder="Enter Beauty Percentage" required />
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="updatemedtech btn btn-success" value="<?php echo $fetch['chicks_id']; ?>"> Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>