<div class="modal fade" id="new_medicine" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
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
                <h4 class="modal-title" id="defModalHead"><strong>New Medicine</strong></h4>
            </div>
            <div class="modal-body">
            <form id="medicine">
                    <fieldset>
                        <div class="form-group">
                            <label>Medicine Name</label>
                            <input type="text" class="form-control" id="medicine_name" required />
                        </div>
                        <div class="form-group">
                            <label>Medicine Type</label>
                            <select class="form-control select" id="medicine_type" required>
                                    <option>Choose</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Syrup">Syrup</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Medicine Description</label>
                            <textarea type="text" class="form-control" id="medicine_description" required ></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>