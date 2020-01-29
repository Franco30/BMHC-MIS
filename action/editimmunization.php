<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $immunization_id = $conn -> real_escape_string($_POST['immunization_id']);
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
