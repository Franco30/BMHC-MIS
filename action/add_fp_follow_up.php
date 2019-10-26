<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient = $_POST['patient'];
    $date_given = $_POST['date_given'];
    $method = $_POST['method'];
    $units = $_POST['units'];
    $remarks2 = $_POST['remarks2'];
    $provider = $_POST['provider'];
    $next_service_date = $_POST['next_service_date'];
    
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
    $conn->query("INSERT INTO `fp_follow_up` VALUES('', '$patient', '$date_given', '$method', '$units', '$remarks2', '$provider', '$next_service_date')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
