				<?php
	require 'require/config.php';
			$query = $conn->query("SELECT * FROM `family_planning`, `patient` WHERE `patient`.`patient_id` =  '$_GET[id]' && `family_planning`.`patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$id = $fetch['patient_id'];
			?>
<div class="row">
	<div class="col-md-9">
		<div class="panel-body">
			<div class="tocify-content">
			<h2> <strong><mark>Family Planning No: <?php echo $fetch['year']. "0" .$fetch['family_planning_id']?></mark></strong></h2><hr>
				<h4>Overview</h4>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-5">                                                
							<h6><strong>Type of Acceptor: </strong><?php echo $fetch['type_of_acceptor']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Previously Used Method: </strong><?php echo $fetch['prev_used_method']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Patient Name: </strong><?php echo $fetch['patient_name']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Date of Birth: </strong><?php echo $fetch['birthdate']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Highest Education: </strong><?php echo $fetch['patient_highest_education']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Occupation: </strong><?php echo $fetch['occupation']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Name of Spouse: </strong><?php echo $fetch['spouse_name']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Date of Birth: </strong><?php echo $fetch['spouse_birthdate']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Highest Education: </strong><?php echo $fetch['spouse_highest_education']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Occupation: </strong><?php echo $fetch['spouse_occupation']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Average Monthly Income: </strong><?php echo $fetch['average_monthly_income']?></h6>
							<hr style="margin:0px 0 5px 0;">
						</div>
						<div class="col-md-6">    
							<h6><strong>Address: </strong><?php echo $fetch['purok']." ".$fetch['street_address'];?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Province: </strong><?php echo $fetch['region_province']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Registration Date: </strong><?php echo $fetch['date_time']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>No. of Living Children: </strong><?php echo $fetch['no_of_living_children']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Plan More Children: </strong><?php echo $fetch['plan_more_children']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Reason for Practicing FP: </strong><?php echo $fetch['reason_for_practicing_fp']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Method Accepted: </strong><?php echo $fetch['method_accepted']?></h6>
							<hr style="margin:0px 0 5px 0;">
						</div>
					</div>
				</div>&nbsp;<hr>
				<h2> <strong>Medical History</strong></h2><hr>
				<h4>Results</h4>
				<div class="table-responsive">
				<div class="panel-body panel-body-table">
					<table class="table table-bordered">
						<thead>
							<tr class="warning">
								<th><center>Heent</center></th>
								<th><center>Chest/Heart</center></th>
								<th><center>Abdomen</center></th>
								<th><center>Genital</center></th>
								<th><center>Extremities</center></th>
								<th><center>Skin</center></th>
								<th><center>History of any of the Following</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `medical_history` WHERE `patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
							<tr>
								<td><center><?php echo $fetch['heent'];?></center></td>
								<td><center><?php echo $fetch['chest_heart'];?></center></td>
								<td><center><?php echo $fetch['abdomen'];?></center></td>
								<td><center><?php echo $fetch['genital'];?></center></td>
								<td><center><?php echo $fetch['extremities'];?></center></td>
								<td><center><?php echo $fetch['skin'];?></center></td>
								<td><center><?php echo $fetch['history'];?></center></td>
							</tr>
							<?php
							}
							$conn->close();
							?>
						</tbody>
					</table>
				</div>
				</div>
				&nbsp;
				<hr>
				<h2> <strong>Obstetrical History</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<div class="table-responsive">
					<table class="table table-bordered" style="max-width: 300%;width: 200%;">
						<thead>
							<tr class="warning">
								<th><center>Number of pregnancies</center></th>
								<th><center>Full Term</center></th>
								<th><center>Premature</center></th>
								<th><center>Abortions</center></th>
								<th><center>Living Children</center></th>
								<th><center>Date of last delivery</center></th>
								<th><center>Type of last delivery</center></th>
								<th><center>Past menstrual period</center></th>
								<th><center>Last menstrual period</center></th>
								<th><center>Duration and character of Menstrual bleeding</center></th>
								<th><center>History of any of the following</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `obstetrical_history` WHERE `patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>				
							<tr>
								<td><center><?php echo $fetch['num_of_pregnancies'];?></center></td>
								<td><center><?php echo $fetch['full_term'];?></center></td>
								<td><center><?php echo $fetch['premature'];?></center></td>
								<td><center><?php echo $fetch['abortions'];?></center></td>
								<td><center><?php echo $fetch['living_children'];?></center></td>
								<td><center><?php echo $fetch['dateoflastdelivery'];?></center></td>
								<td><center><?php echo $fetch['typeoflastdelivery'];?></center></td>
								<td><center><?php echo $fetch['pastmenstrualperiod'];?></center></td>
								<td><center><?php echo $fetch['lastmenstrualperiod'];?></center></td>
								<td><center><?php echo $fetch['dcmenstrualbleeding'];?></center></td>
								<td><center><?php echo $fetch['history'];?></center></td>
							</tr>
						<?php
						}
						$conn->close();
						?>
						</tbody>
					</table>
					</div>
				</div>&nbsp;<hr>

				<h2> <strong>STI Risks</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<tr class="warning">
								<th><center>Option</center></th>
								<th><center>For Women</center></th>
								<th><center>For Men</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `sti_risks` WHERE `patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>	
							<tr>
								<td><center><?php echo $fetch['sti_risk'];?></center></td>
								<td><center><?php echo $fetch['forwomen'];?></center></td>
								<td><center><?php echo $fetch['formen'];?></center></td>
							</tr>
						<?php
						}
						$conn->close();
						?>
						</tbody>
					</table>
					</div>
				</div>&nbsp;<hr>

				<h2> <strong>Physical Examination</strong></h2><hr>
				<h4>Results</h4>                
				<div class="panel-body panel-body-table">
					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="warning">
								<th><center>Blood Pressure</center></th>
								<th><center>Weight</center></th>
								<th><center>Height</center></th>
								<th><center>Pulse Rate</center></th>
								<th><center>Conjunctiva</center></th>
								<th><center>Neck</center></th>
								<th><center>Breast</center></th>
								<th><center>Thorax</center></th>
								<th><center>Abdomen</center></th>
								<th><center>Extremities</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `physical_examination` WHERE `patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
							<tr>
								<td><center><?php echo $fetch['bp'];?></center></td>
								<td><center><?php echo $fetch['weight'];?></center></td>
								<td><center><?php echo $fetch['height'];?></center></td>
								<td><center><?php echo $fetch['pr'];?></center></td>
								<td><center><?php echo $fetch['conjunctiva'];?></center></td>
								<td><center><?php echo $fetch['neck'];?></center></td>
								<td><center><?php echo $fetch['breast'];?></center></td>
								<td><center><?php echo $fetch['thorax'];?></center></td>
								<td><center><?php echo $fetch['abdomen'];?></center></td>
								<td><center><?php echo $fetch['extremities'];?></center></td>
							</tr>
						<?php
						}
						$conn->close();
						?>
						</tbody>
					</table>
					</div>
				</div>&nbsp;<hr>

				<h2> <strong>Pelvic Examination</strong></h2><hr>
				<h4>Results</h4>                
				<div class="panel-body panel-body-table">
					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="warning"> 
								<th><center>Perineum</center></th>
								<th><center>Vagina</center></th>
								<th><center>Cervix</center></th>
								<th><center>Consistency</center></th>
								<th><center>Uterus Position</center></th>
								<th><center>Uterus Size</center></th>
								<th><center>Uterus Mass</center></th>
								<th><center>Uterine Depth</center></th>
								<th><center>Adnexa</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `pelvic_examination` WHERE `patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>	
							<tr>
								<td><center><?php echo $fetch['perineum'];?></center></td>
								<td><center><?php echo $fetch['vagina'];?></center></td>
								<td><center><?php echo $fetch['cervix'];?></center></td>
								<td><center><?php echo $fetch['consistency'];?></center></td>
								<td><center><?php echo $fetch['uterus_position'];?></center></td>
								<td><center><?php echo $fetch['uterus_size'];?></center></td>
								<td><center><?php echo $fetch['uterus_mass'];?></center></td>
								<td><center><?php echo $fetch['uterine_depth'];?> cms.</center></td>
								<td><center><?php echo $fetch['adnexa'];?></center></td>
							</tr>
						<?php
						}
						$conn->close();
						?>
						</tbody>
					</table>
					</div>
				</div>&nbsp;<hr>

				<h2> <strong>Risks for Violence Against Women (VAW)</strong></h2><hr>
				<h4>Overview</h4>    
				<div class="panel-body panel-body-table">
					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="warning"> 
								<th><center>option</center></th>
								<th><center>Referred to</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `risk_for_vaw` WHERE `patient_id` = '$_GET[id]' && `family_planning_id` = '$_GET[fp_id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>	
							<tr>
								<td><center><?php echo $fetch['risks'];?></center></td>
								<td><center><?php echo $fetch['referred_to'];?></center></td>
							</tr>
						<?php
						}
						$conn->close();
						?>
						</tbody>
					</table>
					</div>
				</div>
				&nbsp;
				<hr>
				<h2> <strong>Follow Up Schedule</strong></h2><hr>
				<h4>Overview</h4>    
				<div class="panel-body panel-body-table">
					<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="warning"> 
								<th><center>Date Service Given</center></th>
								<th><center>Method/Brand</center></th>
								<th><center>No. of Units</center></th>
								<th><center>Remarks</center></th>
								<th><center>Name of Provider</center></th>
								<th><center>Next Service Date</center></th>
								<th><center>Status</center></th>
							</tr>
						</thead>
						<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `fp_follow_up` WHERE `patient_id` = '$_GET[id]' order by `patient_id` DESC") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>		
							<tr>
								<td><center><?php echo $fetch['date_service_given'];?></center></td>
								<td><center><?php echo $fetch['method_brand'];?></center></td>
								<td><center><?php echo $fetch['no_of_units'];?></center></td>
								<td><center><?php echo $fetch['remarks'];?></center></td>
								<td><center><?php echo $fetch['name_of_provider'];?></center></td>
								<td><center><?php echo $fetch['next_service_date'];?></center></td>
								<td><center><?php echo $fetch['follow_up_status'];?></center></td>
							</tr>
						<?php
						}
						$conn->close();
						?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3 print" style="position: relative;">
		<div id="tocify"></div>
	</div>
</div>