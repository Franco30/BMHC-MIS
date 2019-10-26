<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $civilstatus = $_POST['civilstatus'];
    $streetaddress = $_POST['streetaddress'];
    $purok = $_POST['purok'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $contact_no = $_POST['contact_no'];
    $region_province = $_POST['region_province'];
    $occupation = $_POST['occupation'];
    $philhealth_no = $_POST['philhealth_no'];
    $contact_person = $_POST['contact_person'];
    $emergency_no = $_POST['emergency_no'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    $remarks = "Edited $patient_name Patient Profile";

    require '../require/config.php';
    $conn->query("UPDATE `patient` SET `patient_name` = '$patient_name', `civil_status` = '$civilstatus', `birthdate` = '$birthdate', `age` = '$age', `gender` = '$gender', `purok` = '$purok', `street_address` = '$streetaddress, Mansilingan', `height` = '$height', `weight` = '$weight', `contact_no` = '$contact_no', `region_province` = '$region_province', `occupation` = '$occupation', `philhealth_no` = '$philhealth_no', `contact_person` = '$contact_person', `emergency_no` = '$emergency_no' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>