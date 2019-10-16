<div class="modal fade" id="prenatalreferral" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <center>
                    <h4 class="modal-title" id="defModalHead"><strong>Prenatal Referral Record</strong></h4>
                </center>
            </div>
            <div class="modal-body">
                <form id="prenatalreferralform">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="text" class="form-control datepicker" id="date" required />
                            </div>
                            <div class="form-group">
                                <label>Name of Patient:</label>
                                <input type="text" class="form-control" id="patient_name" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Weight:</label>
                                        <input type="text" class="form-control" id="weight" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Blood Pressure:</label>
                                        <input type="text" class="form-control" id="bloodpressure" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Temperature:</label>
                                        <input type="text" class="form-control" id="address2" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Age:</label>
                                        <input type="number" class="form-control" id="age" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Complaints</label>
                                <textarea class="form-control" spellcheck="false" id="patient_complaints"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>From:</label>
                                        <input type="text" class="form-control" id="from" value="Mansilingan Health Center" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>To:</label>
                                        <input type="text" class="form-control" id="to" placeholder="Enter Hospital" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Origin Address:</label>
                                        <input type="text" class="form-control" id="address1" value="Mansilingan, Bacolod City" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Destination Address:</label>
                                        <input type="text" class="form-control" id="address2" placeholder="Enter Destination Address" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <h6>weeks AOG via UTZ:</h6>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Gravida:</label>
                                        <input type="text" class="form-control" id="gravida" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Para:</label>
                                        <input type="text" class="form-control" id="para" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Fetal Heart:</label>
                                        <input type="text" class="form-control" id="fetalheart" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label style="font-size: 11.5px;">Fetal Heart Beat:</label>
                                        <input type="text" class="form-control" id="fetalheartbeat" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Referred By:</label>
                                <select class="form-control select" data-live-search="true" id="user">
                                    <option value="#">Select</option>
                                    <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `users` where `status` = '1'") or die(mysqli_error());
                                    
					while($fetch = $query->fetch_array()){
                        
									?>
                                    <option value="<?php echo $fetch['fullname'];?>">
                                        <?php echo $fetch['fullname']?></option>
                                    <?php
					}
									?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder="Enter Designation" required />
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>