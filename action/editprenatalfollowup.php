<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $follow_up_id = $_POST['follow_up_id'];
    $patient2 = $_POST['patient2'];
    $follow_up_date_time2 = $_POST['follow_up_date_time2'];
    $remarks = $_POST['remarks'];
    $status2 = $_POST['status2'];

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient2'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name =  $fetch['patient_name'];
    
    $remarks2 = "Updated the Prenatal follow-up date for $patient_name";
    
    require '../require/config.php';
    $conn->query("UPDATE `prenatal_follow_up` SET `user_id` = '$user_id', `patient_id` = '$patient2', `follow_up_date_time` = '$follow_up_date_time2', `remarks` = '$remarks', `follow_up_status` = '$status2' WHERE `follow_up_id` = '$follow_up_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks2','$date_time')") or die(mysqli_error());
}
?>