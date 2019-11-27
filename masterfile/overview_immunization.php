				<?php
		require 'require/config.php';
        $query = $conn->query("SELECT * FROM `patient_child`, `immunization` WHERE `patient_child`.`child_id`= '$_GET[child_id]' && `immunization`.`child_id` = '$_GET[child_id]'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $q2 = $conn->query("SELECT * FROM `immunization` WHERE `child_id` = '$_GET[child_id]'") or die(mysqli_error());
        $f2 = $q2->fetch_array();
        date_default_timezone_set('Asia/Manila');
        $date=date("F j, Y");
					?>
					<div class="col-md-9">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="tocify-content">
									<h2> <strong><mark>Child No: <?php echo $f2['year']. "0" .$f2['child_id']?></mark></strong></h2>
									<hr>
									<h4>Overview</h4>
									<div class="row">
										<div class="col-md-4">
											<div class="panel-body profile">
												<div class="profile-image">
													<img src="assets/images/patient.ico" alt="John Doe" />
												</div>
												<div class="profile-data">
													<div class="profile-data-name" style="color:#555252; font-size:20px;"><strong><?php echo $fetch['child_name']?></strong></div>
													<div class="profile-data-title" style="color:#555252; font-size:12px;"><strong><?php echo $fetch['year']."" .$fetch['child_id']?></strong></div>
												</div>
											</div>
											<div class="panel-body">
												<div class="contact-info">
													<p><small style="font-size:13px;">Gender</small><br /><?php echo $fetch['gender']?></p>
													<p><small style="font-size:13px;">Current Address</small><br /><?php echo $fetch['purok']?> <?php echo $fetch['street_address']?></p>
												</div>
											</div>
										</div>
										<div class="col-md-4"> <br>
											<h5><strong>Date of birth: </strong><?php echo $fetch['birthdate']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Contact No: </strong><?php echo $fetch['cp_no']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>G: </strong><?php echo $fetch['gravida']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>P: </strong><?php echo $fetch['para']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>A: </strong><?php echo $fetch['abortion']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<br />
											<h5><strong>Mother: </strong><?php echo $fetch['mother_name']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Age: </strong><?php echo $fetch['mother_age']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Occupation: </strong><?php echo $fetch['mother_occupation']?></h5>
											<hr style="margin:0px 0 5px 0;">
										</div>

										<div class="col-md-4"> &nbsp;
											<h5><strong>Time of birth: </strong><?php echo $fetch['birthtime']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Birth Weight: </strong><?php echo $fetch['birth_weight']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Place of Prenatal: </strong><?php echo $fetch['place_of_prenatal']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Place of Delivery: </strong><?php echo $fetch['place_of_delivery']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Type of Delivery: </strong><?php echo $fetch['type_of_delivery']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<br />
											<h5><strong>Father: </strong><?php echo $fetch['father_name']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Age:</strong><?php echo $fetch['father_age']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<h5><strong>Occupation:</strong><?php echo $fetch['father_occupation']?></h5>
											<hr style="margin:0px 0 5px 0;">
											<br />
										</div>
									</div>
								</div>
								<div class="panel-body">
									<div class="tocify-content">
										<h2><strong>Treatment Table I</strong></h2>
										<hr>
										<h4>Overview</h4>
										<div class="table-responsive">
											<table class="table table-hover table-bordered">
												<thead>
													<tr class="warning">
														<th><center>Treatment Type</center></th>
														<th><center>Date</center></th>
														<th><center>Age</center></th>
														<th><center>Weight</center></th>
														<th><center>Height</center></th>
														<th><center>Temperature</center></th>
														<th><center>Remarks</center></th>
													</tr>
												</thead>
												<tbody>
					<?php
					$query = $conn->query("select * from `immunization_treatment` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
					while($fetch = $query->fetch_array()){
					?>
													<tr>
														<td><center><?php echo $fetch['treatment_type']?></center></td>
														<td><center><?php echo $fetch['treatment_date']?></center></td>
														<td><center><?php echo $fetch['treatment_age']?></center></td>
														<td><center><?php echo $fetch['treatment_weight']?></center></td>
														<td><center><?php echo $fetch['treatment_height']?></center></td>
														<td><center><?php echo $fetch['treatment_temp']?></center></td>
														<td><center><?php echo $fetch['treatment_remarks']?></center></td>
													</tr>
													<?php
													}
													$conn->close();
													?>
												</tbody>
											</table>
										</div>
										&nbsp;&nbsp;
										<hr>
										<!-- Treatment Table II-->
										<h2><strong>Treatment Table II</strong></h2>
										<hr>
										<h4>Overview</h4>
										<div class="panel-body">
											<table id="treatmenttable2" class="table table-hover table-bordered">
												<thead>
													<div>
														<h4 style="color:#56688A;">
															<strong><center>Child <br /> Type of feeding</center></strong>
														</h4>
													</div>
													<tr class="warning">
														<th><center>EBF</center></th>
														<th><center>MF</center></th>
														<th><center>BFF</center></th>
														<th><center>Date</center></th>
													</tr>
												</thead>
												<tbody>
			<?php
			require 'require/config.php';
			$query = $conn->query("SELECT * FROM `type_of_feeding` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
			?>	
													<tr>
														<td><center><?php echo $fetch['ebf']?></center></td>
														<td><center><?php echo $fetch['mf']?></center></td>
														<td><center><?php echo $fetch['bff']?></center></td>
														<td><center><?php echo $fetch['tof_date']?></center></td>
													</tr>
												<?php
												}
												$conn->close();
												?>
												</tbody>
											</table>
											<hr>
											<table id="treatmenttable2" class="table table-hover table-bordered">
												<thead>
													<div>
													<h4 style="color:#56688A;">
													<strong><center>Mother <br /> Tetanus Toxoid</center></strong>
													</h4>
													</div>
													<tr class="warning">
														<th><center>TT 1</center></th>
														<th><center>TT 2</center></th>
														<th><center>TT 3</center></th>
														<th><center>TT 4</center></th>
														<th><center>TT 5</center></th>
														<th><center>TT L</center></th>
													</tr>
												</thead>
		<?php
		require 'require/config.php';
		$query = $conn->query("SELECT * FROM `tetanus_toxoid` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
		while($fetch = $query->fetch_array()){
		?>	
												<tbody>
													<tr>
														<td><center><?php echo $fetch['tt1']?></center></td>
														<td><center><?php echo $fetch['tt2']?></center></td>
														<td><center><?php echo $fetch['tt3']?></center></td>
														<td><center><?php echo $fetch['tt4']?></center></td>
														<td><center><?php echo $fetch['tt5']?></center></td>
														<td><center><?php echo $fetch['ttl']?></center></td>
													</tr>
												</tbody>
												<?php
												}
												$conn->close();
												?>
											</table>
											<hr>
											<div class="table-responsive">
											<table id="treatmenttable2" class="table table-hover table-bordered">
												<thead>
												<div>
												<h4 style="color:#56688A;">
												<strong><center>Child</center></strong>
												</h4>
												</div>
													<tr class="warning">
														<th><center>VIT A</center></th>
														<th><center>6 mos.</center></th>
														<th><center>1 yr.</center></th>
														<th><center>NBS</center></th>
														<th><center>VIT K</center></th>
													</tr>
												</thead>
	<?php
	require 'require/config.php';
	$query = $conn->query("SELECT * FROM `type_of_feeding_2` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
	while($fetch = $query->fetch_array()){
	?>
												<tbody>
													<tr>
														<td><center><?php echo $fetch['vit_a']?></center></td>
														<td><center><?php echo $fetch['6_months']?></center></td>
														<td><center><?php echo $fetch['1_year']?></center></td>
														<td><center><?php echo $fetch['nbs']?></center></td>
														<td><center><?php echo $fetch['vit_k']?></center></td>
													</tr>
												</tbody>
											<?php
											}
											$conn->close();
											?>
											</table>
												</div>
											<hr>
											<div class="table-responsive">
											<table id="treatmenttable3" class="table table-hover table-bordered">
												<thead>
												<div>
												<h4 style="color:#56688A;">
												<strong><center>Mother <br> Family Planning</center></strong>
												</h4>
												</div>
													<tr class="warning">
														<th><center>IUD</center></th>
														<th><center>BTL</center></th>
														<th><center>1 yr.</center></th>
														<th><center>VIT A</center></th>
														<th><center>FeSO4</center></th>
													</tr>
												</thead>
	<?php
	require 'require/config.php';
	$query = $conn->query("SELECT * FROM `tetanus_toxoid_fp` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
	while($fetch = $query->fetch_array()){
	?>
												<tbody>
													<tr>
														<td><center><?php echo $fetch['uid']?></center></td>
														<td><center><?php echo $fetch['btl']?></center></td>
														<td><center><?php echo $fetch['1_year']?></center></td>
														<td><center><?php echo $fetch['vit_a']?></center></td>
														<td><center><?php echo $fetch['feso4']?></center></td>
													</tr>
												</tbody>
											<?php
											}
											$conn->close();
											?>
											</table>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" style="position: relative;">
						<div id="tocify"></div>
					</div>
				
