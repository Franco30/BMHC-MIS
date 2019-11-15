			<?php 
        require 'require/config.php';
        $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
			<!-- START PAGE SIDEBAR -->
			<div class="page-sidebar print">
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
							<li> <a href="registration_table"><span class="fa fa-plus"></span> <span class="xn-text">Registration</span></a> </li>
							<li> <a href="familyplanning"><span class="fa fa-users"></span> <span class="xn-text">Family Planning</span></a> </li>
							<li> <a href="prenatal"><span class="fa fa-wheelchair"></span> <span class="xn-text">Prenatal</span></a> </li>
							<li> <a href="consultation"><span class="fa fa-stethoscope"></span> <span class="xn-text">Consultation</span></a> </li>
							<li> <a href="immunization_table"><span class="fa fa-heartbeat"></span> <span class="xn-text">Immunization</span></a> </li>
							<li> <a href="referral"><span class="fa fa-hospital-o"></span> <span class="xn-text">Referral</span></a> </li>
							<li> <a href="follow_up_table"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Visit</span></a> </li>
							<li> <a href="medication_dispensation"><span class="fa fa-medkit"></span> <span class="xn-text">Medicine Dispensation</span></a> </li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Data Entry</span></a>
						<ul>
							<li><a href="medicine_table"><span class="fa fa-medkit"></span><span class="xn-text">Medicine</span></a></li>
							<li><a href="useraccount"><span class="fa fa-user-md"></span><span class="xn-text">User Accounts</span></a></li>
							<li><a href="master_file_patient"><span class="fa fa-stack-overflow"></span><span class="xn-text">Patient Master File</span></a></li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
						<ul>
							<li><a href="medication_dispense_table"><span class="fa fa-apple"></span><span class="xn-text">Inventory Report</span></a></li>
							<li><a href="sample_report"><span class="fa fa-adjust"></span><span class="xn-text">Drill Down Report</span></a></li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-gears"></span> <span class="xn-text">System Maintenance</span></a>
						<ul>
							<li><a href="myaccount"><span class="fa fa-lock"></span><span class="xn-text">My Account</span></a></li>
							<li><a href="usermanagement"><span class="fa fa-refresh"></span><span class="xn-text">User Management</span></a></li>
							<li><a href="systembackup"><span class="fa fa-cloud-download"></span><span class="xn-text">System Backup</span></a></li>
							<li><a href="usersactivity"><span class="fa fa-exclamation-triangle"></span><span class="xn-text">Users Activity Log</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
