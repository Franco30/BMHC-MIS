<div class="modal fade" id="edit_patient<?php echo $fetch['patient_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Birthdate</label>
                                        <input id="birthdate<?php echo $fetch['patient_id']; ?>" type="text" class="form-control datepicker" value="<?php echo $fetch['birthdate']; ?>" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Age</label>
                                        <input id="age<?php echo $fetch['patient_id']; ?>" type="number" class="form-control" style="font-size:11px;font-weight:bold;color:black" value="<?php echo $fetch['age']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Gender</label>
                                        <select class="form-control select" style="display: none;" id="gender<?php echo $fetch['patient_id']; ?>">
                                            <option value="<?php echo $fetch['gender']; ?>"><?php echo $fetch['gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Civil Status</label>
                                        <select class="form-control select" style="display: none;" id="civilstatus<?php echo $fetch['patient_id']; ?>">
                                            <option value="<?php echo $fetch['civil_status'];?>"><?php echo $fetch['civil_status']; ?></option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Purok</label>
                                <select class="form-control select" data-live-search="true" style="display: none;" id="purok<?php echo $fetch['patient_id']; ?>">
                                    <option value="<?php echo $fetch['purok']; ?>"><?php echo $fetch['purok']; ?></option>
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
                                <textarea class="form-control" spellcheck="false" id="streetaddress<?php echo $fetch['patient_id']; ?>"><?php echo $fetch['street_address']; ?></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>height</label>
                                        <input type="number" id="height<?php echo $fetch['patient_id']; ?>" value="<?php echo $fetch['height']; ?>" class="form-control" placeholder="Enter Height in cms." required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Weight</label>
                                        <input type="number" id="weight<?php echo $fetch['patient_id']; ?>" value="<?php echo $fetch['weight']; ?>" class="form-control" placeholder="Enter Weight in kg" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" id="contact_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Contact" value="<?php echo $fetch['contact_no']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label>Region/Province</label>
                                <input type="text" class="form-control" id="region_province<?php echo $fetch['patient_id']; ?>" placeholder="Enter Region or Province" value="<?php echo $fetch['region_province']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="occupation<?php echo $fetch['patient_id']; ?>" placeholder="Enter Occupation" value="<?php echo $fetch['occupation']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label>Philhealth Number</label>
                                <input type="number" class="form-control" id="philhealth_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Philhealth Number" value="<?php echo $fetch['philhealth_no']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" id="contact_person<?php echo $fetch['patient_id']; ?>" placeholder="Enter Contact Person" value="<?php echo $fetch['contact_person']; ?>" required />
                            </div>
                            <div class="form-group">
                                <label>Emergency Number</label>
                                <input type="number" class="form-control" id="emergency_no<?php echo $fetch['patient_id']; ?>" placeholder="Enter Emergency Number" value="<?php echo $fetch['emergency_no']; ?>" required />
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
<script>
    $("#birthdate<?php echo $fetch['patient_id']; ?>").change(function() {
        var birthdate = new Date($(this).val());
        var today = new Date();
        var age = Math.floor((today - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
        $("#age<?php echo $fetch['patient_id']; ?>").val(age);
    });

</script>
<script>
    var date = new Date();
    $("#birthdate<?php echo $fetch['patient_id']; ?>").datepicker({
        format: 'MM dd, yyyy',
        language: 'en',
        startDate: new Date('1900-01-01'),
        endDate: date
    });

</script>
