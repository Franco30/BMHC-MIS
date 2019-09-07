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
    $date_time=date("F j, Y - g:i a");
    $remarks = "dispensed $quantity $medicine_name to $received";
    require '../require/config.php';

    $conn->query("INSERT INTO `medication_dispensation` VALUES('', '$received', '$medicine_name', '$date_time', '$month', '$year', '$quantity')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    $conn->close();
}
?>
