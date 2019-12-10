<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $referral_id = $_POST['referral_id'];
    $date = $_POST['date2'];
    $to = $_POST['to2'];
    $destination = $_POST['destination2'];
    $patient_name = $_POST['patient_name2'];
    $registered2 = $_POST['registered2'];
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
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    $remarks = "Edited $patient_name Prenatal Referral Record";
    
    require '../require/config.php';
    $conn->query("UPDATE `referral_prenatal` SET `referral_date` = '$date', `to_hospital` = '$to', `destination_address` = '$destination', `patient_name` = '$patient_name', `weight` = '$weight', `bp` = '$bp', `temp` = '$temp', `age` = '$age', `complaints` = '$complaints', `gravida` = '$gravida', `para` = '$para', `fh` = '$fh', `fhb` = '$fhb', `tt` = '$tt', `given` = '$given', `referred_by` = '$referred_by' WHERE `referral_prenatal`.`referral_id` = '$referral_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
