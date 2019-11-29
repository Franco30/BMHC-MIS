<div class="modal fade" id="add_consultation" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Prenatal Consultation</strong></h4>
            </div>
            <div class="modal-body">
                <form id="frm">
                    <fieldset>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="hidden" class="form-control" value="<?php echo $fetch3['patient_id']?>" id="patient_id" required />
                                <input type="hidden" class="form-control" value="<?php echo $fetch3['prenatal_id']?>" id="prenatal_id" required />
                                <input type="text" class="form-control datepicker" id="date" required />
                                &nbsp;
                                <div class="form-group">
                                    <label>Doctor's Order and Advice</label>
                                    <textarea class="form-control" id="doctors_order_advice" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Presentation</label>
                                    <input type="text" class="form-control" id="presentation" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Complaints</label>
                                <textarea class="form-control" id="complaints" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-14px;margin-right:-10px;">
                                        <label>Blood Pressure</label>
                                        <input type="text" class="mask_bp form-control" id="bp" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;margin-right:-14px;">
                                        <label>Weight</label>
                                        <input type="number" class="form-control" id="weight" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:-14px;margin-right:-10px;">
                                        <label>Fundal Height</label>
                                        <input type="number" class="form-control" id="fh" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                        <label>FHB</label>
                                        <input type="number" class="form-control" id="fhb" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:-10px;margin-right:-14px;">
                                        <label>AOG</label>
                                        <input type="text" class="form-control" id="aog" required />
                                    </div>
                                </div>
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
