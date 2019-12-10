<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $family_planning_id = $_POST['family_planning_id'];
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
    $purok = $_POST['purok'];
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
    
    $remarks = "Edited $patient_name Family Planning Form";

    require '../require/config.php';

    $conn->query("UPDATE `family_planning` SET `prev_used_method` = '$prevmethod', `date_time` = '$datetime', `patient_highest_education` = '$patient_education', `spouse_name` = '$spouse_name', `spouse_birthdate` = '$spouse_birthdate', `spouse_highest_education` = '$spouse_education', `spouse_occupation` = '$spouse_occupation', `average_monthly_income` = '$monthly_income', `no_of_living_children` = '$no_living_children', `plan_more_children` = '$planmorechildren', `reason_for_practicing_fp` = '$reason', `method_accepted` = '$MA' WHERE `family_planning`.`family_planning_id` = '$family_planning_id'") or die(mysqli_error());
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    }
?>
