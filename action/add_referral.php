<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    $date = $_POST['date'];
    $patient_name = $_POST['patient_name'];
    $registered = $_POST['registered'];
    $weight = $_POST['weight'];
    $bp = $_POST['bp'];
    $temp = $_POST['temp'];
    $age = $_POST['age'];
    $complaints = $_POST['complaints'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $referred_by = $_POST['referred_by'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Added a New Individual Referral Record";
    
    require '../require/config.php';
    $conn->query("INSERT INTO `referral` VALUES ('', '$date', '$from', '$to', '$origin', '$destination', '$patient_name$registered', '$weight', '$bp', '$temp', '$age', '$complaints', '$referred_by', '$month', '$year', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
