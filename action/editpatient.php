<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $height = $_POST['height'];
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
    $conn->query("UPDATE `patient` SET `patient_name` = '$patient_name', `age` = '$age', `gender` = '$gender', `address` = '$address', `birthdate` = '$birthdate', `height` = '$height', `contact_no` = '$contact_no', `region_province` = '$region_province', `occupation` = '$occupation', `philhealth_no` = '$philhealth_no', `contact_person` = '$contact_person', `emergency_no` = '$emergency_no' WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>