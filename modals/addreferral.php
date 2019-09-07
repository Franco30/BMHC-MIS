<div class="modal fade" id="new_referral" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
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
                <center><h4 class="modal-title" id="defModalHead"><strong>Referral Record</strong></h4></center>
            </div>
            <div class="modal-body">
            <form id="referralform">
                
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>FROM:</label>
                            <input type="text" class="form-control" id="from" value="Mansilingan Health Center" required />
                            </div>
                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" class="form-control" id="address1" value="Mansilingan, Bacolod City" required />
                            </div>
                            <div class="form-group">
                                <label>Name of Patient:</label>
                                <input type="text" class="form-control" id="patient_name" placeholder="Enter Patient Name" required />
                            </div>
                            <div class="form-group">
                                <label>Blood Pressure:</label>
                                <input type="text" class="form-control" id="patient_bp" required />
                            </div>
                            <div class="form-group">
                                <label>Complaints</label>
                                <textarea class="form-control" spellcheck="false" id="patient_complaints"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder="Enter Designation" required />
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                                <label>TO:</label>
                                <input type="text" class="form-control" id="referral_address" placeholder="Enter Hospital" required />
                            </div>
                            <div class="form-group">
                            <label>Address:</label>
                                <input type="text" class="form-control" id="address2" placeholder="Enter Address" required />
                            </div>
                            <div class="form-group">
                                <label>Age:</label>
                                <input type="number" class="form-control" id="patient_age" required />
                            </div>
                            <div class="form-group">
                                <label>Weight:</label>
                                <input type="text" class="form-control" id="patient_weight" required />
                            </div>
                            <div class="form-group">
                                <label>Temp:</label>
                                <input type="text" class="form-control" id="patient_temp" required />
                            </div>
                            <div class="form-group">
                                <label>Referred By:</label>
                                <input type="text" class="form-control" id="referred_by" required />
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