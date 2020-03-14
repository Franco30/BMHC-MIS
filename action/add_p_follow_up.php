<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    require '../require/config.php';
     
    $patient2 = $conn -> real_escape_string($_POST['patient2']);
    $follow_up_date_time = $conn -> real_escape_string($_POST['follow_up_date_time']);
    $remarks3 = $conn -> real_escape_string($_POST['remarks3']);
    $col = $conn -> real_escape_string($_POST['color']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient2'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name =  $fetch['patient_name'];
    
    $remarks = "Added a Prenatal follow-up date for $patient_name";
    
//    
//    $color_array = array("#ca1c1c","#ffbe76","#ff7979","#eb4d4b","#f0870f","#22a6b3","#6ab04c","red");
//    $random_keys = array_rand($color_array,7);
//    $color = $color_array[$random_keys[0]];
    
    require '../require/config.php';
    $conn->query("INSERT INTO `prenatal_follow_up` VALUES('', '$user_id', '$patient2', '$follow_up_date_time', '$remarks3', 'Pending', '$col')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
