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
					<h2><strong>Consultation</strong></h2>
					<hr>
					<h4>Overview</h4>
					<div class="table-responsive">
											<table class="table table-hover table-bordered">
											<thead>
												<tr class="warning">
													<th><center>Consultation Date</center></th>
													<th><center>Head of the Family</center></th>
													<th><center>Weight</center></th>
													<th><center>Blood Pressure</center></th>
													<th><center>Temperature</center></th>
													<th><center>Respiratory Rate</center></th>
													<th><center>Pulse Rate</center></th>
													<th><center>Complaints</center></th>
													<th><center>Pertinent P.E Findings</center></th>
													<th><center>Diagnosis</center></th>
													<th><center>Laboratory Request</center></th>
												</tr>
											</thead>
											<tbody>
											<?php
											require 'require/config.php';
											$query = $conn->query("SELECT * FROM `consultation` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]' ORDER BY `consultation_id` DESC") or die(mysqli_error());
											while($fetch = $query->fetch_array()){
											?>
												<tr>
													<td><center><?php echo $fetch['consultation_date']?></center></td>
													<td><center><?php echo $fetch['head_of_the_family']?></center></td>
													<td><center><?php echo $fetch['weight']?></center></td>
													<td><center><?php echo $fetch['bp']?></center></td>
													<td><center><?php echo $fetch['temp']?></center></td>
													<td><center><?php echo $fetch['rr']?></center></td>
													<td><center><?php echo $fetch['pr']?></center></td>
													<td><center><?php echo $fetch['complaints']?></center></td>
													<td><center><?php echo $fetch['pe_findings']?></center></td>
													<td><center><?php echo $fetch['diagnosis']?></center></td>
													<td><center><?php echo $fetch['lab_request']?></center></td>
												</tr>
											<?php
											}
											$conn->close();
											?>
											</tbody>
										</table>
										</div> 
					<hr>
					<h2><strong>Prescription</strong></h2>
					<hr>
					<h4>Overview</h4>
					<div class="table-responsive">
											<table class="table table-hover table-bordered">
											<thead>
												<tr class="warning">
													<th><center>Medicine Category</center></th>
													<th><center>Medication & Dosage</center></th>
													<th><center>6 <br> (AM)</center></th>
													<th><center>8 <br> (AM)</center></th>
													<th><center>12 <br> (NN)</center></th>
													<th><center>2 <br> (PM)</center></th>
													<th><center>4 <br> (PM)</center></th>
													<th><center>6 <br> (PM)</center></th>
													<th><center>8 <br> (PM)</center></th>
													<th><center>Quantity</center></th>
													<th><center>Recommendation</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
													require 'require/config.php';
													$query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]' ORDER BY `consultation_id` DESC") or die(mysqli_error());
													while($fetch = $query->fetch_array()){
													?>
												<tr>
													<td><center><?php echo $fetch['medicine_category']?></center></td>
													<td><center><?php echo $fetch['medname']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['6am']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['8am']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['12nn']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['2pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['4pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['6pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['8pm']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['qty']?></center></td>
													<td style="font-weight: bold;"><center><?php echo $fetch['recommendation']?></center></td>
												</tr>
												<?php
													}
													$conn->close();
													?>
											</tbody>
										</table>
										</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-3 print" style="position: relative;">
		<div id="tocify"></div>
	</div>
</div>
