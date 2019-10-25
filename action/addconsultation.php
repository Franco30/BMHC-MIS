<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient_id = $_POST['patient_id'];
    $date_today = $_POST['date_today'];
    $weight = $_POST['weight'];
    $temp = $_POST['temp'];
    $headfamily = $_POST['headfamily'];
    $bp = $_POST['bp'];
    $rr = $_POST['rr'];
    $pr = $_POST['pr'];
    $complaints = $_POST['complaints'];
    $pefindings = $_POST['pefindings'];
    $diagnosis = $_POST['diagnosis'];
    $labrequest = $_POST['labrequest'];
    
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
    $conn->query("INSERT INTO `consultation` VALUES('', '$patient_id', '$date_today', '$headfamily', '$weight', '$bp', '$temp', '$rr', '$pr', '$complaints', '$pefindings', '$diagnosis', '$labrequest', '$month', '$year', 'No Prescription', '$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
