<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient_id = $_POST['patient_id'];
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
    $purok = $_POST['purok'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Added $patient_name to Prenatal";

    require '../require/config.php';
    $conn->query("INSERT INTO `prenatal` VALUES('', '$patient_id', '$husband', '$date', '$menstrual_hx', '$menarch', '$cycle', '$flow', '$duration', '$dysmenorrhea', '$obgynehx', '$past_medical_hx', '$bloodtype', '$tt1', '$tt2', '$tt3', '$tt4', '$tt5', '$purok', '$month', '$year')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
