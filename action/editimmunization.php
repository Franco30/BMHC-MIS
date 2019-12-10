<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $immunization_id = $_POST['immunization_id'];
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
    
    $remarks = "Edited $child_name Immunization Form";

    require '../require/config.php';
    $conn->query("UPDATE `immunization` SET `philhealth_no` = '$philhealth', `birthtime` = '$birthtime', `birth_weight` = '$birthweight', `cp_no` = '$phonenumber', `gravida` = '$gravida', `para` = '$para', `abortion` = '$abortion', `mother_age` = '$mage', `father_age` = '$fage', `place_of_prenatal` = '$placeprenatal', `place_of_delivery` = '$placedelivery', `type_of_delivery` = '$ypedelivery' WHERE `immunization`.`immunization_id` = '$immunization_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
