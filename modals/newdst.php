<div class="modal fade" id="newdst" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
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
                <h4 class="modal-title" id="defModalHead">Enter Drug Susceptible Test Result</h4>
            </div>
            <div class="modal-body">
                <form id="patientform">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Patient Name</label>
                                <select class="form-control select" name="visual_appearance" data-live-search="true"
                                    required>
                                    <option value="">Select...</option>
                                    <option value="Salivary">Juan Dela Cruz</option>
                                    <option value="Muco-Purulent">Pedro Dela Cruz</option>
                                    <option value="Blood-Stained">Elmer Haro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>TB Culture Laboratory</label>
                                <input type="text" class="form-control" name="tb_culture_laboratory" data-toggle="tooltip" data-placement="bottom" title="TB Culture Laboratory" required/>
                            </div>
                            <div class="form-group">
                                <label>DST Laboratory</label>
                                <input type="text" class="form-control" name="dst_laboratory" data-toggle="tooltip" data-placement="bottom" title="DST Laboratory" required/>
                            </div>
                            <div class="form-group">
                                <label>Date Collected</label>
                                <input type="text" class="form-control datepicker" id="date_collected" name="date_collected" data-toggle="tooltip" data-placement="bottom" title="Date Collected " required/>
                            </div>
                            <div class="form-group">
                                <label>Date Received</label>
                                <input type="text" class="form-control datepicker" id="date_received" name="date_received" data-toggle="tooltip" data-placement="bottom" title="Date Received " required/>								
                            </div>
                            <div class="form-group">
                                <label>Method</label>
                                <input type="text" class="form-control" name="method" data-toggle="tooltip" data-placement="bottom" title="Method" required/>								
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Isoniazid</label>
                                <select class="form-control select" name="tb_culture_result" required>
                                    <option value="">Select</option>
                                    <option value="Not Done">[0] - Negative</option>
                                    <option value="Resistant">[MTB] - MTB detected</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rifampicin</label>
                                <select class="form-control select" name="rifampicin" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ethambutol</label>
                                <select class="form-control select" name="ethambutol" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Streptomycin</label>
                                <select class="form-control select" name="streptomycin" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pyrazinamide</label>
                                <select class="form-control select" name="pyrazinamide" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" class="form-control" name="remarks" data-toggle="tooltip" data-placement="bottom" title="Remarks" required/>										
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Levofloxacin</label>
                                <select class="form-control select" name="levofloxacin" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kanamycin</label>
                                <select class="form-control select" name="kanamycin" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Amikacin</label>
                                <select class="form-control select" name="amikacin" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Capreomycin</label>
                                <select class="form-control select" name="streptomycin" required >
                                    <option value = "">Select</option>
                                    <option value = "Resistant">[R] - Resistant</option>
                                    <option value = "Susceptible">[S] - Susceptible</option>
                                    <option value = "Not Done">[ND] - Not Done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Examined By</label>
                                <input type="text" class="form-control" name="examined_by" data-toggle="tooltip" data-placement="bottom" title="Examined By" required/>
                            </div>
                            <div class="form-group">
                                <label>Date Released</label>
                                <input type="text" class="form-control datepicker" id="date_released" name="date_released" data-toggle="tooltip" data-placement="bottom" title="Date Released " required/>
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