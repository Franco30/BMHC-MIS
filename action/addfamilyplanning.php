<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient_id = $_POST['patient_id'];
    $type_of_acceptor = $_POST['type_of_acceptor'];
    $prevmethod = $_POST['prevmethod'];
    $datetime = $_POST['datetime'];
    $patient_education = $_POST['patient_education'];
    $spouse_name = $_POST['spouse_name'];
    $spouse_birthdate = $_POST['spouse_birthdate'];
    $spouse_education = $_POST['spouse_education'];
    $spouse_occupation = $_POST['spouse_occupation'];
    $monthly_income = $_POST['monthly_income'];
    $no_living_children = $_POST['no_living_children'];
    $planmorechildren = $_POST['planmorechildren'];
    $reason = $_POST['reason'];
    $method_accepted = $_POST['method_accepted'];
    
    $MA = "";
    foreach($method_accepted as $value) {
        $MA .= $value . ", ";  
    }
    $MA = substr($MA, 0, -2);
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Added $patient_name to Family Planning";

    require '../require/config.php';

    $conn->query("INSERT INTO `family_planning` VALUES('', '$patient_id', '$type_of_acceptor', '$prevmethod', '$datetime', '$patient_education', '$spouse_name', '$spouse_birthdate', '$spouse_education', '$spouse_occupation', '$monthly_income', '$no_living_children', '$planmorechildren', '$reason', '$MA', 'No Assessment', '$month', '$year')") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
