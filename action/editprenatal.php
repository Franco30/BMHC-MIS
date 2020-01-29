<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $prenatal_id = $conn -> real_escape_string($_POST['prenatal_id']);
    $husband = $conn -> real_escape_string($_POST['husband']);
    $date = $conn -> real_escape_string($_POST['date']);
    $menstrual_hx = $conn -> real_escape_string($_POST['menstrual_hx']);
    $menarch = $conn -> real_escape_string($_POST['menarch']);
    $cycle = $conn -> real_escape_string($_POST['cycle']);
    $flow = $conn -> real_escape_string($_POST['flow']);
    $duration = $conn -> real_escape_string($_POST['duration']);
    $dysmenorrhea = $conn -> real_escape_string($_POST['dysmenorrhea']);
    $obgynehx = $conn -> real_escape_string($_POST['obgynehx']);
    $past_medical_hx = $conn -> real_escape_string($_POST['past_medical_hx']);
    $bloodtype = $conn -> real_escape_string($_POST['bloodtype']);
    $tt1 = $conn -> real_escape_string($_POST['tt1']);
    $tt2 = $conn -> real_escape_string($_POST['tt2']);
    $tt3 = $conn -> real_escape_string($_POST['tt3']);
    $tt4 = $conn -> real_escape_string($_POST['tt4']);
    $tt5 = $conn -> real_escape_string($_POST['tt5']);
    
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
