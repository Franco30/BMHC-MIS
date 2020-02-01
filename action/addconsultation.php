<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    require '../require/config.php';
    
    $patient_id = $conn -> real_escape_string($_POST['patient_id']);
    $date_today = $conn -> real_escape_string($_POST['date_today']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $height = $conn -> real_escape_string($_POST['height']);
    $temp = $conn -> real_escape_string($_POST['temp']);
    $headfamily = $conn -> real_escape_string($_POST['headfamily']);
    $bp = $conn -> real_escape_string($_POST['bp']);
    $rr = $conn -> real_escape_string($_POST['rr']);
    $pr = $conn -> real_escape_string($_POST['pr']);
    $complaints = $_POST['complaints'];
    $complaints_description = $conn -> real_escape_string($_POST['complaints_description']);
    $pefindings = $conn -> real_escape_string($_POST['pefindings']);
    $diagnosis = $conn -> real_escape_string($_POST['diagnosis']);
    $labrequest = $conn -> real_escape_string($_POST['labrequest']);
    $purok = $conn -> real_escape_string($_POST['purok']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $age = $conn -> real_escape_string($_POST['age']);
    
       $C = "";
   foreach($complaints as $value) {
       $C .= $value . ", ";  
   }
       $CC = substr($C, 0, -2);
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Added $patient_name to Consultation";

    require '../require/config.php';
    $conn->query("INSERT INTO `consultation` VALUES('', '$patient_id', '$date_today', '$headfamily', '$weight', '$height', '$bp', '$temp', '$rr', '$pr', '$CC', $complaints_description, '$pefindings', '$diagnosis', '$labrequest', '$age', '$gender', '$purok', '$month', '$year', 'No Prescription', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
