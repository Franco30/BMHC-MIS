<div class="modal fade" id="edit_patient<?php echo $fetch['patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Edit Patient</h4>
            </div>
            <div class="modal-body">
            <form id="patientform">
                
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>Patient Name</label>
                            <input type="text" class="form-control" value="<?php echo $fetch['patient_name']; ?>" id="patient_name<?php echo $fetch['patient_id']; ?>" placeholder="Enter Patient Name" required />
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['age']; ?>"  id="age<?php echo $fetch['patient_id']; ?>" placeholder="Enter Age" required />
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control select" id="gender<?php echo $fetch['patient_id']; ?>">
                                    <option><?php echo $fetch['gender']; ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" spellcheck="false" id="address<?php echo $fetch['patient_id']; ?>"><?php echo $fetch['address']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input type="text" class="form-control datepicker" value="<?php echo $fetch['birthdate']; ?>" id="birthdate<?php echo $fetch['patient_id']; ?>" placeholder="Enter Birthdate" required />
                            </div>
                            <div class="form-group">
                                <label>Height</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['height']; ?>" id="height<?php echo $fetch['patient_id']; ?>" placeholder="Enter Height in cms." required />
                            </div>
                            
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['contact_no']; ?>" id="contact_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Contact" required />
                            </div>
                            <div class="form-group">
                                <label>Region/Province</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['region_province']; ?>" id="region_province<?php echo $fetch['patient_id']; ?>" placeholder="Enter Region or Province" required />
                            </div>
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['occupation']; ?>" id="occupation<?php echo $fetch['patient_id']; ?>" placeholder="Enter Occupation" required />
                            </div>
                            <div class="form-group">
                                <label>Philhealth Number</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['philhealth_no']; ?>" id="philhealth_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Philhealth Number" required />
                            </div>
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['contact_person']; ?>" id="contact_person<?php echo $fetch['patient_id']; ?>" placeholder="Enter Contact Person" required />
                            </div>    
                            <div class="form-group">
                                <label>Emergency Number</label>
                                <input type="text" class="form-control" value="<?php echo $fetch['emergency_no']; ?>" id="emergency_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Emergency Number" required />
                            </div>
                            </div>
                        </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="updatepatient btn btn-success" value="<?php echo $fetch['patient_id']; ?>">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>