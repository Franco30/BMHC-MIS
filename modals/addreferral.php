<div class="modal fade" id="addreferral" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel33" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield33"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <center>
                    <h4 class="modal-title" id="defModalHead"><strong>Referral Record</strong></h4>
                </center>
            </div>
            <div class="modal-body">
                <form id="referralforms">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date:</label>
                                <input type="text" class="form-control datepicker" id="date" required />
                            </div>
                            <label>Patient Category:</label>
                            <select class="form-control select" style="display: none;" data-live-search="true" id="patientcategory">
                                <option value="Unregistered">Unregistered Patients</option>
                                <option value="Registered">Registered Patients</option>
                            </select>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6" id="category1">
                                    <div class="form-group"  style="margin-left:-10px;">
                                        <label>Patient Name:</label>
                                        <input type="text" class="form-control" id="patient_name" required />
                                    </div>
                                </div>
                                <div class="col-md-6" id="category2" style="display:none;">
                                    <div class="form-group"  style="margin-left:-10px;">
                                        <label>Patient Name:</label>
                                        <select class="form-control select" data-live-search="true" id="registered" required>
                                            <option value="">Select</option>
                                            <?php
                                    require 'require/config.php';
                                    $query = $conn->query("SELECT * FROM `patient` WHERE `status` = 'Active' ORDER BY `patient_id` DESC") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                            <option value="<?php echo $fetch['patient_name'];?>"><?php echo $fetch['patient_name']?></option>
                                            <?php
                                    }
                                    $conn->close();
                                    ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"  style="margin-right:-10px;">
                                        <label>Gender:</label>
                                        <select class="form-control select" data-live-search="true" id="gender" required>
                                            <option value="" selected="selected" disabled="disabled">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Weight:</label>
                                        <input type="number" class="form-control" id="weight" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>BP:</label>
                                        <input type="text" class="mask_bp form-control" id="bp" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Temperature:</label>
                                        <input type="text" class="mask_temp form-control" id="temp" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                        <label>Age:</label>
                                        <input type="number" class="form-control" id="age" required />
                                    </div>
                                </div>
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
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
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
                                        <input type="text" class="form-control" id="origin" value="Mansilingan, Bacolod City" style="color:#444444;" readonly required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;margin-left:-10px">
                                        <label>Destination Address:</label>
                                        <input type="text" class="form-control" id="destination" placeholder="Enter Destination Address" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Referred By:</label>
                                <select class="form-control select" data-live-search="true" id="referred_by">
                                    <option value="#">Select</option>
                                    <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `users` where `position` = 'Nurse'") or die(mysqli_error());
                                    
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
                                <label>Complaints</label>
                                <textarea class="form-control" spellcheck="false" id="complaints"></textarea>
                            </div>
                            <!--
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder="Enter Designation" required />
                            </div>
-->
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="cancel">Reset</button>
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
