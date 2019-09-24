				<?php
	require 'require/config.php';
			$query = $conn->query("SELECT * FROM `patient_child`, `immunization` WHERE patient_child.child_id = immunization.child_id") or die(mysqli_error());
			$fetch = $query->fetch_array();
			$id = $fetch['child_id'];
					?>
				<div class="row">
					<div class="col-md-9">
						<div class="panel panel-default">
							<div class="panel-body">
								<h2> <strong><mark>Child No: <?php echo $fetch['year']. "0" .$fetch['child_id']?></mark></strong></h2>
								<hr>
								<h4>Overview</h4>
								<div class="row">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body profile">
												<div class="profile-image">
													<img src="assets/images/patient.ico" alt="John Doe" />
												</div>
												<div class="profile-data">
													<div class="profile-data-name" style="color:#555252; font-size:20px;"><strong><?php echo $_GET['child_name']?></strong></div>
													<div class="profile-data-title" style="color:#555252; font-size:12px;"><strong><?php echo $fetch['year']."" .$fetch['child_id']?></strong></div>
												</div>
											</div>
											<div class="panel-body">
												<div class="contact-info">
													<p><small style="font-size:13px;">Gender</small><br /><?php echo $fetch['gender']?></p>
													<p><small style="font-size:13px;">Civil Status</small><br /><?php echo $fetch['civil_status']?></p>
													<p><small style="font-size:13px;">Current Address</small><br /><?php echo $fetch['address']?></p>
												</div>
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
										<br/>
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
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="tocify-content">
									<h2><strong>Treatment Table</strong></h2>
									<hr>
									<h4>Overview</h4>
									<div class="panel-body panel-body-table">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>
														<center></center>
													</th>
													<th>
														<center>Date</center>
													</th>
													<th>
														<center>Age</center>
													</th>
													<th>
														<center>Weight</center>
													</th>
													<th>
														<center>Height</center>
													</th>
													<th>
														<center>Temperature</center>
													</th>
													<th>
														<center>Remarks</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>BCG</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>HEPA B</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>PHIB 1</td>
													<td>
														<center>2019-15-11</center>
													</td>
													<td>
														<center>1 month & 15 days</center>
													</td>
													<td>
														<center>43 kg</center>
													</td>
													<td>
														<center>54 cm</center>
													</td>
													<td>
														<center>36 C</center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>PHIB 2</td>
													<td>
														<center>2019-16-10</center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>PHIB 3</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>OPV 1</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>OPV 2</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>OPV 3</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>IPV</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>PCV 1</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>PCV 2</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>PCV 3</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>MVO (6 mos.)</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>MV 9 (mos.)</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>MMR</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
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
										<table id="treatmenttable2" class="table table-hover">
											<thead>
												<div>
													<h4 style="color:#56688A;">
														<strong>
															<center>Child <br /> Type of feeding
														</strong></center>
													</h4>
												</div>
												<tr class="warning">
													<th>
														<center>EBF</center>
													</th>
													<th>
														<center>MF</center>
													</th>
													<th>
														<center>BFF</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<center>✓</center>
													</td>
													<td>
														<center></center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td>
														<center></center>
													</td>
													<td>
														<center>✓</center>
													</td>
													<td>
														<center></center>
													</td>
												</tr>
											</tbody>
										</table>
										<hr>
										<table id="treatmenttable2" class="table table-hover">
											<thead>
												<tr class="warning">
													<th>
														<center>Mother</center>
														<center>Tetanus Toxoid</center>
													</th>
													<th>
														<center>Date</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><center>TT1</center></td>
													<td>
														<center>2016-05-05</center>
													</td>
												</tr>
												<tr>
													<td><center>TT2</center></td>
													<td>
														<center>2016-14-06</center>
													</td>
												</tr>
												<tr>
													<td><center>TT3</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td><center>TT4</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td><center>TTL</center></td>
													<td>
														<center></center>
													</td>
												</tr>
											</tbody>
										</table>
										<hr>
										<table id="treatmenttable2" class="table table-hover">
											<thead>
												<tr class="warning">
													<th>
														<center>Child</center>
													</th>
													<th>
														<center>Date</center>
													</th>
													<th>
														<center>Mother</center>
														<center>Family Planning</center>
													</th>
													<th>
														<center>Date</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><center>VIT A.</center></td>
													<td>
														<center></center>
													</td>
													<td><center>UID</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td><center>6 mos.</center></td>
													<td>
														<center></center>
													</td>
													<td><center>BTL</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td><center>1 yr.</center></td>
													<td>
														<center></center>
													</td>
													<td><center>1 yr.</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td><center>NBS</center></td>
													<td>
														<center></center>
													</td>
													<td><center>VIT A.</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												<tr>
													<td><center>VIT K.</center></td>
													<td>
														<center></center>
													</td>
													<td><center>FeSO4</center></td>
													<td>
														<center></center>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>&nbsp;
									<hr>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" style="position: relative;">
						<div id="tocify"></div>
					</div>
				</div>