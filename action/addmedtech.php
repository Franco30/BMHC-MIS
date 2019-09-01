<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    $mname = $_POST['mname'];
    $fblink = $_POST['fblink'];
    $ig = $_POST['ig'];
    $bp = $_POST['bp'];

    require '../require/config.php';
        $q1 = $conn->query ("SELECT * FROM `chicks` WHERE BINARY `chicksname` = '$mname'") or die(mysqli_error());
        $f1 = $q1->fetch_array();
        $check = $q1->num_rows;
    if($check > 0){
        echo "Medtech name already exist!";
    }else{
    $conn->query("INSERT INTO `chicks` VALUES('', '$mname', '$fblink', '$ig', '$bp')") or die(mysqli_error());

}
}
?>
