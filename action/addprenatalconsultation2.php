<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    
    $patient_id = $conn -> real_escape_string($_POST['patient_id']);
    $prenatal_id = $conn -> real_escape_string($_POST['prenatal_id']);
    $date = $conn -> real_escape_string($_POST['date']);
    $doctors_order_advice = $conn -> real_escape_string($_POST['doctors_order_advice']);
    $presentation = $conn -> real_escape_string($_POST['presentation']);
    $complaints = $conn -> real_escape_string($_POST['complaints']);
    $fh = $conn -> real_escape_string($_POST['fh']);
    $fhb = $conn -> real_escape_string($_POST['fhb']);
    $bp = $conn -> real_escape_string($_POST['bp']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $aog = $conn -> real_escape_string($_POST['aog']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Added $patient_name to Prenatal Consultation";

    require '../require/config.php';
    $conn->query("INSERT INTO `prenatal_consultation` VALUES('', '$prenatal_id', '$patient_id', '$doctors_order_advice', '$date', '', '', '', '', '', '', '', '$fh', '$fhb', '', '$bp', '', '$weight', '', '$aog', '$presentation', '$complaints', '')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
