<?php
session_start();
require ('../require/config.php');
if(ISSET($_POST['login']))
{	
	$username = $_POST['username'];
	$password = $_POST['password'];
	date_default_timezone_set('Asia/Manila');
	$date=date("F j, Y, g:i a");

	$user = mysqli_real_escape_string($conn,$username);
	$pass = mysqli_real_escape_string($conn,$password);
    
           $pass1 = sha1($pass);
           $salt = "STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj";
           $pass1 = $salt.$pass1;

	$conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `users` WHERE BINARY `username` = '$user' && BINARY `password` = '$pass1' && `status` = 1") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$valid = $query->num_rows;
	$position = $fetch['position'];
	$user_id = $fetch['user_id'];	
		
    if($valid > 0){	
        if ($position == 'Midwife' || $position == 'Nurse') 
			{
                echo "ok";
				$_SESSION['user_id'] = $fetch['user_id'];
				$conn->query ("UPDATE `users` SET `login` = '$date' WHERE `user_id` = '$user_id'") or die(mysqli_error());
			}
		
		if ($position != 'Midwife' && $position != 'Nurse') 
			{
                echo "ok2";
				$_SESSION['user_id'] = $fetch['user_id'];
				$conn->query ("UPDATE `users` SET `login` = '$date' WHERE `user_id` = '$user_id'") or die(mysqli_error());
			}			
	} else {				
		echo "password does not exist"; // wrong details 
    }	

}	
?>