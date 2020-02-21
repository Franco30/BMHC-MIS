<div class="modal fade" id="dispensed" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <?php
				$date = date('F j, Y');
				?>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Medicine Dispensation - <?php echo $date?></strong></h4>
            </div>
            <div class="modal-body">
                <form id="dispensedform">
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Purpose</label>
                                        <select class="form-control select" data-live-search="true" id="purpose" required>
                                            <option>Select</option>
                                            <option>Consultation</option>
                                            <option>TB Medicine</option>
                                            <option>Family Planning</option>
                                            <option>Immunization</option>
                                            <option>Prenatal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Medicine Name</label>
                                        <select class="form-control select" data-live-search="true" id="medicine_name" required>
                                            <option value="#">Select</option>
                                            <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `medicine` ORDER BY `running_balance`") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
                                            <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                            <?php
					}
                                 $medicine_id = $fetch['medicine_id'];
									?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <div id="quantity_response"></div>
                                        <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Name</label>
                                        <select class="form-control select" data-live-search="true" id="received">
                                            <option value="#">Select</option>
                                            <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `patient` where `status` = 'Active'") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
                                            <option value="<?php echo $fetch['patient_id'];?>"><?php echo $fetch['patient_name']?></option>
                                            <?php
					}
									?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div id="medicineTable"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success dispense">Save</button>
                <button type="button" class="btn btn-danger" id="cancel" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
