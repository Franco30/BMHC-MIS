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

            return "one minute ago";

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

            return "one year ago";

        } else {

            return "$years years ago";

        }
    }
}
?>
<!-- START X-NAVIGATION VERTICAL -->
<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
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
		<a href="#"><span class="fa fa-tasks"></span></a>
		<div class="informer informer-warning">3</div>
		<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
				<div class="pull-right">
					<span class="label label-warning">3 active</span>
				</div>
			</div>
			<div class="panel-body list-group scroll" style="height: 200px;">
				<a class="list-group-item" href="#">
					<strong>Phasellus augue arcu, elementum</strong>
					<div class="progress progress-small progress-striped active">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
							aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
					</div>
					<small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
				</a>
				<a class="list-group-item" href="#">
					<strong>Aenean ac cursus</strong>
					<div class="progress progress-small progress-striped active">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
							aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
					</div>
					<small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
				</a>
				<a class="list-group-item" href="#">
					<strong>Lorem ipsum dolor</strong>
					<div class="progress progress-small progress-striped active">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95"
							aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
					</div>
					<small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
				</a>
				<a class="list-group-item" href="#">
					<strong>Cras suscipit ac quam at tincidunt.</strong>
					<div class="progress progress-small">
						<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
							aria-valuemax="100" style="width: 100%;">100%</div>
					</div>
					<small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
				</a>
			</div>
			<div class="panel-footer text-center">
				<a href="pages-tasks.html">Show all tasks</a>
			</div>
		</div>
	</li>
	<!-- END TASKS -->
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