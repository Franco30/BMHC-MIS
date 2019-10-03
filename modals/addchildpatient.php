<div class="modal fade" id="new_child_patient" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New Child Patient</h4>
            </div>
            <div class="modal-body">
                <form id="patientform">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Child Name</label>
                                <input type="text" class="form-control" id="child_name" onkeyup="myFunction(this.id);" placeholder="Enter Child's Name" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Gender</label>
                                        <select class="form-control select" style="display: none;" id="gender">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Birth Weight</label>
                                        <input type="text" id="weight" class="form-control" placeholder="Enter Weight in kg" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Date First Seen</label>
                                        <input type="text" id="date_first_scene" class="form-control datepicker" placeholder="Enter Date" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Birth Date</label>
                                        <input type="text" id="birthdate" class="form-control datepicker" placeholder="Enter Date of Birth" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Purok</label>
                                <select class="form-control select" data-live-search="true" style="display: none;" id="purok">
                                    <option>Select</option>
                                    <option value="Gauzon">Prk. Gauzon</option>
                                    <option value="Himaya">Prk. Himaya</option>
                                    <option value="Kabugwason">Prk. Kabugwason</option>
                                    <option value="Kahirup A">Prk. Kahirup A</option>
                                    <option value="Kahirup B">Prk. Kahirup B</option>
                                    <option value="Kasilingan">Prk. Kasilingan</option>
                                    <option value="Katilingban">Prk. Katilingban</option>
                                    <option value="Mabinuligon">Prk. Mabinuligon</option>
                                    <option value="Matahum">Prk. Matahum</option>
                                    <option value="Paghidaet">Prk. Paghidaet</option>
                                    <option value="Paglaum">Prk. Paglaum</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Street Address</label>
                                <textarea class="form-control" spellcheck="false" id="streetaddress"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Place of Delivery</label>
                                        <input type="text" id="placeofdelivery" class="form-control" placeholder="Enter Name of the Hospital" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Local Civil Registry Date</label>
                                        <input type="text" id="birthregistered" class="form-control datepicker" placeholder="Enter Date of Registry" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Mother's Name</label>
                                        <input type="text" id="mothername" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Educational Level</label>
                                        <input type="text" id="meducationlevel" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="moccupation" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Father's Name</label>
                                        <input type="text" id="fathername" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Educational Level</label>
                                        <input type="text" id="feducationlevel" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="foccupation" required />
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
