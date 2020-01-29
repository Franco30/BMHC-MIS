<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    require '../require/config.php';
     
    $date = $conn -> real_escape_string($_POST['date']);
    $patient_name = $conn -> real_escape_string($_POST['patient_name']);
    $registered = $conn -> real_escape_string($_POST['registered']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $bp = $conn -> real_escape_string($_POST['bp']);
    $temp = $conn -> real_escape_string($_POST['temp']);
    $age = $conn -> real_escape_string($_POST['age']);
    $complaints = $conn -> real_escape_string($_POST['complaints']);
    $from = $conn -> real_escape_string($_POST['from']);
    $to = $conn -> real_escape_string($_POST['to']);
    $origin = $conn -> real_escape_string($_POST['origin']);
    $destination = $conn -> real_escape_string($_POST['destination']);
    $referred_by = $conn -> real_escape_string($_POST['referred_by']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Added a New Individual Referral Record";
    
    require '../require/config.php';
    $conn->query("INSERT INTO `referral` VALUES ('', '$date', '$from', '$to', '$origin', '$destination', '$patient_name$registered', '$weight', '$bp', '$temp', '$age', '$complaints', '$referred_by', '$gender', '$month', '$year', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
