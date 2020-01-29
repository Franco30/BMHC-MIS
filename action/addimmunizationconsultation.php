<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    $child_id = $conn -> real_escape_string($_POST['child_id']);
    $immunization_id = $conn -> real_escape_string($_POST['immunization_id']);
    $nutritional_status = $conn -> real_escape_string($_POST['nutritional_status']);
    $medical_history = $conn -> real_escape_string($_POST['medical_history']);
    $date = $conn -> real_escape_string($_POST['date']);
    $temp = $conn -> real_escape_string($_POST['temp']);
    $rr = $conn -> real_escape_string($_POST['rr']);
    $bp = $conn -> real_escape_string($_POST['bp']);
    $weight = $conn -> real_escape_string($_POST['weight']);
    $complaints = $conn -> real_escape_string($_POST['complaints']);
    $diagnosis = $conn -> real_escape_string($_POST['diagnosis']);
    $plan_of_action = $conn -> real_escape_string($_POST['plan_of_action']);
    $remarks = $conn -> real_escape_string($_POST['remarks']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    
    require '../require/config.php';
    $conn->query("INSERT INTO `immunization_consultation` VALUES ('', '$immunization_id', '$child_id', '$nutritional_status', '$medical_history', '$date', '$temp', '$rr', '$bp', '$weight', '$complaints', '$diagnosis', '$plan_of_action', '$remarks')") or die(mysqli_error());
    }
?>
