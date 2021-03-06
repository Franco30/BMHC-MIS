<div class="modal fade" id="new_medicine" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>New Medicine</strong></h4>
            </div>
            <div class="modal-body">
                <form id="medicine" action="" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label>Medicine Type</label>
                            <select class="form-control select" name="medicine_type" id="medicine_type" required>
                                <option>Choose</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Syrup">Syrup</option>
                            </select>
                        </div>
                        
                        <div class="form-group" id="medname">
                            <label>Medicine Name</label>
                            <div class="invalid-feedback" id="medicine_name_response" style="text-align: left;"></div>
                            <input type="text" class="form-control" name="medicine_name" id="medicine_name" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Medicine Category</label>
                            <select class="form-control select" data-live-search="true" name="medicine_category" required>
                                <option>Choose</option>
                                <option value="Analgesic">Analgesic</option>
                                <option value="Anti-TB Drugs">Anti-TB Drugs</option>
                                <option value="Antibiotic">Antibiotic</option>
                                <option value="Antihistamine">Antihistamine</option>
                                <option value="Antipyretic">Antipyretic</option>
                                <option value="Cough Preparation">Cough Preparation</option>
                                <option value="Oral contraceptives">Oral contraceptives</option>
                                <option value="Vitamins">Vitamins</option>
                            </select>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <!--                <button type="button" id="addnew" class="btn btn-info">Save</button>-->
                <input type="submit" name="insert" id="insert" value="Save" class="btn btn-info">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
