<div class="modal fade" id="newdssm" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
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
                <h4 class="modal-title" id="defModalHead">Enter DSSM Result</h4>
            </div>
            <div class="modal-body">
                <form id="patientform">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <label>Patient Name</label>
                                <select class="form-control select" name="visual_appearance" data-live-search="true" required>
                                    <option value="">Select...</option>
                                    <option value="Salivary">Juan Dela Cruz</option>
                                    <option value="Muco-Purulent">Pedro Dela Cruz</option>
                                    <option value="Blood-Stained">Elmer Haro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Laboratory Number</label>
                                <input type="number" class="form-control" name="laboratory_number" data-toggle="tooltip"
                                    data-placement="top" title="Laboratory Number" required />
                            </div>
                            <div class="form-group">
                                <label>Specimen 1 Visual Appearance</label>
                                <select class="form-control select" name="visual_appearance" required>
                                    <option value="">Select...</option>
                                    <option value="Salivary">Salivary</option>
                                    <option value="Muco-Purulent">Muco-Purulent</option>
                                    <option value="Blood-Stained">Blood-Stained</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Specimen 2 Visual Appearance</label>
                                <select class="form-control select" name="visual_appearance2" required>
                                    <option value="">Select...</option>
                                    <option value="Salivary">Salivary</option>
                                    <option value="Muco-Purulent">Muco-Purulent</option>
                                    <option value="Blood-Stained">Blood-Stained</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Specimen 1 Reading</label>
                                <input type="text" class="form-control" name="reading" data-toggle="tooltip"
                                    data-placement="top" title="Specimen 1 Reading" required />

                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label>Specimen 2 Reading</label>
                                <input type="text" class="form-control" name="reading2" data-toggle="tooltip"
                                    data-placement="top" title="Specimen 2 Reading" required />

                            </div>
                            <div class="form-group">
                                <label>Laboratory Diagnosis</label>
                                <select class="form-control select" name="laboratory_diagnosis" required>
                                    <option value="">Select...</option>
                                    <option value="Positive (+)">Positive</option>
                                    <option value="Negative (0)">Negative</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Examined By</label>
                                <input type="text" class="form-control" name="examined_by" data-toggle="tooltip" data-placement="top" title="Examined By" required/>
										
                            </div>
                            <div class="form-group">
                                <label>Date Released</label>
                                <input type="text" class="form-control datepicker" id="date_released" name="date_released" data-toggle="tooltip" data-placement="top" title="Date Released" required/>
											
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