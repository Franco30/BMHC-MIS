<div class="modal fade" id="jan" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>January <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());

                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="feb" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>February <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mar" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>March <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="apr" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>April <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'April' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="may" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>May <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="jun" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>June <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="jul" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>July <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="aug" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>August <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="sep" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>September <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="oct" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in October <?php echo $year?></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="nov" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>November <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dec" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalHead">List of patients in <strong>December <?php echo $year?></strong></h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">

                    <table class="table datatable">
                        <thead>
                            <tr class="warning">
                                <th><center>Prenatal No</center></th>    
                                <th><center>Patient Name</center></th>
                                <th><center>Date</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
    require 'require/config.php';
                    $query2 = $conn->query("SELECT * FROM `prenatal` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
                    while($fetch2 = $query2->fetch_array()){
                        $id = $fetch2['patient_id'];
                        $query = $conn->query("SELECT  `patient_name`, `patient_id` FROM `patient` WHERE `patient_id` = '$id' ORDER BY `patient_id` DESC") or die(mysqli_error());
                        $fetch = $query->fetch_array();

                            ?>
                            <tr>
                                <td><center><strong><mark><?php echo $fetch2['year']. "0" .$fetch2['patient_id']?></mark></strong></center></td>
                                <td><center><?php echo $fetch['patient_name']?></center></td>
                                <td><center><?php echo $fetch2['date']?></center></td>
                            </tr>
                            <?php
                    }
                    $conn->close();
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
            </div>
        </div>
    </div>
</div>
