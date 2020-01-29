<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    
    $patient_id = $conn -> real_escape_string($_POST['patient_id']);
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
    $purok = $conn -> real_escape_string($_POST['purok']);
    
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
