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
                                <input type="text" class="form-control" id="patient_name" onkeyup="myFunction(this.id);" placeholder="Enter Patient Name" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Birthdate</label>
                                        <input id="birthdate" type="text" class="form-control datepicker" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Age</label>
                                        <input id="age" type="number" class="form-control" style="font-size:11px;font-weight:bold;color:black" readonly />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Gender</label>
                                        <select class="form-control select" style="display: none;" id="gender">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Civil Status</label>
                                        <select class="form-control select" style="display: none;" id="civilstatus">
                                            <option>Select</option>
                                            <option>Single</option>
                                            <option>Married</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Purok</label>
                                <select class="form-control select"  data-live-search="true" style="display: none;" id="purok">
                                    <option>Select</option>
                                    <option value="Gauzon">Prk. Gauzon</option>
                                    <option value="Himaya">Prk. Himaya</option>
                                    <option value="Kabugwason">Prk. Kabugwason</option>
                                    <option value="Kahirup A">Prk. Kahirup A</option>
                                    <option value="Kahirup B">Prk. Kahirup B</option>
                                    <option value="Kasilingan">Prk. Kasilingan</option>
                                    <option value="Katilingban">Prk. Katilingban</option>
                                    <option value="Mabinuligon">Prk. Mabinuligon</option>
                                    <option value="Matahum">Prk. Matahum</option>
                                    <option value="Paghidaet">Prk. Paghidaet</option>
                                    <option value="Paglaum">Prk. Paglaum</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Street Address</label>
                                <textarea class="form-control" spellcheck="false" id="streetaddress"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>height</label>
                                        <input type="number" id="height" name="heights" class="form-control" placeholder="Enter Height in cms." required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Weight</label>
                                        <input type="number" id="weight" name="weights" class="form-control" placeholder="Enter Weight in kg" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" id="contact_no" name="contact_nos" placeholder="Enter Contact" required />
                            </div>
                            <div class="form-group">
                                <label>Region/Province</label>
                                <input type="text" class="form-control" id="region_province" onkeyup="myFunction(this.id);" placeholder="Enter Region or Province" required />
                            </div>
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="occupation" placeholder="Enter Occupation" required />
                            </div>
                            <div class="form-group">
                                <label>Philhealth Number</label>
                                <input type="number" class="form-control" id="philhealth_no" name="philhealth_nos" placeholder="Enter Philhealth Number" required />
                            </div>
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" id="contact_person" placeholder="Enter Contact Person" onkeyup="myFunction(this.id);" required />
                            </div>
                            <div class="form-group">
                                <label>Emergency Number</label>
                                <input type="number" class="form-control" id="emergency_no" name="emergency_nos" placeholder="Enter Emergency Number" required />
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
