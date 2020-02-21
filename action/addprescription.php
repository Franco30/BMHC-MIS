<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    
    $consultation_id = $conn -> real_escape_string($_POST['consultation_id']);
    $patient_id = $conn -> real_escape_string($_POST['patient_id']);
    //$medicine_category = $conn -> real_escape_string($_POST['medicine_category']);
    $medname = $_POST['medname'];
    $sixam = $_POST['sixam'];
    $eightam = $_POST['eightam'];
    $twelvenoon = $_POST['twelvenoon'];
    $twopm = $_POST['twopm'];
    $fourpm = $_POST['fourpm'];
    $sixpm = $_POST['sixpm'];
    $eightpm = $_POST['eightpm'];
    $qty = $_POST['qty'];
    $recommendation = $conn -> real_escape_string($_POST['recommendation']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    
    $q = $conn->query("SELECT * FROM `medicine` WHERE `medicine_name` = '$medname'") or die(mysqli_error());
    $f2 = $q->fetch_array();
    $medicine_category = $f2['medicine_category'];
    
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Added Prescription to $patient_name";

    require '../require/config.php';
    $conn->query("INSERT INTO `consultation_prescription` VALUES('', '$consultation_id', '$patient_id', '$user_id', '$medicine_category', '$medname', '$sixam', '$eightam', '$twelvenoon', '$twopm', '$fourpm', '$sixpm', '$eightpm', '$qty', '$recommendation')") or die(mysqli_error());
    $conn->query("UPDATE `consultation` SET `status` = 'With Prescription' WHERE `consultation_id` = '$consultation_id' && `patient_id` = '$patient_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
