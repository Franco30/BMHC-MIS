<?php
$year = date('Y');
if(isset($_GET['year']))
{
$year=$_GET['year'];
}
require 'require/config.php';
$res = $conn->query("SELECT * FROM `medicine` GROUP BY medicine_name") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['medicine_name'];
    $q1 = $conn->query("SELECT * FROM `medicine` WHERE `medicine_name` = '$R'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $FR = intval($f1['running_balance']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
json_encode($data_points);
?>