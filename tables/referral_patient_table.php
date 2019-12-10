<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<div class="table-responsive">
<table id="referralpatienttable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>Patient Name</center></th>
            <th><center>Hospital</center></th>
            <th><center>Complaints</center></th>
            <th><center>Referred by</center></th>
            <th><center>Referral Date</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
	        require '../require/config.php';
			$query = $conn->query("SELECT * FROM `referral` ORDER BY `referral_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><strong><?php echo $fetch['patient_name'] ?></strong></td>
            <td><?php echo $fetch['to_hospital'] ?></td>
            <td style="width:16%;"><?php echo $fetch['complaints'] ?></td>
            <td><?php echo $fetch['referred_by'] ?></td>
            <td><center><?php echo $fetch['referral_date'] ?></center></td>
            <td><center>
            <a href="referral_record?referral_id=<?php echo $fetch['referral_id']?>" class="btn btn-sm btn-default">Overview </a>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editreferral<?php echo $fetch['referral_id']?>">Edit</button>
            </center>
           <?php require ('../modals/editreferral.php'); ?>
            </td>
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