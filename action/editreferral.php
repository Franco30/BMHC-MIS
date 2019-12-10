<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $referral_id = $_POST['referral_id'];
    $date = $_POST['date'];
    $patient_name = $_POST['patient_name'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $bp = $_POST['bp'];
    $temp = $_POST['temp'];
    $age = $_POST['age'];
    $complaints = $_POST['complaints'];
    $to = $_POST['to'];
    $destination = $_POST['destination'];
    $referred_by = $_POST['referred_by'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Edited $patient_name Referral Record";
    
    require '../require/config.php';
    $conn->query("UPDATE `referral` SET `referral_date` = '$date', `to_hospital` = '$to', `destination_address` = '$destination', `patient_name` = '$patient_name', `weight` = '$weight', `bp` = '$bp', `temp` = '$temp', `age` = '$age', `complaints` = '$complaints', `referred_by` = '$referred_by', `gender` = '$gender' WHERE `referral`.`referral_id` = '$referral_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
