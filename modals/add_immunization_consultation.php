<div class="modal fade" id="add_consultation" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Immunization Consultation</strong></h4>
            </div>
            <form id="treatment1">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Nutritional Status</label>
                                        <input type="hidden" class="form-control" value="<?php echo $f2['immunization_id']?>" id="immunization_id" />
                                        <input type="hidden" class="form-control" value="<?php echo $f2['child_id']?>" id="child_id" />
                                        <textarea id="nutritional_status" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Medical History</label>
                                        <textarea id="medical_history" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <h5><strong>PRESENT ILLNESS:</strong></h5>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Date</label>
                                        <input type="text" class="form-control datepicker" id="date" placeholder="Enter Date Today" required />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Temperature</label>
                                        <input type="text" class="mask_temp form-control" id="temp" placeholder="Enter °C" required />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>RR</label>
                                        <input type="number" class="form-control" id="rr" placeholder="Enter RR" required />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>BP</label>
                                        <input type="text" class="mask_bp form-control" id="bp" placeholder="Enter BP" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Weight</label>
                                        <input type="number" class="form-control" id="weight" placeholder="Enter Weight" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Complaints</label>
                                        <textarea id="complaints" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Diagnosis</label>
                                        <textarea id="diagnosis" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Plan of Action</label>
                                        <textarea id="plan_of_action" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Remarks</label>
                                        <textarea id="remarks" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="addnew">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel2">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
