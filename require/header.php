<?php 
require 'require/config.php';
$query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
$find = $query->fetch_array();
?>
<?php
    function time_ago_in_php($timestamp){
    date_default_timezone_set("Asia/Manila");         
    $time_ago        = strtotime($timestamp);
    $current_time    = time();
    $time_difference = $current_time - $time_ago;
    $seconds         = $time_difference;

    $minutes = round($seconds / 60); // value 60 is seconds  
    $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
    $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
    $weeks   = round($seconds / 604800); // 7*24*60*60;  
    $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
    $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
    if ($seconds <= 60){

        return "Just Now";

    } else if ($minutes <= 60){
        if ($minutes == 1){

            return "1 minute ago";

        } else {
            return "$minutes minutes ago";
        }
    } else if ($hours <= 24){

        if ($hours == 1){

            return "an hour ago";

        } else {

            return "$hours hours ago";

        }

    } else if ($days <= 7){
        if ($days == 1){

            return "yesterday";

        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4.3){

        if ($weeks == 1){

            return "a week ago";

        } else {

            return "$weeks weeks ago";

        }

    } else if ($months <= 12){
        if ($months == 1){

            return "a month ago";

        } else {
            return "$months months ago";
        }
    } else {

        if ($years == 1){

            return "1 year ago";

        } else {

            return "$years years ago";

        }
    }
}
?>
<!-- START X-NAVIGATION VERTICAL -->
<ul class="x-navigation x-navigation-horizontal print">
    <li class="xn-logo">
        <a href="admindashboard">BMHC-MIS</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li>
        <a href="admindashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
    </li>
    <li class="xn-openable">
        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
        <ul>
            <li><a href="registration_table"><span class="fa fa-plus"></span> <span class="xn-text">Registration</span></a></li>
            <li><a href="familyplanning"><span class="fa fa-users"></span> <span class="xn-text">Family Planning</span></a></li>
            <li><a href="prenatal"><span class="fa fa-wheelchair"></span> <span class="xn-text">Prenatal</span></a></li>
            <li><a href="consultation"><span class="fa fa-stethoscope"></span> <span class="xn-text">Consultation</span></a> </li>
            <li><a href="immunization_table"><span class="fa fa-heartbeat"></span> <span class="xn-text">Immunization</span></a> </li>
            <li><a href="referral"><span class="fa fa-hospital-o"></span> <span class="xn-text">Referral</span></a> </li>
            <li><a href="follow_up_table"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Visit</span></a> </li>
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
            <li><a href="services_reports"><span class="fa fa-line-chart"></span><span class="xn-text">Services Report</span></a></li>
            <li><a href="referral_reports"><span class="fa fa-ambulance"></span><span class="xn-text">Referral Report</span></a></li>
            <li><a href="follow_up_table_reports"><span class="fa fa-mail-reply-all"></span><span class="xn-text">Follow-up Visit Report</span></a></li>
            <li><a href="medication_dispense_table"><span class="fa fa-apple"></span><span class="xn-text">Inventory Report</span></a></li>
<!--            <li><a href="sample_report"><span class="fa fa-adjust"></span><span class="xn-text">Drill Down Report</span></a></li>-->
            <li><a href="patient_reports"><span class="fa fa-user"></span><span class="xn-text">Patient Report</span></a></li>
<!--            <li><a href="sick_forecasting"><span class="fa fa-adjust"></span><span class="xn-text">Sickness Forecasting</span></a></li>-->
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

    <!-- SIGN OUT -->
    <li class="xn-icon-button pull-right">
        <a href="#" class="mb-control" data-box="#admin-signout"><span class="fa fa-sign-out"></span></a>
    </li>
    <!-- END SIGN OUT -->

    <li class="xn-icon-button pull-right">
        <?php
date_default_timezone_set('Asia/Manila');
$date_today = date('F j, Y');
require 'require/config.php';
$q = $conn->query("SELECT COUNT(*) as count from `prenatal_follow_up` WHERE `follow_up_date_time` REGEXP '$date_today' && `follow_up_status` = 'Pending'") or die(mysqli_error());
$f = $q->fetch_array();
?>
        <a href="#"><span class="fa fa-comments"></span></a>
        <?php if ($f['count']>0)echo "<div class='informer informer-warning animated infinite pulse' style='animation-duration:.6s;'>".$f['count']."</div>";
?>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title">
                    You have <?php echo $f['count']. " Prenatal Follow-up Visit Today" ?></h3>
                <div class="pull-right">
                    <span class="label label-warning"><?php echo $f['count']?></span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                <?php 
            require 'require/config.php';
            $q = $conn->query("SELECT * FROM `prenatal_follow_up` NATURAL JOIN `patient` WHERE `follow_up_date_time` REGEXP '$date_today'  && `follow_up_status` = 'Pending'") or die(mysqli_error());
            while($f = $q->fetch_array()){
            ?>
                <a href="#" class="list-group-item">
                    <img src="assets/images/pending.png" class="pull-left" alt="Folow-up" />
                    <span class="contacts-title"><?php echo $f['patient_name']?></span>
                    <p>
                        <i><?php echo $f['follow_up_date_time']. " - " . $f['remarks']?></i></p>
                    <p>
                        <i>&emsp;&emsp;&emsp;&emsp;<span><?php echo $f['purok']." ".$f['street_address']?></span></i>
                        <!--                        style="color:#fc5454"-->
                    </p>
                </a>
                <?php
					}
					$conn->close();
				?>
            </div>
            <div class="panel-footer text-center" style="background-color:#fcf8e3;">
                <a href="follow_up_table" class="text-left" style="color:#8a6d3b;">Show all Prenatal Follow-up Visit</a>
            </div>
        </div>
    </li>

    <li class="xn-icon-button pull-right">
        <?php
        date_default_timezone_set('Asia/Manila');
		$date_today = date('F j, Y');
        require 'require/config.php';
		$q = $conn->query("SELECT COUNT(*) as count from `fp_follow_up` WHERE `next_service_date` = '$date_today' && `follow_up_status` = 'Pending'") or die(mysqli_error());
		$f = $q->fetch_array();
		?>
        <a href="#"><span class="fa fa-tasks"></span></a>
        <?php if ($f['count']>0)echo "<div class='informer informer-warning animated infinite pulse' style='animation-duration:.6s;'>".$f['count']."</div>";
		?>

        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title">
                    You have <?php echo $f['count']. " Family Planning Follow-up Visit Today" ?></h3>
                <div class="pull-right">
                    <span class="label label-warning"><?php echo $f['count']?></span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                <?php 
					require 'require/config.php';
					$q = $conn->query("SELECT * FROM `fp_follow_up` NATURAL JOIN `patient` WHERE `next_service_date` = '$date_today'  && `follow_up_status` = 'Pending'") or die(mysqli_error());
					while($f = $q->fetch_array()){
				?>
                <a href="#" class="list-group-item">
                    <img src="assets/images/pending.png" class="pull-left" alt="Folow-up" />
                    <span class="contacts-title"><?php echo $f['patient_name']?></span>
                    <p>
                        <i><?php echo $f['date_service_given']. " - " . $f['method_brand']. " - " . $f['remarks']?></i></p>
                    <p>
                        <i>&emsp;&emsp;&emsp;&emsp;<span><?php echo $f['purok']." ".$f['street_address']?></span></i>
                        <!--                        style="color:#fc5454"-->
                    </p>
                </a>
                <?php
					}
					$conn->close();
				?>
            </div>
            <div class="panel-footer text-center" style="background-color:#fcf8e3;">
                <a href="follow_up_table" class="text-left" style="color:#8a6d3b;">Show all Family Planning Follow-up Visit</a>
            </div>
        </div>
    </li>

    <li class="xn-icon-button pull-right">
        <?php
		require 'require/config.php';
		$q = $conn->query("SELECT COUNT(*) as count from `medicine` WHERE `running_balance` <= 15") or die(mysqli_error());
		$f = $q->fetch_array();
		?>
        <a href="#"><span class="fa fa-warning"></span></a>
        <?php if ($f['count']>0)echo "<div class='informer informer-danger animated infinite pulse' style='animation-duration:.6s;'>".$f['count']."</div>";
		?>

        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title">
                    You have <?php echo $f['count']. " medicines that runs out of balance " ?></h3>
                <div class="pull-right">
                    <span class="label label-danger"><?php echo $f['count']?></span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                <?php 
					require 'require/config.php';
					$q = $conn->query("SELECT * FROM `medicine` WHERE `running_balance` <= 15") or die(mysqli_error());
					while($f = $q->fetch_array()){
				?>
                <a href="#" class="list-group-item">
                    <img src="assets/images/med.png" class="pull-left" alt="Patient" />
                    <span class="contacts-title"><?php echo $f['medicine_name']. " - " . $f['medicine_type']?></span>
                    <p>
                        <i>Running Balance: <span style="color:#fc5454"><?php echo $f['running_balance']. " pcs."?></span></i>
                    </p>
                </a>
                <?php
					}
					$conn->close();
				?>
            </div>
            <div class="panel-footer text-center" style="background-color:#fcf8e3;">
                <a href="medicine_table" class="text-left" style="color:#8a6d3b;">Show all medicines</a> &nbsp;
                <a href="medication_dispensation" class="text-right" style="color:#8a6d3b;">Add Stocks Now</a>
            </div>
        </div>
    </li>

    <li class="xn-icon-button pull-right">
        <?php
		date_default_timezone_set('Asia/Manila');
		$date_today = date('F j, Y');
		require 'require/config.php';
		$query = $conn->query("SELECT * FROM `medication_dispensation` ORDER BY `dispensation_id` DESC") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$q = $conn->query("SELECT COUNT(*) as total FROM `medication_dispensation` WHERE `date_given` = '$date_today'") or die(mysqli_error());
		$f = $q->fetch_array();
		$check = $q->num_rows;
		?>
        <a href="#"><span class="fa fa-medkit"></span></a>
        <?php if ($f['total']>0)echo "<div class='informer informer-info animated infinite pulse' style='animation-duration:.8s;'>".$f['total']."</div>";?>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $f['total']. " Medicine Dispensation Today " ?></h3>
                <div class="pull-right">
                    <span class="label label-info"><?php echo $f['total']?></span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 400px;">
                <?php 
					$date_today = date('F j, Y');
					require 'require/config.php';
					$q = $conn->query("SELECT * FROM `patient`,`medication_dispensation` WHERE patient.patient_id = medication_dispensation.patient_id  order by `dispensation_id` DESC limit 10") or die(mysqli_error());
					while($f = $q->fetch_array())
					{
						$id = $f['dispensation_id'];
						$pid = $f['patient_id'];
						$q2 = $conn->query("SELECT * FROM `patient`, `medication_dispensation`, `medicine` WHERE patient.patient_id = medication_dispensation.patient_id && medicine.medicine_id = medication_dispensation.medicine_id ORDER BY `dispensation_id` DESC limit 7") or die(mysqli_error());
						$f2 = $q2->fetch_array();
                        $date_time_call = $f['date_time_call'];
                    	$date_created = "$date_time_call";
                    	$timestamp = strtotime($date_created);
                    	$new_date_formats = date('F j, Y g:i a', $timestamp);
				?>
                <a href="medication_dispensation?id=<?php echo $pid?>" class="list-group-item">
                    <img src="assets/images/med.png" class="pull-left" alt="Medicine" />
                    <span class="contacts-title"><?php echo $f['patient_name']?></span>
                    <p><i><?php echo $f2['medicine_name']?> - <?php echo $f2['quantity']?> pcs.</i></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo time_ago_in_php($new_date_formats);?>
                </a>
                <?php
					}
					$conn->close();
				?>
            </div>
            <div class="panel-footer text-center" style="background-color:#fcf8e3;">
                <a href="medication_dispensation" style="color:#8a6d3b;">Show all Medicine Dispensation</a>
            </div>
        </div>
    </li>

</ul>
<!-- END X-NAVIGATION VERTICAL -->
<!-- MESSAGE BOX-->
<div class="message-box message-box-danger animated fadeIn" data-sound="fail" id="admin-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if you want to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="action/logout" class="btn btn-danger btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->
