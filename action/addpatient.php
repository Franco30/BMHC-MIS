<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
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

    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $current_year=date("F j, Y - g:i a");
    $month=date("F");

    require '../require/config.php';
    $conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$age', '$gender', '$address', '$birthdate', '$height', '$contact_no', '$region_province', '$occupation', '$philhealth_no', '$contact_person', '$emergency_no', 'Registered', '$month', '$year')") or die(mysqli_error());
}
?>
