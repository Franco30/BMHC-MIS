<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient_id = $_POST['patient_id'];
    $prenatal_id = $_POST['prenatal_id'];
    $date = $_POST['date'];
    $doctors_order_advice = $_POST['doctors_order_advice'];
    $presentation = $_POST['presentation'];
    $complaints = $_POST['complaints'];
    $fh = $_POST['fh'];
    $fhb = $_POST['fhb'];
    $bp = $_POST['bp'];
    $weight = $_POST['weight'];
    $aog = $_POST['aog'];
    
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
