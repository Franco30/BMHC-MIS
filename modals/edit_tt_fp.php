<div class="modal fade" id="edit_tt_fp<?php echo $fetch['tetanus_toxoid_fp_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Tetanus Toxoid - Family Planning</strong></h4>
            </div>
            <div class="modal-body">
                <form id="feeding2">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>UID</label>
                                    <input type="hidden" class="form-control" value="<?php echo $f2['immunization_id']?>" id="immunization_id5" />
                                    <input type="hidden" class="form-control" value="<?php echo $f2['child_id']?>" id="child_id5" required />
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['uid']?>" id="uid<?php echo $fetch['tetanus_toxoid_fp_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>BTL</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['btl']?>" id="btl<?php echo $fetch['tetanus_toxoid_fp_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>1 yr.</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['1_year']?>" id="1_year2<?php echo $fetch['tetanus_toxoid_fp_id']; ?>" />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>VIT A</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['vit_a']?>" id="vit_a2<?php echo $fetch['tetanus_toxoid_fp_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>FeSO4</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['feso4']?>" id="feso4<?php echo $fetch['tetanus_toxoid_fp_id']; ?>" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="edit_tt_fp btn btn-success" value="<?php echo $fetch['tetanus_toxoid_fp_id']; ?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel5">Close</button>
            </div>
        </div>
    </div>
</div>
