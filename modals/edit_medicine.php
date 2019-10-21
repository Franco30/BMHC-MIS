<div class="modal fade" id="editmedicine<?php echo $fetch['medicine_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Edit Medicine</strong></h4>
            </div>
            <div class="modal-body">
                <form id="medicines">
                    <fieldset>
                        <div class="form-group">
                            <label>Medicine Name</label>
                            <input type="text" class="form-control" value="<?php echo $fetch['medicine_name']; ?>" id="medicine_name<?php echo $fetch['medicine_id']; ?>" required />
                        </div>
                        <div class="form-group">
                            <label>Medicine Type</label>
                            <select class="form-control select" id="medicine_type<?php echo $fetch['medicine_id']; ?>" required>
                                <option value="<?php echo $fetch['medicine_type']; ?>"><?php echo $fetch['medicine_type']; ?></option>
                                <option value="Tablet">Tablet</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Syrup">Syrup</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Medicine Category</label>
                            <select class="form-control select" data-live-search="true" id="medicine_category<?php echo $fetch['medicine_id']; ?>" required>
                                <option value="<?php echo $fetch['medicine_category']; ?>"><?php echo $fetch['medicine_category']; ?></option>
                                <option value="Antibiotic">Antibiotic</option>
                                <option value="Analgesic">Analgesic</option>
                                <option value="Vitamins">Vitamins</option>
                                <option value="Cough Preparation">Cough Preparation</option>
                                <option value="Antihistamines">Antihistamines</option>
                                <option value="Anti-TB Drugs">Anti-TB Drugs</option>
                            </select>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="updatemedicine btn btn-info" value="<?php echo $fetch['medicine_id']; ?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
