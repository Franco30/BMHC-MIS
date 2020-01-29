<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    require '../require/config.php';

    $date = $conn -> real_escape_string($_POST['date2']);
    $from = $conn -> real_escape_string($_POST['from2']);
    $to = $conn -> real_escape_string($_POST['to2']);
    $origin = $conn -> real_escape_string($_POST['origin2']);
    $destination = $conn -> real_escape_string($_POST['destination2']);
    $patient_name = $conn -> real_escape_string($_POST['patient_name2']);
    $registered2 = $conn -> real_escape_string($_POST['registered2']);
    $weight = $conn -> real_escape_string($_POST['weight2']);
    $bp = $conn -> real_escape_string($_POST['bp2']);
    $temp = $conn -> real_escape_string($_POST['temp2']);
    $age = $conn -> real_escape_string($_POST['age2']);
    $complaints = $conn -> real_escape_string($_POST['complaints2']);
    $gravida = $conn -> real_escape_string($_POST['gravida']);
    $para = $conn -> real_escape_string($_POST['para']);
    $fh = $conn -> real_escape_string($_POST['fh']);
    $fhb = $conn -> real_escape_string($_POST['fhb']);
    $tt = $conn -> real_escape_string($_POST['tt']);
    $given = $conn -> real_escape_string($_POST['given']);
    $referred_by = $conn -> real_escape_string($_POST['referred_by2']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Added a New Prenatal Referral Record";
    
    require '../require/config.php';
    $conn->query("INSERT INTO `referral_prenatal` VALUES ('', '$date', '$from', '$to', '$origin', '$destination', '$patient_name$registered2', '$weight', '$bp', '$temp', '$age', '$complaints', '$gravida', '$para', '$fh', '$fhb', '$tt', '$given', '$referred_by', '$month', '$year', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
