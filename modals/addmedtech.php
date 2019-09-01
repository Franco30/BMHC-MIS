<div class="modal fade" id="new_medtech" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New Medtech</h4>
            </div>
            <div class="modal-body">
            <form id="dispatchform">
                    <fieldset>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Medtech Name" required />
                        </div>
                        <div class="form-group">
                            <label>FB Account</label>
                            <input type="text" class="form-control" id="fblink" placeholder="Paste FB Account" required />
                        </div>
                        <div class="form-group">
                            <label>Instagram Account</label>
                            <input type="text" class="form-control" id="ig" placeholder="Paste Instagram Account" required />
                        </div>
                        <div class="form-group">
                            <label>Beauty Percentage</label>
                            <input type="number" class="form-control" id="bp" placeholder="Enter Beauty Percentage" required />
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>