<div class="table-responsive">
    <table id="familyplanningmasterfile" class="table datatable">
        <thead>
            <tr class="warning">
                <th><center>Date & Time</center></th>
                <th><center>Type of Acceptor</center></th>
                <th><center>Previously Used Method</center></th>
                <th><center>Birthdate</center></th>
                <th><center>Highest Education</center></th>
                <th><center>Action</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        require 'require/config.php';
        $query = $conn->query("SELECT * FROM `family_planning` WHERE `family_planning`.`patient_id` =  '$_GET[id]'") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        $q2 = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[id]'")or die(mysqli_error());
        $f2 = $q2->fetch_array();
        ?>
            <tr>
                <td><center><?php echo $fetch['date_time']?></center></td>
                <td><center><?php echo $fetch['type_of_acceptor']?></center></td>
                <td><center><?php echo $fetch['prev_used_method']?></center></td>
                <td><center><?php echo $f2['birthdate']?></center></td>
                <td><center><?php echo $fetch['patient_highest_education']?></center></td>
                <td><center><a class="btn btn-info" href="familyplanninginfo?id=<?php echo $f2['patient_id'];?>&&fp_id=<?php echo $fetch['family_planning_id'];?>">Overview</a></center></td>
            </tr>
        <?php
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>
