<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    
    $purpose = $conn -> real_escape_string($_POST['purpose']);
    $medicine_name = $conn -> real_escape_string($_POST['medicine_name']);
    $quantity = $conn -> real_escape_string($_POST['quantity']);
    $received = $conn -> real_escape_string($_POST['received']);

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');	
    $time=date("g:i a");
    //$date=date("F j, Y");
    $date = date("yy-m-d");
    $month=date("F");
    $date_time=date("F j, Y g:i a");

    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$received'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $query1 = $conn->query("SELECT * FROM `medicine` WHERE `medicine_id` = '$medicine_name'") or die(mysqli_error());
    $fetch1 = $query1->fetch_array();
    $patient_name =  $fetch['patient_name'];
    $md_name =  $fetch1['medicine_name'];
    
    $remarks = "dispensed $quantity $md_name to $patient_name";

    require '../require/config.php';
    $q1 = $conn->query("SELECT * FROM `medicine` WHERE BINARY `medicine_id` = '$medicine_name'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
	$running_balance = $f1['running_balance'];
    if($quantity > $running_balance){
        echo "not ok"; 
	}else{
    $conn->query("INSERT INTO `medication_dispensation` VALUES('', '$received', '$medicine_name', '$purpose', '$date', '$time', '$month', '$year', '$quantity','$date_time')") or die(mysqli_error());
    
    $conn->query("UPDATE `medicine` SET `running_balance` = `running_balance` - '$quantity' WHERE `medicine_id` = '$medicine_name'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    $conn->close();
    }   
}
?>
