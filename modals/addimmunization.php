<div class="modal fade" id="new_immunization" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
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
                <h4 class="modal-title" id="defModalHead">New Immunization</h4>
            </div>
            <div class="modal-body">
            <form id="patientform">
                        <div class="row">
                           
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                          
                            <!-- START ACCORDION -->        
                            <div class="panel-group accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#personalInfo">
                                                Personal Information
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="personalInfo">
                                    <div class="col-md-6">
                            <div class="form-group">
                            <label>Child No</label>
                            <input type="text" class="form-control" id="child_no" placeholder="Enter Child No" required />
                            </div>
                            <div class="form-group">
                                <label>4P's No</label>
                                <input type="text" class="form-control" id="4ps" placeholder="Enter 4P's" required />
                            </div>
                            <div class="form-group">
                                <label>NHTS No</label>
                                <input type="text" class="form-control" id="nhts" placeholder="Enter NHTS" required />
                            </div>
                            <div class="form-group">
                                <label>Philhealth No</label>
                                <input type="text" class="form-control" id="philhealth_no" placeholder="Enter Philhealth No" required />
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Complete Name" required />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Birthdate</label>
                                    <input type="text" class="form-control datepicker" id="birthdate" placeholder="Enter Birthdate" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Time of Birth</label>
                                    <div class="input-group bootstrap-timepicker">
                                        <input type="text" id="birthtime" class="form-control timepicker" required/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                                                   
                            </div>
                            
                            <div class="col-md-6">
                            
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control select" style="display: none;" id="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Civil Status</label>
                                    <select class="form-control select" style="display: none;" id="civil_status">
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" spellcheck="false" id="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mother's Name</label>
                                <input type="text" class="form-control" id="mothers_name" placeholder="Enter Mother's Name" required />
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Age</label>
                                        <input type="number" class="form-control" id="mothers_age" placeholder="Enter Mother's Age" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mother's Occupation</label>
                                        <input type="text" class="form-control" id="mothers_occupation" placeholder="Enter Mother's Occupation" required />
                                    </div>
                                </div>
                            </div>
                                &nbsp;
                            <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" id="fathers_name" placeholder="Enter Father's Name" required />
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father's Age</label>
                                        <input type="number" class="form-control" id="fathers_age" placeholder="Enter Father's Age" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Father's Occupation</label>
                                        <input type="text" class="form-control" id="fathers_occupation" placeholder="Enter Father's Occupation" required />
                                    </div>
                                </div>
                            </div>

                            
                                    </div>
                                    &nbsp;
                                    <div class="col-md-12">
                                    <div class="col-md-4">
                                <div class="form-group">
                                    <label>Place of Prenatal</label>
                                    <input type="text" class="form-control" id="place_prenatal" placeholder="Enter Place of Prenatal" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Place of Delivery</label>
                                    <input type="text" class="form-control" id="place_delivery" placeholder="Enter Place of Delivery" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Type of Delivery</label>
                                    <input type="text" class="form-control" id="type_delivery" placeholder="Enter Type of Delivery" required />
                                </div>
                            </div>
                        </div>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#accOneColTwo">
                                                Nutritional Status
                                            </a>
                                        </h4>
                                    </div>                                
                                    <div class="panel-body" id="accOneColTwo">
                                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Medical History</label>
                                <textarea class="form-control" spellcheck="false" id="medical_history"></textarea>
                            </div>
                            <h3>Present Illness</h3>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control datepicker" id="present_illness_date" placeholder="Enter Date" required />
                            </div>
                            <div class="form-group">
                                <label>Temperature</label>
                                <input type="text" class="form-control datepicker" id="temp" placeholder="Enter Temperature" required />
                            </div>
                            <div class="form-group">
                                <label>Respiratory Rate</label>
                                <input type="text" class="form-control datepicker" id="rr" placeholder="Enter Respiratory Rate" required />
                            </div>
                            <div class="form-group">
                                <label>Blood Pressure</label>
                                <input type="text" class="form-control datepicker" id="bp" placeholder="Enter Blood Pressure" required />
                            </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="text" class="form-control datepicker" id="weight" placeholder="Enter Weight" required />
                            </div>
                            <div class="form-group">
                                <label>Complaints</label>
                                <textarea class="form-control" spellcheck="false" id="complaints"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Diagnosis</label>
                                <textarea class="form-control" spellcheck="false" id="diagnosis"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Plan of Action</label>
                                <textarea class="form-control" spellcheck="false" id="plan_of_action"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea class="form-control" spellcheck="false" id="remarks"></textarea>
                            </div>
                            </div>
                                    </div>                                
                                </div>
                                    </div>
                                
                                
                            
                            <!-- END ACCORDION -->                        
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