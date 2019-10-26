<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient2 = $_POST['patient2'];
    $follow_up_date_time = $_POST['follow_up_date_time'];
    $remarks3 = $_POST['remarks3'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient2'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name =  $fetch['patient_name'];
    
    $remarks = "Added a Prenatal follow-up date for $patient_name";
    
    require '../require/config.php';
    $conn->query("INSERT INTO `prenatal_follow_up` VALUES('', '$user_id', '$patient2', '$follow_up_date_time', '$remarks3', 'Pending')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
