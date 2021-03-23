<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';

    $patient_name = $conn->real_escape_string($_POST['patient_name']);
    $birthdate = $conn->real_escape_string($_POST['birthdate']);
    $age = $conn->real_escape_string($_POST['age']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $civilstatus = $conn->real_escape_string($_POST['civilstatus']);
    $streetaddress = $conn->real_escape_string($_POST['streetaddress']);
    $purok = $conn->real_escape_string($_POST['purok']);
    $height = $conn->real_escape_string($_POST['height']);
    $weight = $conn->real_escape_string($_POST['weight']);
    $contact_no = $conn->real_escape_string($_POST['contact_no']);
    $region_province = $conn->real_escape_string($_POST['region_province']);
    $occupation = $conn->real_escape_string($_POST['occupation']);
    $philhealth_no = $conn->real_escape_string($_POST['philhealth_no']);
    $contact_person = $conn->real_escape_string($_POST['contact_person']);
    $emergency_no = $conn->real_escape_string($_POST['emergency_no']);

    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
//    $today = date("m/d/Y"); 
    $today = date("Y-m-d");
    $remarks = "Registered $patient_name as new Patient";
    
    $finaladdress = "$streetaddress, Mansilingan";
    $status = "Active";
    
    require '../require/config.php';
    
    
    $stmt = $conn->prepare("INSERT INTO `patient` (patient_name, civil_status, age, gender, street_address, purok, birthdate, height, weight, contact_no, region_province, occupation, philhealth_no, contact_person, emergency_no, status, month, year, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die(mysqli_error());
    $stmt->bind_param("ssissssiissssssssis", $patient_name, $civilstatus, $age, $gender, $finaladdress, $purok, $birthdate, $height, $weight, $contact_no, $region_province, $occupation, $philhealth_no, $contact_person, $emergency_no, $status, $month, $year, $today);
    $stmt->execute();
    
//    $conn->query("INSERT INTO `patient` VALUES('', '$patient_name', '$civilstatus', '$age', '$gender', '$streetaddress, Mansilingan', '$purok', '$birthdate', '$height', '$weight', '$contact_no', '$region_province', '$occupation', '$philhealth_no', '$contact_person', '$emergency_no', 'Active', '$month', '$year', '$today')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
}
?>
