<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
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
    $remarks = "Registered $patient_name as new Patient";

    require '../require/config.php';
    $conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$civilstatus', '$age', '$gender', '$streetaddress, Mansilingan', '$purok', '$birthdate', '$height', '$weight', '$contact_no', '$region_province', '$occupation', '$philhealth_no', '$contact_person', '$emergency_no', 'Active', '$month', '$year')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>
