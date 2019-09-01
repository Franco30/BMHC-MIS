<div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New User</h4>
            </div>
            <div class="modal-body">
                <form id="users">
                    <fieldset>
                        <div class="form-group">
                            <label>Name</label>
                            <div id="cname_response"></div>
                            <input type="text" id="fullname" class="form-control" placeholder="Enter Complete Name"
                                required />
                        </div>
                        <div class="form-group">
                            <label>License</label>
                            <input type="text" id="license" class="form-control" placeholder="Enter License" required />
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                                <select id="position" class="form-control select" required>
                                    <option>Please Select</option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Midwife">Midwife</option>
                                    <option value="Contractual Employee - BHW">Contractual Employee - BHW</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <div id="uname_response"></div>
                            <input type="text" id="username" class="form-control" placeholder="Enter Username"
                                required />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" id="password" class="form-control"  placeholder="Enter Password" required />
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>