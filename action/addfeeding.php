<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $child_id = $_POST['child_id'];
    $ebf = $_POST['ebf'];
    $mf = $_POST['mf'];
    $bff = $_POST['bff'];
    $tof_date = $_POST['date'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$child_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $child_name = $fetch['child_name'];
    
    //$remarks = "Added Immunization Treatment to $child_name";

    require '../require/config.php';

    $conn->query("INSERT INTO `type_of_feeding` VALUES('', '$child_id', '$ebf', '$mf', '$bff', '$tof_date')") or die(mysqli_error());
    
//    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>
