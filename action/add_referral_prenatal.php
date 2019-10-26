<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    $date = $_POST['date2'];
    $from = $_POST['from2'];
    $to = $_POST['to2'];
    $origin = $_POST['origin2'];
    $destination = $_POST['destination2'];
    $patient_name = $_POST['patient_name2'];
    $weight = $_POST['weight2'];
    $bp = $_POST['bp2'];
    $temp = $_POST['temp2'];
    $age = $_POST['age2'];
    $complaints = $_POST['complaints2'];
    $gravida = $_POST['gravida'];
    $para = $_POST['para'];
    $fh = $_POST['fh'];
    $fhb = $_POST['fhb'];
    $tt = $_POST['tt'];
    $given = $_POST['given'];
    $referred_by = $_POST['referred_by2'];
    $designation = $_POST['designation2'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Added a New Prenatal Referral Record";
    
    require '../require/config.php';
    $conn->query("INSERT INTO `referral_prenatal` VALUES ('', '$date', '$from', '$to', '$origin', '$destination', '$patient_name', '$weight', '$bp', '$temp', '$age', '$complaints', '$gravida', '$para', '$fh', '$fhb', '$tt', '$given', '$referred_by', '$designation', '$month', '$year', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
