				<?php
	require 'require/config.php';
			$query = $conn->query("SELECT * FROM `family_planning` NATURAL JOIN `patient` WHERE `patient_id` = '$_GET[id]' &&  `family_planning_id` = '$_GET[fp_id]'") or die(mysqli_error());
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
							<h6><strong>Date of Birth: </strong><?php echo $fetch['patient_birthdate']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Highest Education: </strong><?php echo $fetch['patient_highest_education']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Occupation: </strong><?php echo $fetch['patient_occupation']?></h6>
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
						</div>
						<div class="col-md-6">    
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Address: </strong><?php echo $fetch['address']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Province: </strong><?php echo $fetch['address']?></h6>
							<h6><strong>Registration Date: </strong><?php echo $fetch['date']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>No. of Living Children: </strong><?php echo $fetch['no_of_living_children']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Plan More Children: </strong><?php echo $fetch['plan_more_children']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Reason for Practicing FP: </strong><?php echo $fetch['reason_for_practicing_fp']?></h6>
							<hr style="margin:0px 0 5px 0;">
							<h6><strong>Method Accepted: </strong><?php echo $fetch['method_accepted']?></h6>
						</div>
					</div>
				</div>&nbsp;<hr>
				<h2> <strong>Medical History</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">

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
								<!--php code here-->
							<tr>
								<td><center>Enlarged thyroid</center></td>
								<td><center>Severe chest pain</center></td>
								<td><center>Mass in the abdomen</center></td>
								<td><center>Mass in the Uterus</center></td>
								<td><center>Severe varicosities</center></td>
								<td><center>yellowish skin</center></td>
								<td><center>Smoking, Allergies</center></td>
							</tr>
						</tbody>
					</table>
				</div>&nbsp;<hr>
				<h2> <strong>Obsterical History</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr class="warning">
								<th><center>Date of last delivery</center></th>
								<th><center>Type of last delivery</center></th>
								<th><center>Past menstrual period</center></th>
								<th><center>Last menstrual period</center></th>
								<th><center>Duration and character of Menstrual bleeding</center></th>
								<th><center>History of any of the following</center></th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
							</tr>
						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>STI Risks</strong></h2><hr>
				<h4>Results</h4>
				<div class="panel-body panel-body-table">
					<table class="table table-bordered">
						<thead>
							<tr class="warning">
								<th><center>Option</center></th>
								<th><center>For Women</center></th>
								<th><center>For Men</center></th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
							</tr>
						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>Physical Examination</strong></h2><hr>
				<h4>Results</h4>                
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr class="warning">
								<th><center>Blood Pressure</center></th>
								<th><center>Weight</center></th>
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
							
							<tr>
								<td><center></center></td>
								<td><center></center></td>
							</tr>
							
						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>Pelvic Examination</strong></h2><hr>
				<h4>Results</h4>                
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr class="warning"> 
								<th><center>Perineum</center></th>
								<th><center>Uterus</center></th>
								<th><center>Vagina</center></th>
								<th><center>Size</center></th>
								<th><center>Mass</center></th>
								<th><center>Uterine Depth</center></th>
								<th><center>Cervix</center></th>
								<th><center>Adnexa</center></th>
								<th><center>Consistency</center></th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
							</tr>

						</tbody>
					</table>
				</div>&nbsp;<hr>

				<h2> <strong>Risks for Violence Against Women (VAW)</strong></h2><hr>
				<h4>Overview</h4>    
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr class="warning"> 
								<th><center>option</center></th>
								<th><center>Referred to</center></th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td><center></center></td>
								<td><center></center></td>
							</tr>

						</tbody>
					</table>
				</div>
				&nbsp;
				<hr>
				<h2> <strong>Follow Up Schedule</strong></h2><hr>
				<h4>Overview</h4>    
				<div class="panel-body panel-body-table">
					<table  class="table table-bordered">
						<thead>
							<tr class="warning"> 
								<th><center>Date Service Given</center></th>
								<th><center>Method/Brand</center></th>
								<th><center>No. of Units</center></th>
								<th><center>Remarks</center></th>
								<th><center>Name of Provider</center></th>
								<th><center>Next Service Date</center></th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
								<td><center></center></td>
							</tr>

						</tbody>
					</table>
				</div>
<!--
					<table  class="table table-bordered">

						<thead>
							<tr class="warning">
								<th><center>Criteria</center></th>
								<th><center>Frequency of occurences during treatment</center></th>

							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td> Unexplained fever greater than 2 weeks</td>
								<td><center>dfd</center></td>
							</tr>
							<tr>
								<td>Unexplained cough or wheezing greater than 2 weeks</td>
								<td><center>dfdf</center></td>
							</tr>
							<tr>
								<td>Unimproved general well-being</td>
								<td><center>dfd</center></td>
							</tr>
							<tr>
								<td>Poor Appetite</td>
								<td><center>dfd</center></td>
							</tr>
							<tr>
								<td>Positive PE findings for Extra-pulmonary TB</td>
								<td><center>dfd</center></td>
							</tr>
						</tbody>
					</table>
-->
<!--
				<h2> <strong>Medicines and Dosages Taken</strong></h2><hr>
				<h4>Graphical</h4>    
				<div id="medicines_taken" style="width: 100%; height: 425px"></div>
-->
			</div>
		</div>
	</div>
	<div class="col-md-3" style="position: relative;">
		<div id="tocify"></div>
	</div>
</div>