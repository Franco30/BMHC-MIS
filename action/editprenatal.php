<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $prenatal_id = $_POST['prenatal_id'];
    $husband = $_POST['husband'];
    $date = $_POST['date'];
    $menstrual_hx = $_POST['menstrual_hx'];
    $menarch = $_POST['menarch'];
    $cycle = $_POST['cycle'];
    $flow = $_POST['flow'];
    $duration = $_POST['duration'];
    $dysmenorrhea = $_POST['dysmenorrhea'];
    $obgynehx = $_POST['obgynehx'];
    $past_medical_hx = $_POST['past_medical_hx'];
    $bloodtype = $_POST['bloodtype'];
    $tt1 = $_POST['tt1'];
    $tt2 = $_POST['tt2'];
    $tt3 = $_POST['tt3'];
    $tt4 = $_POST['tt4'];
    $tt5 = $_POST['tt5'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Edited $patient_name Prenatal Form";

    require '../require/config.php';
    $conn->query("UPDATE `prenatal` SET `husband` = '$husband', `prenatal_date` = '$date', `menstrual_hx` = '$menstrual_hx', `menarch` = '$menarch', `cycle` = '$cycle', `flow` = '$flow', `duration` = '$duration', `dysmenorrhea` = '$dysmenorrhea', `obgynehx` = '$obgynehx', `past_medical_hx` = '$past_medical_hx', `bloodtype` = '$bloodtype', `tt1` = '$tt1', `tt2` = '$tt2', `tt3` = '$tt3', `tt4` = '$tt4', `tt5` = '$tt5' WHERE `prenatal`.`prenatal_id` = '$prenatal_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
