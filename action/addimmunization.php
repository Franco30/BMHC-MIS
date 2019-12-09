<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $child_id = $_POST['child_id'];
    $purok = $_POST['purok'];
    $gender = $_POST['gender'];
    $philhealth = $_POST['philhealth'];
    $birthtime = $_POST['birthtime'];
    $birthweight = $_POST['birthweight'];
    $phonenumber = $_POST['phonenumber'];
    $gravida = $_POST['gravida'];
    $para = $_POST['para'];
    $abortion = $_POST['abortion'];
    $mage = $_POST['mage'];
    $fage = $_POST['fage'];
    $placeprenatal = $_POST['placeprenatal'];
    $placedelivery = $_POST['placedelivery'];
    $ypedelivery = $_POST['typedelivery'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$child_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $child_name = $fetch['child_name'];
    
    $remarks = "Added $child_name to Immunization";

    require '../require/config.php';
    $conn->query("INSERT INTO `immunization` VALUES('', '$child_id', '$philhealth', '$birthtime', '$birthweight', '$phonenumber', '$gravida', '$para', '$abortion', '$mage', '$fage', '$placeprenatal', '$placedelivery', '$ypedelivery', '$purok', '$gender', 'Registered', '$month', '$year', '$date_time')") or die(mysqli_error());
    
    $conn->query("UPDATE `patient_child` SET `status` = 'Registered Immunization' WHERE `child_id` = '$child_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `type_of_feeding_2` VALUES('', '$child_id', '', '', '', '', '')") or die(mysqli_error());
    $conn->query("INSERT INTO `tetanus_toxoid` VALUES('', '$child_id', '', '', '', '', '', '')") or die(mysqli_error());
    $conn->query("INSERT INTO `tetanus_toxoid_fp` VALUES('', '$child_id', '', '', '', '', '')") or die(mysqli_error());
    }
?>
