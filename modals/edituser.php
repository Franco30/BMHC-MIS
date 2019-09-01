<div class="modal fade" id="edituser<?php echo $fetch['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Edit User</h4>
            </div>
            <div class="modal-body">
            <form id="users">
                    <fieldset>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="<?php echo $fetch['fullname']; ?>" id="fullname<?php echo $fetch['user_id']; ?>" class="form-control" placeholder="Enter Complete Name" required />
                        </div>
                        <div class="form-group">
                            <label>License</label>
                            <input type="text" value="<?php echo $fetch['license']; ?>" id="license<?php echo $fetch['user_id']; ?>" class="form-control" placeholder="Enter License" required />
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                                <select id="position<?php echo $fetch['user_id']; ?>" class="form-control select" required>
                                    <option ><?php echo $fetch['position']; ?></option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Midwife">Midwife</option>
                                    <option value="Contractual Employee - BHW">Contractual Employee - BHW</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" value="<?php echo $fetch['username']; ?>" id="username<?php echo $fetch['user_id']; ?>" class="form-control" placeholder="Enter Username" required />
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" name="password" id="password" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" name="confirmpassword" id="confirmpassword" class="form-control" required />
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="updateuser btn btn-success" value="<?php echo $fetch['user_id']; ?>"> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
<script>
			$("#users").validate({
				ignore: [],
				rules: {
					password: {
						minlength: 5,
						maxlength: 10
					},
					'confirmpassword': {
						minlength: 5,
						maxlength: 10,
						equalTo: "#password"
					}
				}
			});
		</script>