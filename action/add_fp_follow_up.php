<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    
    $patient = $conn -> real_escape_string($_POST['patient']);
    $date_given = $conn -> real_escape_string($_POST['date_given']);
    $method = $conn -> real_escape_string($_POST['method']);
    $units = $conn -> real_escape_string($_POST['units']);
    $remarks2 = $conn -> real_escape_string($_POST['remarks2']);
    $provider = $conn -> real_escape_string($_POST['provider']);
    $next_service_date = $conn -> real_escape_string($_POST['next_service_date']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name =  $fetch['patient_name'];
    
    $remarks = "Added a Family Planning follow-up date for $patient_name";
    
    require '../require/config.php';
    $conn->query("INSERT INTO `fp_follow_up` VALUES('', '$patient', '$date_given', '$method', '$units', '$remarks2', '$provider', '$next_service_date', 'Pending')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
