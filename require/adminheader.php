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
<ul class="x-navigation x-navigation-horizontal x-navigation-panel print">
    <!-- TOGGLE NAVIGATION -->
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
    </li>
    <!-- END TOGGLE NAVIGATION -->

    <!-- SIGN OUT -->
    <li class="xn-icon-button pull-right">
        <a href="#" class="mb-control" data-box="#admin-signout"><span class="fa fa-sign-out"></span></a>
    </li>
    <!-- END SIGN OUT -->

    <!-- MESSAGES -->
    <li class="xn-icon-button pull-right">
        <a href="#"><span class="fa fa-comments"></span></a>
        <div class="informer informer-danger">4</div>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                <div class="pull-right">
                    <span class="label label-danger">4 new</span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-online"></div>
                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                    <span class="contacts-title">John Doe</span>
                    <p>Praesent placerat tellus id augue condimentum</p>
                </a>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-away"></div>
                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                    <span class="contacts-title">Dmitry Ivaniuk</span>
                    <p>Donec risus sapien, sagittis et magna quis</p>
                </a>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-away"></div>
                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali" />
                    <span class="contacts-title">Nadia Ali</span>
                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                </a>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-offline"></div>
                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader" />
                    <span class="contacts-title">Darth Vader</span>
                    <p>I want my money back!</p>
                </a>
            </div>
            <div class="panel-footer text-center">
                <a href="pages-messages.html">Show all messages</a>
            </div>
        </div>
    </li>
    <!-- END MESSAGES -->
    <!-- TASKS -->
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
            <div class="panel-footer text-center">
                <a href="follow_up_table" class="text-left">Show all Family Planning Follow-up Visit</a>
            </div>
        </div>
    </li>
    <!-- END TASKS -->

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
            <div class="panel-footer text-center">
                <a href="medicine_table" class="text-left">Show all medicines</a> &nbsp;
                <a href="medication_dispensation" class="text-right">Add Stocks Now</a>
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
            <div class="panel-footer text-center">
                <a href="medication_dispensation">Show all Medicine Dispensation</a>
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
