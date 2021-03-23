<?php
require '../require/logincheck.php';
if(isset($_POST['edit'])){
    require '../require/config.php';
    $user_id = $conn -> real_escape_string($_POST['user_id']);
    $fullname = $conn -> real_escape_string($_POST['fullname']);
    $username = $conn -> real_escape_string($_POST['username']);
    $password = $conn -> real_escape_string($_POST['password']);


    $userid=$_SESSION['user_id'];
    date_default_timezone_set('Asia/Manila');
    $date_time=date("F j, Y - g:i a");

    if ($password ==""){
        require ('../require/config.php');
        $conn->query("UPDATE `users` SET `fullname` = '$fullname', `username` = '$username' WHERE `user_id` = '$userid'") or die(mysqli_error());
        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $fullname','$date_time')") or die(mysqli_error());
    }
    else {
//        $pass = sha1($password);
//        $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
//        $pass1 = $salt.$pass;
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        require ('../require/config.php');
        
        $stmt = $conn->prepare("UPDATE `users` SET `fullname` = ?, `username` = ?, `password` = ? WHERE `user_id` = ?") or die(mysqli_error());
        $stmt->bind_param("sssi", $fullname, $username, $hashed_password, $userid);
        $stmt->execute();

        
//        $conn->query("UPDATE `users` SET `fullname` = '$fullname', `username` = '$username',  `password` = '$hashed_password' WHERE `user_id` = '$userid'") or die(mysqli_error());

        $conn->query("INSERT INTO `users_activity_log` VALUES('', '$userid', 'Updated account of $fullname','$date_time')") or die(mysqli_error());

    }

}
?>