<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$_GET[child_id]' ORDER BY `child_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="end_treatment<?php echo $f2['immunization_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Treatment Outcome</h4>
            </div>
            <form id="endtreatment">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="block">
                             <h3>Choose Treatment Outcome for <strong><?php echo $fetch['child_name']?></strong></h3>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" name="child_id333" value="<?php echo $f2['child_id'];?>" required/>
                                        <input type="hidden" class="form-control" name="immunization_id333" value="<?php echo $f2['immunization_id'];?>" required/>
                                        <label class="check"><input type="radio" class="iradio" name="status" value ="Treatment Completed" required/> Treatment Completed</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Failed" required/> Failed</label>
                                    </div>
                                    <div class="col-md-12">                                    
                                        <label class="check"><input type="radio" class="iradio" name="status" value="Transferred" required/> Transferred</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="modal-footer">
                    <button type="button" class="endtreatment btn btn-info" value="<?php echo $f2['immunization_id']; ?>">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>
<?php
    }
$conn->close();
?>