<?php require_once 'require/logincheck.php'?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>BMHC-MIS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" href="assets/images/bmhc.png" type="image/x-icon" />

	<link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
	<link rel="stylesheet" type="text/css" href="assets3/vendor/font-awesome/css/font-awesome.min.css" />

</head>

<body>
	<!-- START PAGE CONTAINER -->
	<div class="page-container page-navigation-top-fixed">
		<!-- START PAGE SIDEBAR -->
		<?php require 'require/adminsidebar.php' ?>
		<!-- END PAGE SIDEBAR -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<?php require 'require/adminheader.php' ?>
			<!-- START BREADCRUMB -->
			<ul class="breadcrumb">
				<?php
	       require 'require/config.php';
            $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$_GET[patient_id]'") or die(mysqli_error());
			$fetch = $query->fetch_array();
            $q2 = $conn->query("SELECT * FROM `family_planning` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]'") or die(mysqli_error());
			$f2 = $q2->fetch_array();
					?>
				<li>Transaction</li>
				<li><a href="patient_familyplanning?patient_id=<?php echo $fetch['patient_id']?>">Family Planning</a></li>
				<li>Overview</li>
				<li><mark><strong><?php echo $fetch['patient_name']?></strong></mark></li>
			</ul>
			<!-- END BREADCRUMB -->
			<!-- PAGE CONTENT WRAPPER -->
			<div class="page-content-wrap">

				<div class="row">
					<div class="col-md-12">			
						<div class="panel panel-default tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Medical History</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Obstetrical History</a></li>
								<li><a href="#tab-third" role="tab" data-toggle="tab">STI Risks</a></li>
								<li><a href="#tab-fourth" role="tab" data-toggle="tab">Physical Examination</a></li>
								<li><a href="#tab-fifth" role="tab" data-toggle="tab">Pelvic Examination</a></li>
								<li><a href="#tab-sixth" role="tab" data-toggle="tab">Risks for Violence Against Women (VAW)</a></li>
							<div class="btn-group pull-right">
							<div class="pull-left">
							<a href="patient_familyplanning?patient_id=<?php echo $fetch['patient_id']?>" class="btn btn-default btn-md">Back</a>
							</div>
							</div>
                            </ul>
                            <div class="panel-body">  
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            <div class="row">
										<div class="table-responsive">
											<table class="table table-hover table-bordered">
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
$query = $conn->query("SELECT * FROM `medical_history` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]' order by `patient_id` DESC") or die(mysqli_error());
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
                                        </div>

                                        <div class="tab-pane" id="tab-second">
                                            <div class="row">
                                                  <div class="table-responsive">
											<table class="table table-hover table-bordered">
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
$query = $conn->query("SELECT * FROM `obstetrical_history` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]' order by `patient_id` DESC") or die(mysqli_error());
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
                                                
                                            </div>
                                        </div>
										
										<div class="tab-pane" id="tab-third">
									<div class="row">
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
$query = $conn->query("SELECT * FROM `sti_risks` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]' order by `patient_id` DESC") or die(mysqli_error());
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
									</div>
                                        </div>
													
                                        <div class="tab-pane" id="tab-fourth">
                                            <div class="row">
                                                   <div class="table-responsive">
											<table class="table table-hover table-bordered">
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
$query = $conn->query("SELECT * FROM `physical_examination` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]' order by `patient_id` DESC") or die(mysqli_error());
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
													<td style="width:23%"><center><?php echo $fetch['thorax'];?></center></td>
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
                                                
                                            </div>
                                        </div>		
										
                                        <div class="tab-pane" id="tab-fifth">
                                            <div class="row">
<div class="table-responsive">
											<table class="table table-hover table-bordered">
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
$query = $conn->query("SELECT * FROM `pelvic_examination` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]' order by `patient_id` DESC") or die(mysqli_error());
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
                                            </div>
                                        </div>
										
                                        <div class="tab-pane" id="tab-sixth">
                                            <div class="row">
												<div class="table-responsive">
											<table class="table table-hover table-bordered">
											<thead>
												<tr class="warning"> 
												<th><center>option</center></th>
												<th><center>Referred to</center></th>
												</tr>
											</thead>
											<tbody>
<?php
require 'require/config.php';
$query = $conn->query("SELECT * FROM `risk_for_vaw` WHERE `patient_id` = '$_GET[patient_id]' && `family_planning_id` = '$_GET[family_planning_id]' order by `patient_id` DESC") or die(mysqli_error());
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
                                        </div>
										
                                    </div>
                                
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT WRAPPER -->
	</div>
	<!-- END PAGE CONTENT -->
	<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
	<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
	<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
	<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
	<script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>

	<script type="text/javascript" src="js/settings.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/actions.js"></script>

	<!-- END THIS PAGE PLUGINS -->



</body>

</html>
