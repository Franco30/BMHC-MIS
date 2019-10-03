<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="patienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient ID</center></th>
            <th><center>Patient Name</center></th>
            <th><center>Birth Date</center></th>
            <th><center>Age</center></th>
            <th><center>Gender</center></th>
            <th><center>Civil Status</center></th>
            <th><center>Address</center></th>
            <th><center>Contact Number</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `patient` order by `patient_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><center><?php echo $fetch['year']."0".$fetch['patient_id'];?></center></td>
            <td><center><?php echo $fetch['patient_name']?></center></td>
            <td><center><?php echo $fetch['birthdate']?></center></td>
            <td><center><?php echo $fetch['age']?></center></td>
            <td><center><?php echo $fetch['gender']?></center></td>
             <td><center><?php echo $fetch['civil_status']?></center></td>
            <td><center>Prk. <?php echo $fetch['purok']." ".$fetch['street_address'];?></center></td>
            <td><center><?php echo $fetch['contact_no']?></center></td>
            <td><center>
                <div class="btn-group">
                <a href="#" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Services <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                <li role="presentation" class="dropdown-header">Select Services</li>
                    <?php if($fetch['gender'] == 'Female') { ?>
                <li><a href="add-prenatal?patient_id=<?php echo $fetch['patient_id']?>">Prenatal</a></li>
                <li><a href="add_familyplanning?patient_id=<?php echo $fetch['patient_id']?>">Family Planning</a></li>
                    <?php } ?>
                <li><a href="add_consultation?patient_id=<?php echo $fetch['patient_id']?>">Consultation</a></li>                                                    
                </ul>
                </div>
            </center></td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
<?php
}
?>