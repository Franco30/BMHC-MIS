<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $medicine_id = $_POST['medicine_id'];
    $medicine_name = $_POST['medicine_name'];
    $medicine_type = $_POST['medicine_type'];
    $medicine_category = $_POST['medicine_category'];

    require '../require/config.php';

    $conn->query("UPDATE `medicine` SET `medicine_name` = '$medicine_name', `medicine_type` = '$medicine_type', `medicine_category` = '$medicine_category' WHERE `medicine_id` = '$medicine_id'") or die(mysqli_error());
}
?>