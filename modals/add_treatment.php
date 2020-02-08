<div class="modal fade" id="add_treatment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Treatment 1</h4>
            </div>
            <form id="treatment1">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Type of Treatment</label>
                                        <div id="ttype_response"></div>
                                        <input type="hidden" class="form-control" value="<?php echo $f2['immunization_id']?>" id="immunization_id" />
                                        <input type="hidden" class="form-control" value="<?php echo $f2['child_id']?>" id="child_id" />
                                        <select class="form-control select" data-live-search="true" id="treatment_type">
                                            <option disabled="disabled">Select</option>
                                            <option value="BCG">BCG</option>
                                            <option value="HEPA B">HEPA B</option>
                                            <option value="PHIB 1">PHIB 1</option>
                                            <option value="PHIB 2">PHIB 2</option>
                                            <option value="PHIB 3">PHIB 3</option>
                                            <option value="OPV 1">OPV 1</option>
                                            <option value="OPV 2">OPV 2</option>
                                            <option value="OPV 3">OPV 3</option>
                                            <option value="IPV">IPV</option>
                                            <option value="PCV 1">PCV 1</option>
                                            <option value="PCV 2">PCV 2</option>
                                            <option value="PCV 3">PCV 3</option>
                                            <option value="MVO(6 mos.)">MVO(6 mos.)</option>
                                            <option value="MV(9 mos.)">MV(9 mos.)</option>
                                            <option value="MMR">MMR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Date</label>
                                        <input type="text" class="form-control datepicker" id="treatment_date" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Age</label>
                                        <input type="text" class="form-control" id="treatment_age" placeholder="Enter Age" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Weight</label>
                                        <input type="text" class="form-control" id="treatment_weight" placeholder="Enter Weight" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                        <label>Height</label>
                                        <input type="text" class="form-control" id="treatment_height" placeholder="Enter Height" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Temperature</label>
                                        <input type="text" class="mask_temp form-control" id="treatment_temp" placeholder="Enter °C" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <br />
                            <div class="col-md-12">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Remarks</label>
                                    <textarea id="treatment_remarks" class="form-control"></textarea>
                                </div>
                            </div>
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="addnew">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel2">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
