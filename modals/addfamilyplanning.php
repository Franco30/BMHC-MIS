<div class="modal fade" id="add_familyplanning" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Register New Patient</h4>
            </div>
            <form id="patientform" method="POST">
            <div class="modal-body">
               
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Patient Name</label>
                                <select name="patient_id" class="form-control select" data-live-search="true" id="provider">
                                    <option value="#">Select</option>
                                    <?php
	                $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `patient` where `status` = 'Registered'") or die(mysqli_error());
                                    
					while($fetch = $query->fetch_array()){
                        
									?>
                                    <option value="<?php echo $fetch['patient_id'];?>">
                                        <?php echo $fetch['patient_name']?></option>
                                    <?php
					}
                                    $patient_id = $fetch['patient_id'];
									?>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php
                    if(isset($_POST['submit'])) {
                        $patient_id = $_POST['patient_id'];

                        echo "<script>document.location='add_familyplanning?patient_id=$patient_id'</script>";

                    }
                ?>
            </div>
            <div class="modal-footer">
            <input class="btn btn-info" type="submit" name="submit" value="Get Patient" />
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
