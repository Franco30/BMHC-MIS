<div class="modal fade" id="new_prenatal" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">New Prenatal Record</h4>
            </div>
            <div class="modal-body">
                <form id="patientform">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Name</label>
                                <select class="form-control select" data-live-search="true" id="provider">
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
									?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input id="age" type="number" class="form-control" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Menstrual Hx</label>
                                        <input type="text" class="form-control" id="menstrualhx"
                                            placeholder="Enter Menstrual Hx" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Menarch</label>
                                        <input type="text" class="form-control" id="menarch" placeholder="Enter Menarch"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Flow</label>
                                        <input type="text" class="form-control" id="flow" placeholder="Enter Flow"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dysmenorrhea</label>
                                        <input type="text" class="form-control" id="dysmenorrhea"
                                            placeholder="Enter Dysmenorrhea" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>OB-Gyne Hx</label>
                                <textarea class="form-control" spellcheck="false" id="obgynehx"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Past Medical Hx</label>
                                <textarea class="form-control" spellcheck="false" id="pastmedicalhx"></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name of Husband</label>
                                <input type="text" class="form-control" id="husband" placeholder="Enter Husband"
                                    required />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter Address"
                                    required />
                            </div>
                            <div class="form-group">
                                <label>Cycle</label>
                                <input type="text" class="form-control" id="cycle" placeholder="Enter Cycle" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <input type="text" class="form-control" id="cycle" placeholder="Enter Duration"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blood Type</label>
                                        <input type="text" class="form-control" id="bloodtype"
                                            placeholder="Enter Blood Type" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>TT1</label>
                                        <input type="text" class="form-control" id="tt1" placeholder="Enter TT1"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>TT2</label>
                                        <input type="text" class="form-control" id="tt2" placeholder="Enter TT2"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>TT3</label>
                                        <input type="text" class="form-control" id="tt3" placeholder="Enter TT3"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>TT4</label>
                                        <input type="text" class="form-control" id="tt4" placeholder="Enter TT4"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>TT5</label>
                                <input type="text" class="form-control" id="tt5" placeholder="Enter TT5" required />
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