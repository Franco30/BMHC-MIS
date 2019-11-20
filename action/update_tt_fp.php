<?php
require '../require/logincheck.php';

if(isset($_POST['edit'])){
    
    $tetanus_toxoid_fp_id = $_POST['tetanus_toxoid_fp_id'];
    $uid = $_POST['uid'];
    $btl = $_POST['btl'];
    $one_year = $_POST['one_year'];
    $vit_a = $_POST['vit_a'];
    $feso4 = $_POST['feso4'];
    

    require '../require/config.php';

    $conn->query("UPDATE `tetanus_toxoid_fp` SET `uid` = '$uid', `btl` = '$btl', `1_year` = '$one_year', `vit_a` = '$vit_a', `feso4` = '$feso4' WHERE `tetanus_toxoid_fp_id` = '$tetanus_toxoid_fp_id'") or die(mysqli_error());
}
?>