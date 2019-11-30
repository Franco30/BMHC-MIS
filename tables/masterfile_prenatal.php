<div class="table-responsive">
    <table id="prenatal" class="table datatable">
        <thead>
            <tr class="warning">
                <th><center>Prenatal No</center></th>
                <th><center>Date</center></th>
                <th><center>Presentation</center></th>
                <th><center>Complaints</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `prenatal` WHERE `prenatal`.`patient_id` =  '$_GET[id]'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
    $prenatal_id = $fetch['prenatal_id'];
    $id = $fetch['patient_id'];
    $q = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'") or die(mysqli_error());
    $f = $q->fetch_array();
    $q2 = $conn->query("SELECT COUNT(*) as total FROM `prenatal_consultation` WHERE `patient_id` = '$id' && `prenatal_id` = '$prenatal_id'") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    ?>
            <tr>
                <td><center><strong><?php echo $fetch['year']?><?php echo "0".$fetch['prenatal_id']?></strong></center></td>
                <td><center><strong><?php echo $fetch['date']?></strong></center></td>
                <td><center><?php echo $fetch['date']?></center></td>
                <td><center><?php echo $fetch['date']?></center></td>
                <td>
                    <center><a href="prenatal_record?patient_id=<?php echo $f['patient_id'];?>&&prenatal_id=<?php echo $prenatal_id?>" class="btn btn-md btn-default">All Records <span class="badge"><?php echo $f2['total']?></span></a></center>
                </td>
            </tr>
            <?php
												}
												$conn->close();
													?>
        </tbody>
    </table>
</div>
