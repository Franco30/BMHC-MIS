<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){

    $child_id = $_POST['child_id'];
    $immunization_id = $_POST['immunization_id'];
    $nutritional_status = $_POST['nutritional_status'];
    $medical_history = $_POST['medical_history'];
    $date = $_POST['date'];
    $temp = $_POST['temp'];
    $rr = $_POST['rr'];
    $bp = $_POST['bp'];
    $weight = $_POST['weight'];
    $complaints = $_POST['complaints'];
    $diagnosis = $_POST['diagnosis'];
    $plan_of_action = $_POST['plan_of_action'];
    $remarks = $_POST['remarks'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y g:i a");
    
    
    require '../require/config.php';
    $conn->query("INSERT INTO `immunization_consultation` VALUES ('', '$immunization_id', '$child_id', '$nutritional_status', '$medical_history', '$date', '$temp', '$rr', '$bp', '$weight', '$complaints', '$diagnosis', '$plan_of_action', '$remarks')") or die(mysqli_error());
    }
?>
