<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="patienttable" class="table datatable" width="100%">
    <thead>
        <tr>
            <th class="colorshit"><center>Patient ID</center></th>
            <th><center>Patient Name</center></th>
            <th><center>Birth Date</center></th>
            <th><center>Age</center></th>
            <th><center>Gender</center></th>
            <th><center>Civil Status</center></th>
            <th><center>Purok</center></th>
            <th><center>Street Address</center></th>
            <th><center>Contact Number</center></th>
<!--            <th class="print"><center>Action</center></th>-->
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient` order by `patient_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><strong><?php echo $fetch['year']."0".$fetch['patient_id'];?></strong></center></td>
            <td><center><strong><?php echo $fetch['patient_name']?></strong></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center><?php echo $fetch['age']?></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
            <td><center><?php echo $fetch['civil_status']?></center></td>
            <td><center>Prk. <?php echo $fetch['purok']?></center></td>
            <td><center><?php echo $fetch['street_address']?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
<!--
            <td class="print"><center>
                <div class="btn-group">
                <a href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Services <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                <li role="presentation" class="dropdown-header">Select Services</li>
                    <?php //if($fetch['gender'] == 'Female') { ?>
                <li><a href="add_prenatal?patient_id=<?php //echo $fetch['patient_id']?>">Prenatal</a></li>
                <li><a href="add_familyplanning?patient_id=<?php //echo $fetch['patient_id']?>">Family Planning</a></li>
                    <?php //} ?>
                <li><a href="add_consultation?patient_id=<?php// echo $fetch['patient_id']?>">Consultation</a></li>                                                    
                </ul>
                </div>
            </center></td>
-->
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
    </div>
<?php
}
?>