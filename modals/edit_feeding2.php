<div class="modal fade" id="edit_feeding2<?php echo $fetch2['type_of_feeding_2_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Treatment 2</strong></h4>
            </div>
            <div class="modal-body">
                <form id="feeding2">
                    <fieldset>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>VIT A.</label>
                                    <input type="hidden" class="form-control" value="<?php echo $f2['immunization_id']?>" id="immunization_id3" />
                                    <input type="hidden" class="form-control" value="<?php echo $f2['child_id']?>" id="child_id3" required />
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch2['vit_a']?>" id="vit_a<?php echo $fetch2['type_of_feeding_2_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>6 Mos.</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch2['6_months']?>" id="6_months<?php echo $fetch2['type_of_feeding_2_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>1 yr.</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch2['1_year']?>" id="1_year<?php echo $fetch2['type_of_feeding_2_id']; ?>" />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>NBS</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch2['nbs']?>" id="nbs<?php echo $fetch2['type_of_feeding_2_id']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>VIT K.</label>
                                    <input type="text" class="form-control datepicker" value="<?php echo $fetch2['vit_k']?>" id="vit_k<?php echo $fetch2['type_of_feeding_2_id']; ?>" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="edit_feeding2 btn btn-success" value="<?php echo $fetch2['type_of_feeding_2_id']; ?>">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel3">Close</button>
            </div>
        </div>
    </div>
</div>
