<div class="modal fade" id="new_patient" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New Patient</h4>
            </div>
            <div class="modal-body">
                <form id="patientform">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Name</label>
                                <input type="text" class="form-control" id="patient_name" placeholder="Enter Patient Name" required />
                            </div>
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input id="birthdate" type="text" class="form-control datepicker" required />
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input id="age" type="number" class="form-control" style="font-size:11px;font-weight:bold;color:black" readonly />
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control select" style="display: none;" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" spellcheck="false" id="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Height</label>
                                <input type="number" class="form-control" id="height" placeholder="Enter Height in cms." required />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" id="contact_no" placeholder="Enter Contact" required />
                            </div>
                            <div class="form-group">
                                <label>Region/Province</label>
                                <input type="text" class="form-control" id="region_province" placeholder="Enter Region or Province" required />
                            </div>
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="occupation" placeholder="Enter Occupation" required />
                            </div>
                            <div class="form-group">
                                <label>Philhealth Number</label>
                                <input type="number" class="form-control" id="philhealth_no" placeholder="Enter Philhealth Number" required />
                            </div>
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" id="contact_person" placeholder="Enter Contact Person" required />
                            </div>
                            <div class="form-group">
                                <label>Emergency Number</label>
                                <input type="number" class="form-control" id="emergency_no" placeholder="Enter Emergency Number" required />
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
