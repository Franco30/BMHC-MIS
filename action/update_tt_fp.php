<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    require '../require/config.php';
    $tetanus_toxoid_fp_id = $conn -> real_escape_string($_POST['tetanus_toxoid_fp_id']);
    $uid = $conn -> real_escape_string($_POST['uid']);
    $btl = $conn -> real_escape_string($_POST['btl']);
    $one_year = $conn -> real_escape_string($_POST['one_year']);
    $vit_a = $conn -> real_escape_string($_POST['vit_a']);
    $feso4 = $conn -> real_escape_string($_POST['feso4']);
    

    require '../require/config.php';

    $conn->query("UPDATE `tetanus_toxoid_fp` SET `uid` = '$uid', `btl` = '$btl', `1_year` = '$one_year', `vit_a` = '$vit_a', `feso4` = '$feso4' WHERE `tetanus_toxoid_fp_id` = '$tetanus_toxoid_fp_id'") or die(mysqli_error());
}
?>