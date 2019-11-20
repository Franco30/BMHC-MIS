<div class="modal fade" id="add_feeding" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Add Feeding Type</strong></h4>
            </div>
            <div class="modal-body">
                <form id="frm">
                    <fieldset>
                        <div class="form-row">
                            <div class="alert alert-warning" style="padding:1px;">
                                <center><span><span class="fa fa-exclamation-circle"></span> Please select only 1</span></center>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <center>
                                        <label>EBF</label>
                                        <br>
                                        <input type="hidden" class="form-control" value="<?php echo $f2['immunization_id']?>" id="immunization_id2" />
                                        <input type="hidden" class="form-control" value="<?php echo $f2['child_id']?>" id="child_id2" required />
                                        <input type="radio" value="✓" name="ebf" required />
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <center>
                                        <label>MF</label>
                                        <br>
                                        <input type="radio" value="✓" name="mf" required />
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <center>
                                        <label>BFF</label>
                                        <br>
                                        <input type="radio" value="✓" name="bff" required />
                                    </center>
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control datepicker" id="tof_date" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addfeeding" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel2">Cancel</button>
            </div>
        </div>
    </div>
</div>
