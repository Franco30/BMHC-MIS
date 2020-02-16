<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    
    $immunization_id = $conn -> real_escape_string($_POST['immunization_id']);
    $child_id = $conn -> real_escape_string($_POST['child_id']);
    $status = $conn -> real_escape_string($_POST['status']);

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$child_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $child_name =  $fetch['patient_name'];
    
    $remarks = "Updated Immunization Treatment Status for $child_name";
    
    require '../require/config.php';
    $conn->query("UPDATE `immunization` SET  `status` = '$status' WHERE `immunization_id` = '$immunization_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>