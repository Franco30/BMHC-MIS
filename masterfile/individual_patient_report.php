<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$patient_id = $fetch['patient_id'];
?>
<div class="row">
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="tocify-content">
					<h2> <strong><mark>Patient ID: <?php echo $fetch['year']. "0" .$fetch['patient_id']?></mark></strong></h2>
					<hr>
					<h4>Overview</h4>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<h6><strong>Name: </strong><?php echo $fetch['patient_name']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Age: </strong><?php echo $fetch['age']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Gender: </strong><?php echo $fetch['gender']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Contact Number: </strong><?php echo $fetch['contact_no']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Home Address: </strong>Purok <?php echo $fetch['purok']." ".$fetch['street_address']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Province: </strong><?php echo $fetch['region_province']?></h6>
								<hr style="margin:0px 0 5px 0;">
							</div>
							<div class="col-md-6">
								<h6><strong>Birthdate: </strong><?php echo $fetch['birthdate']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Occupation: </strong><?php echo $fetch['occupation']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Contact Person: </strong><?php echo $fetch['contact_person']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Emergency No: </strong><?php echo $fetch['emergency_no']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Philhealth No: </strong><?php echo $fetch['philhealth_no']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h6><strong>Registration Date: </strong><?php echo $fetch['date']?></h6>
								<hr style="margin:0px 0 5px 0;">
								<h5><strong>Status: </strong><?php if ($fetch['status'] === "Active")echo "<span class='badge badge-success'>Active</span>";
								if ($fetch['status'] === "Deceased")echo "<span class='badge badge-default'>Deceased</span>"
								?>
								</h5>
								<hr style="margin:0px 0 5px 0;">
							</div>
						</div>
					</div>&nbsp;
				<?php if($fetch['gender'] == 'Female') { ?>	
					<hr>
					<h2><strong>Prenatal</strong></h2>
					<hr>
					<h4>Overview</h4>
					<?php require 'masterfile/masterfile_prenatal.php'; ?>
					<hr>
					<h2><strong>Family Planning</strong></h2>
					<hr>
					<h4>Overview</h4>
					<?php require 'masterfile/masterfile_familyplanning.php'; ?>
				<?php } ?>
					<hr>
					<h2><strong>Consultation</strong></h2>
					<hr>
					<h4>Overview</h4>
					<?php require 'masterfile/masterfile_consultation.php'; ?>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3 print" style="position: relative;">
		<div id="tocify"></div>
	</div>
</div>
