<div class="modal fade" id="add_consultation" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Add Brothers and Sisters</strong></h4>
            </div>
            <div class="modal-body">
                <form id="frm">
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date</label>
                                 <input type="text" class="form-control" value="<?php echo $id?>" id="patient_id" required />
                                 <input type="text" class="form-control" value="<?php echo $id?>" id="prenatal_id" required />
                                 <input type="text" class="form-control" id="name" required />
                            </div>
                            
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control select" id="gender">
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Birthdate</label>
                                <input type="text" class="form-control datepicker" id="birthdate" placeholder="Input Date of Birth" required />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
