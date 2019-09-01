<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    $chicks_id = $_POST['chicks_id'];
    $mname = $_POST['mname'];
    $fblink = $_POST['fblink'];
    $ig = $_POST['ig'];
    $bp = $_POST['bp'];

    require '../require/config.php';

    $conn->query("UPDATE `chicks` SET `chicksname` = '$mname', `fblink` = '$fblink', `instagram` = '$ig', `beautypercentage` = '$bp' WHERE `chicks_id` = '$chicks_id'") or die(mysqli_error());
}
?>