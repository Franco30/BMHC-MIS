<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';

    $child_id = $conn -> real_escape_string($_POST['child_id']);
    $purok = $conn -> real_escape_string($_POST['purok']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $philhealth = $conn -> real_escape_string($_POST['philhealth']);
    $birthtime = $conn -> real_escape_string($_POST['birthtime']);
    $birthweight = $conn -> real_escape_string($_POST['birthweight']);
    $phonenumber = $conn -> real_escape_string($_POST['phonenumber']);
    $gravida = $conn -> real_escape_string($_POST['gravida']);
    $para = $conn -> real_escape_string($_POST['para']);
    $abortion = $conn -> real_escape_string($_POST['abortion']);
    $mage = $conn -> real_escape_string($_POST['mage']);
    $fage = $conn -> real_escape_string($_POST['fage']);
    $placeprenatal = $conn -> real_escape_string($_POST['placeprenatal']);
    $placedelivery = $conn -> real_escape_string($_POST['placedelivery']);
    $ypedelivery = $conn -> real_escape_string($_POST['typedelivery']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("Y-m-d");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$child_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $child_name = $fetch['child_name'];
    
    $remarks = "Added $child_name to Immunization";

    require '../require/config.php';
    $conn->query("INSERT INTO `immunization` VALUES('', '$child_id', '$philhealth', '$birthtime', '$birthweight', '$phonenumber', '$gravida', '$para', '$abortion', '$mage', '$fage', '$placeprenatal', '$placedelivery', '$ypedelivery', '$purok', '$gender', 'Currently in Treatment', '$month', '$year', '$date_time')") or die(mysqli_error());
    
    $conn->query("UPDATE `patient_child` SET `status` = 'Registered Immunization' WHERE `child_id` = '$child_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `type_of_feeding_2` VALUES('', '$child_id', '', '', '', '', '')") or die(mysqli_error());
    $conn->query("INSERT INTO `tetanus_toxoid` VALUES('', '$child_id', '', '', '', '', '', '')") or die(mysqli_error());
    $conn->query("INSERT INTO `tetanus_toxoid_fp` VALUES('', '$child_id', '', '', '', '', '')") or die(mysqli_error());
    }
?>
