<div class="modal fade" id="edit_child_patient<?php echo $fetch['child_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel2" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield2"></span></center>
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
                                <input type="text" class="form-control" id="child_name<?php echo $fetch['child_id']; ?>" value="<?php echo $fetch['child_name']; ?>" onkeyup="myFunction(this.id);" placeholder="Enter Child's Name" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Gender</label>
                                        <select class="form-control select" id="gender2<?php echo $fetch['child_id']; ?>">
                                            <option value="<?php echo $fetch['gender']; ?>"><?php echo $fetch['gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Birth Weight</label>
                                        <input type="text" id="birth_weight<?php echo $fetch['child_id']; ?>" value="<?php echo $fetch['birth_weight']; ?>" class="form-control" placeholder="Enter Weight in kg" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Date First Seen</label>
                                        <input type="text" id="date_first_seen<?php echo $fetch['child_id']; ?>" value="<?php echo $fetch['date_first_seen']; ?>" class="form-control datepicker" placeholder="Enter Date" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Birth Date</label>
                                        <input type="text" id="birthdate2<?php echo $fetch['child_id']; ?>" value="<?php echo $fetch['birthdate']; ?>" class="form-control datepicker" placeholder="Enter Date of Birth" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Purok</label>
                                <select class="form-control select" data-live-search="true" id="purok2<?php echo $fetch['child_id']; ?>">
                                    <option value="<?php echo $fetch['purok']; ?>"><?php echo $fetch['purok']; ?></option>
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
                                <textarea class="form-control" spellcheck="false" id="street_address2<?php echo $fetch['child_id']; ?>" required><?php echo $fetch['street_address']; ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Place of Delivery</label>
                                        <input type="text" id="place_of_delivery<?php echo $fetch['child_id']; ?>" class="form-control" placeholder="Enter Name of the Hospital" value="<?php echo $fetch['place_of_delivery']; ?>" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Local Civil Registry Date</label>
                                        <input type="text" id="birth_register_date<?php echo $fetch['child_id']; ?>" class="form-control datepicker" placeholder="Enter Date of Registry" value="<?php echo $fetch['birth_register_date']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Mother's Name</label>
                                        <input type="text" id="mother_name<?php echo $fetch['child_id']; ?>" class="form-control" value="<?php echo $fetch['mother_name']; ?>" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Educational Level</label>
                                        <input type="text" id="mother_education<?php echo $fetch['child_id']; ?>" class="form-control" value="<?php echo $fetch['mother_education']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="mother_occupation<?php echo $fetch['child_id']; ?>" value="<?php echo $fetch['mother_occupation']; ?>" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-left:-10px;">
                                        <label>Father's Name</label>
                                        <input type="text" id="father_name<?php echo $fetch['child_id']; ?>" class="form-control" value="<?php echo $fetch['father_name']; ?>" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-right:-10px;">
                                        <label>Educational Level</label>
                                        <input type="text" id="father_education<?php echo $fetch['child_id']; ?>" class="form-control" value="<?php echo $fetch['father_education']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" class="form-control" id="father_occupation<?php echo $fetch['child_id']; ?>" value="<?php echo $fetch['father_occupation']; ?>" required />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" value="<?php echo $fetch['child_id']; ?>" class="btn btn-success editchild">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
