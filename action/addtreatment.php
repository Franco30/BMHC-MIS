<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';
    
    $child_id = $conn -> real_escape_string($_POST['child_id']);
    $treatment_type = $conn -> real_escape_string($_POST['treatment_type']);
    $treatment_date = $conn -> real_escape_string($_POST['treatment_date']);
    $treatment_age = $conn -> real_escape_string($_POST['treatment_age']);
    $treatment_weight = $conn -> real_escape_string($_POST['treatment_weight']);
    $treatment_height = $conn -> real_escape_string($_POST['treatment_height']);
    $treatment_temp = $conn -> real_escape_string($_POST['treatment_temp']);
    $treatment_remarks = $conn -> real_escape_string($_POST['treatment_remarks']);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient_child` WHERE `child_id` = '$child_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $child_name = $fetch['child_name'];
    
    $remarks = "Added Immunization Treatment to $child_name";

    require '../require/config.php';
        $q1 = $conn->query ("SELECT * FROM `immunization_treatment` WHERE BINARY `treatment_type` = '$treatment_type' && `child_id` = '$child_id'") or die(mysqli_error());
        $f1 = $q1->fetch_array();
        $check = $q1->num_rows;
    if($check > 0){
        echo "1";
    }else{
    $conn->query("INSERT INTO `immunization_treatment` VALUES('', '$child_id', '$treatment_type', '$treatment_date', '$treatment_age', '$treatment_weight', '$treatment_height', '$treatment_temp', '$treatment_remarks')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
}
?>
