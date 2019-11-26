<div class="modal fade" id="edit_tetanus_toxoid<?php echo $fetch['tetanus_toxoid_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Tetanus Toxoid</strong></h4>
            </div>
            <div class="modal-body">
                <form id="feeding2">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>TT 1</label>
                                    <input type="hidden" class="form-control" value="<?php echo $f2['immunization_id']?>" id="immunization_id4" />
                                    <input type="hidden" class="form-control" value="<?php echo $f2['child_id']?>" id="child_id4" required />
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['tt1']?>" id="tt1<?php echo $fetch['tetanus_toxoid_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>TT 2</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['tt2']?>" id="tt2<?php echo $fetch['tetanus_toxoid_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>TT 3</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['tt3']?>" id="tt3<?php echo $fetch['tetanus_toxoid_id']; ?>" />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>TT 4</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['tt4']?>" id="tt4<?php echo $fetch['tetanus_toxoid_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                    <label>TT 5</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch['tt5']?>" id="tt5<?php echo $fetch['tetanus_toxoid_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>TT L</label>
                                    <input type="text" class="form-control" value="<?php echo $fetch['ttl']?>" id="ttl<?php echo $fetch['tetanus_toxoid_id']; ?>" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="edit_tt btn btn-success" value="<?php echo $fetch['tetanus_toxoid_id']; ?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel4">Cancel</button>
            </div>
        </div>
    </div>
</div>
