<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalreferralpatienttable" class="table datatable">
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
	$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
			$query = $conn->query("SELECT * FROM `referral_prenatal` ORDER BY `referral_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
											?>
        <tr>
            <td><center><?php echo $fetch['patient_name'] ?></center></td>
            <td><center><?php echo $fetch['to_hospital'] ?></center></td>
            <td><center><?php echo $fetch['complaints'] ?></center></td>
            <td><center><?php echo $fetch['referred_by'] ?></center></td>
            <td><center><?php echo $fetch['referral_date'] ?></center></td>
            <td><center>
            <a href="referral_prenatal_record?referral_id=<?php echo $fetch['referral_id']?>" class="btn btn-sm btn-info">Overview </a>
                </center>
            </td>
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