<div class="modal fade" id="add_stock" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>New Stocks</strong></h4>
            </div>
            <div class="modal-body">
                <form id="addstocksform">
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                        <label>Medicine Name</label>
                                        <select class="form-control select" data-live-search="true" id="med_name">
                                            <option value="#">Select</option>
                                            <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `medicine`") or die(mysqli_error());

					while($fetch = $query->fetch_array()){
									?>
                                            <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                            <?php
					}
									?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control" id="quantity2" placeholder="Enter Quantity" required />
                                    </div>
                                </div>
                            </div>

                        </div>
                        &nbsp;
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div id="medicineTable3"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addstocks" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
