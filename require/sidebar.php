<?php 
        require 'require/config.php';
        $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
	<!-- START X-NAVIGATION -->
	<ul class="x-navigation">
		<li class="xn-logo">
			<a href="admindashboard">BMHC-MIS</a>
			<a href="#" class="x-navigation-control"></a>
		</li>
		<li class="xn-profile">
			<a href="#" class="profile-mini">
				<img src="assets/images/bmhc2.png" alt="BMHC" />
			</a>
			<div class="profile">
				<div class="profile-image">
					<img src="assets/images/bmhc2.png" alt="BMHC" />
				</div>
				<div class="profile-data">
					<div class="profile-data-name"><?php echo $find['fullname']?></div>
					<div class="profile-data-title"><i><?php echo $find['position']?></i></div>
				</div>
			</div>
		</li>
		<li>
			<a href="admindashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
		</li>
		<li class="xn-openable">
			<a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
			<ul>
				<li> <a href="registration_table"><span class="fa fa-location-arrow"></span> <span class="xn-text">Registration</span></a> </li>
				<li> <a href="registration_table"><span class="fa fa-users"></span> <span class="xn-text">Family Planning</span></a> </li>
				<li> <a href="medication_dispensation.php"><span class="fa fa-wheelchair"></span> <span class="xn-text">Pre-natal</span></a> </li>
				<li> <a href="tb_registration_table"><span class="fa fa-plus"></span> <span class="xn-text">Tuberculosis</span></a> </li>
				<li> <a href="patient_treatment_table.php"><span class="fa fa-heartbeat"></span> <span class="xn-text">Consultations</span></a> </li>
				<li> <a href="immunization_table.php"><span class="fa fa-medkit"></span> <span class="xn-text">Immunization</span></a> </li>
				<li> <a href="referral"><span class="fa fa-hospital-o"></span> <span class="xn-text">Referral</span></a> </li>
				<li> <a href="follow_up_table"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Visit</span></a> </li>
				<li> <a href="medication_dispensation"><span class="fa fa-medkit"></span> <span class="xn-text">Medicine Dispensation</span></a> </li>
			</ul>
		</li>
		<li class="xn-openable">
			<a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Data Entry</span></a>
			<ul>
				<li><a href="medicine_table"><span class="fa fa-medkit"></span><span class="xn-text">Medicine</span></a></li>
				<li><a href="master_file_patient"><span class="fa fa-stack-overflow"></span><span class="xn-text">Patient Master File</span></a></li>
			</ul>
		</li>
		<li class="xn-openable">
			<a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
			<ul>
				<!-- <li> <a href="patient_certification_table.php"><span class="fa fa-ticket"></span> <span class="xn-text">Certification</span></a> </li>
							<li><a href="reports_follow_up_table.php"><span class="fa fa-mail-reply-all"></span><span class="xn-text">Follow-up Visit</span></a></li>
							<li><a href="examination_reports_overview.php"><span class="fa fa-stethoscope"></span><span class="xn-text">Examination Report</span></a></li>
							<li><a href="reports.php"><span class="fa fa-line-chart"></span><span class="xn-text">TB Cases Report</span></a></li>
							<li><a href="patient_record_report.php"><span class="fa fa-user"></span><span class="xn-text">Patient Record Report</span></a></li> -->
				<li><a href="medication_dispense_table"><span class="fa fa-apple"></span><span class="xn-text">Medicine Dispensed</span></a></li>
				<!-- <li><a href="sputum_submission.php"><span class="fa fa-upload"></span><span class="xn-text">Sputum Submission</span></a></li> -->
			</ul>
		</li>
	</ul>
</div>
