<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $referral_id = $conn -> real_escape_string($_POST['referral_id']);
    $date = $conn -> real_escape_string($_POST['date']);
    $patient_name = $conn -> real_escape_string($_POST['patient_name']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $bp = $conn -> real_escape_string($_POST['bp']);
    $temp = $conn -> real_escape_string($_POST['temp']);
    $age = $conn -> real_escape_string($_POST['age']);
    $complaints = $conn -> real_escape_string($_POST['complaints']);
    $to = $conn -> real_escape_string($_POST['to']);
    $destination = $conn -> real_escape_string($_POST['destination']);
    $referred_by = $conn -> real_escape_string($_POST['referred_by']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Edited $patient_name Referral Record";
    
    require '../require/config.php';
    
    $stmt = $conn->prepare("UPDATE `referral` SET `referral_date` = ?, `to_hospital` = ?, `destination_address` = ?, `patient_name` = ?, `weight` = ?, `bp` = ?, `temp` = ?, `age` = ?, `complaints` = ?, `referred_by` = ?, `gender` = ? WHERE `referral`.`referral_id` = ?") or die(mysqli_error());
    $stmt->bind_param("sssssssssssi", $date, $to, $destination, $patient_name, $weight, $bp, $temp, $age, $complaints, $referred_by, $gender, $referral_id);
    $stmt->execute();
    
//    $conn->query("UPDATE `referral` SET `referral_date` = '$date', `to_hospital` = '$to', `destination_address` = '$destination', `patient_name` = '$patient_name', `weight` = '$weight', `bp` = '$bp', `temp` = '$temp', `age` = '$age', `complaints` = '$complaints', `referred_by` = '$referred_by', `gender` = '$gender' WHERE `referral`.`referral_id` = '$referral_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
