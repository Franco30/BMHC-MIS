<div class="modal fade" id="add_prescription" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <center>
                <div id="modallabel" class="alert alert-danger" style="display:none;">
                    <center><span id="checkfield"></span></center>
                </div>
            </center>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Add Prescription</strong></h4>
            </div>
            <div class="modal-body">
                <form id="medicine">
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Medicine Category</label>
                                <select class="form-control select" data-live-search="true" id="medicine_category" name="medicine_category">
                                    <option value="" selected disabled>Select</option>
                                    <option value="Antibiotic">Antibiotic</option>
                                    <option value="Antipyretic">Antipyretic</option>
                                    <option value="Analgesic">Analgesic</option>
                                    <option value="Vitamins">Vitamins</option>
                                    <option value="CoughPreparation">Cough Preparation</option>
                                    <option value="Antihistamines">Antihistamines</option>
                                </select>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row" id="category1" style="display:none;">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Antibiotic</label>
                                    <select class="form-control select" data-live-search="true" id="antibiotic" required>
                                        <option value="#">Select</option>
                                        <?php
                                    $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine` WHERE `medicine_category` = 'Antibiotic'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                        <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Breakfast</label>
                                    <input type="number" class="form-control" id="breakfast" placeholder="Input Qty." required />
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>Lunch</label>
                                    <input type="number" class="form-control" id="lunch" placeholder="Input Qty." required />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Dinner</label>
                                    <input type="number" class="form-control" id="dinner" placeholder="Input Qty." required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row" id="category2" style="display:none;">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Antipyretic</label>
                                    <select class="form-control select" data-live-search="true" id="antipyretic" required>
                                        <option value="#">Select</option>
                                        <?php
                                    $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine` WHERE `medicine_category` = 'Antipyretic'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                        <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Breakfast</label>
                                    <input type="number" class="form-control" id="breakfast" placeholder="Input Qty." required />
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>Lunch</label>
                                    <input type="number" class="form-control" id="lunch" placeholder="Input Qty." required />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Dinner</label>
                                    <input type="number" class="form-control" id="dinner" placeholder="Input Qty." required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row" id="category3" style="display:none;">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Analgesic</label>
                                    <select class="form-control select" data-live-search="true" id="analgesic" required>
                                        <option value="#">Select</option>
                                        <?php
                                    $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine` WHERE `medicine_category` = 'Analgesic'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                        <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Breakfast</label>
                                    <input type="number" class="form-control" id="breakfast" placeholder="Input Qty." required />
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>Lunch</label>
                                    <input type="number" class="form-control" id="lunch" placeholder="Input Qty." required />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Dinner</label>
                                    <input type="number" class="form-control" id="dinner" placeholder="Input Qty." required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row" id="category4" style="display:none;">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Vitamins</label>
                                    <select class="form-control select" data-live-search="true" id="vitamins" required>
                                        <option value="#">Select</option>
                                        <?php
                                    $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine` WHERE `medicine_category` = 'Vitamins'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                        <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Breakfast</label>
                                    <input type="number" class="form-control" id="breakfast" placeholder="Input Qty." required />
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>Lunch</label>
                                    <input type="number" class="form-control" id="lunch" placeholder="Input Qty." required />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Dinner</label>
                                    <input type="number" class="form-control" id="dinner" placeholder="Input Qty." required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row" id="category5" style="display:none;">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Cough Preparation</label>
                                    <select class="form-control select" data-live-search="true" id="cough_preparation" required>
                                        <option value="#">Select</option>
                                        <?php
                                    $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine` WHERE `medicine_category` = 'Cough Preparation'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                        <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Breakfast</label>
                                    <input type="number" class="form-control" id="breakfast" placeholder="Input Qty." required />
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>Lunch</label>
                                    <input type="number" class="form-control" id="lunch" placeholder="Input Qty." required />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Dinner</label>
                                    <input type="number" class="form-control" id="dinner" placeholder="Input Qty." required />
                                </div>
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-row" id="category6" style="display:none;">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-right:-10px;">
                                    <label>Antihistamines</label>
                                    <select class="form-control select" data-live-search="true" id="antihistamines" required>
                                        <option value="#">Select</option>
                                        <?php
                                    $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `medicine` WHERE `medicine_category` = 'Antihistamines'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                        <option value="<?php echo $fetch['medicine_id'];?>"><?php echo $fetch['medicine_name']?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;margin-right:-10px;">
                                    <label>Breakfast</label>
                                    <input type="number" class="form-control" id="breakfast" placeholder="Input Qty." required />
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-right:-10px;margin-left:-10px;">
                                    <label>Lunch</label>
                                    <input type="number" class="form-control" id="lunch" placeholder="Input Qty." required />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" style="margin-left:-10px;">
                                    <label>Dinner</label>
                                    <input type="number" class="form-control" id="dinner" placeholder="Input Qty." required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Recommendations</label>
                                <textarea class="form-control" id="recommendations"></textarea>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addnew" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
