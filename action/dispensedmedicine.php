<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    $medicine_name = $_POST['medicine_name'];
    $quantity = $_POST['quantity'];
    $received = $_POST['received'];

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');	
    $time=date("g:i a");
    $date=date("F j, Y");
    $month=date("F");
    $date_time=date("F j, Y g:i a");

    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$received'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name =  $fetch['patient_name'];
    $remarks = "dispensed $quantity $medicine_name to $patient_name";

    $conn->query("INSERT INTO `medication_dispensation` VALUES('', '$received', '$medicine_name', '$date', '$time', '$month', '$year', '$quantity','$date_time')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>
