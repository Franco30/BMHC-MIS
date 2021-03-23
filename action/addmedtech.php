<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    require '../require/config.php';

    $mname = $conn->real_escape_string($_POST['mname']);
    $fblink = $conn->real_escape_string($_POST['fblink']);
    $ig = $conn->real_escape_string($_POST['ig']);
    $bp = $conn->real_escape_string($_POST['bp']);

    require '../require/config.php';
        $q1 = $conn->query("SELECT * FROM `chicks` WHERE BINARY `mname` = '$mname'") or die(mysqli_error());
        $f1 = $q1->fetch_array();
        $check = $q1->num_rows;
    
    if($check > 0)
        {
            echo "Medtech name already exist!";

        }
    
    else
        {
        
            $stmt = $conn->prepare("INSERT INTO `chicks` (mname, fblink, ig, bp) VALUES (?, ?, ?, ?)") or die(mysqli_error());
            $stmt->bind_param("ssss", $mname, $fblink, $ig, $bp);
            $stmt->execute();
        
//            $conn->query("INSERT INTO `chicks` VALUES('', '$mname', '$fblink', '$ig', '$bp')") or die(mysqli_error());
            
        }
}
?>
