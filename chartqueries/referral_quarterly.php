<!-- Quarterly referral -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
require 'require/config.php';
$quarter1 = $conn->query("SELECT COUNT(*) as total FROM `referral` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$q1 = $quarter1->fetch_array();
$quarter2 = $conn->query("SELECT COUNT(*) as total FROM `referral` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$q2 = $quarter2->fetch_array();
$quarter3 = $conn->query("SELECT COUNT(*) as total FROM `referral` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$q3 = $quarter3->fetch_array();
$quarter4 = $conn->query("SELECT COUNT(*) as total FROM `referral` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$q4 = $quarter4->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `referral` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();
?>
<!-- Patient Type -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
require 'require/config.php';
$c1 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Jan' && referral.year = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Feb' && referral.year = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Mar' && referral.year = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Apr' && referral.year = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'May' && referral.year = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Jun' && referral.year = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Jul' && referral.year = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Aug' && referral.year = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Sep' && referral.year = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Oct' && referral.year = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Nov' && referral.year = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.month = 'Dec' && referral.year = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();

$a1 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Jan' && referral.year = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Feb' && referral.year = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Mar' && referral.year = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Apr' && referral.year = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'May' && referral.year = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Jun' && referral.year = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Jul' && referral.year = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Aug' && referral.year = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Sep' && referral.year = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Oct' && referral.year = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Nov' && referral.year = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.month = 'Dec' && referral.year = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();

?>

<?php 
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';
$b1 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Jan' && referral.year = '$year'") or die(mysqli_error());
$b1 = $b1->fetch_array();

$b2 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Feb' && referral.year = '$year'") or die(mysqli_error());
$b2 = $b2->fetch_array();

$b3 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Mar' && referral.year = '$year'") or die(mysqli_error());
$b3 = $b3->fetch_array();

$b4 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Apr' && referral.year = '$year'") or die(mysqli_error());
$b4 = $b4->fetch_array();

$b5 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'May' && referral.year = '$year'") or die(mysqli_error());
$b5 = $b5->fetch_array();

$b6 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Jun' && referral.year = '$year'") or die(mysqli_error());
$b6 = $b6->fetch_array();

$b7 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Jul' && referral.year = '$year'") or die(mysqli_error());
$b7 = $b7->fetch_array();

$b8 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Aug' && referral.year = '$year'") or die(mysqli_error());
$b8 = $b8->fetch_array();

$b9 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Sep' && referral.year = '$year'") or die(mysqli_error());
$b9 = $b9->fetch_array();

$b10 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Oct' && referral.year = '$year'") or die(mysqli_error());
$b10 = $b10->fetch_array();

$b11 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Nov' && referral.year = '$year'") or die(mysqli_error());
$b11 = $b11->fetch_array();

$b12 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Male' && referral.month = 'Dec' && referral.year = '$year'") or die(mysqli_error());
$b12 = $b12->fetch_array();

$d1 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Jan' && referral.year = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Feb' && referral.year = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Mar' && referral.year = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Apr' && referral.year = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();

$d5 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'May' && referral.year = '$year'") or die(mysqli_error());
$d5 = $d5->fetch_array();

$d6 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Jun' && referral.year = '$year'") or die(mysqli_error());
$d6 = $d6->fetch_array();

$d7 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Jul' && referral.year = '$year'") or die(mysqli_error());
$d7 = $d7->fetch_array();

$d8 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Aug' && referral.year = '$year'") or die(mysqli_error());
$d8 = $d8->fetch_array();

$d9 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Sep' && referral.year = '$year'") or die(mysqli_error());
$d9 = $d9->fetch_array();

$d10 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Oct' && referral.year = '$year'") or die(mysqli_error());
$d10 = $d10->fetch_array();

$d11 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Nov' && referral.year = '$year'") or die(mysqli_error());
$d11 = $d11->fetch_array();

$d12 = $conn->query("select count(*) as total from `referral` where referral.gender = 'Female' && referral.month = 'Dec' && referral.year = '$year'") or die(mysqli_error());
$d12 = $d12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}


require 'require/config.php';
$e1 = $conn->query("select count(*) as total from `referral` where (referral.age >=0 && referral.age <=10) && referral.year = '$year'") or die(mysqli_error());
$e1 = $e1->fetch_array();

$e2 = $conn->query("select count(*) as total from `referral` where (referral.age >=11 && referral.age <=20) && referral.year = '$year'") or die(mysqli_error());
$e2 = $e2->fetch_array();

$e3 = $conn->query("select count(*) as total from `referral` where (referral.age >=21 && referral.age <=30) && referral.year = '$year'") or die(mysqli_error());
$e3 = $e3->fetch_array();

$e4 = $conn->query("select count(*) as total from `referral` where (referral.age >=31 && referral.age <=40) && referral.year = '$year'") or die(mysqli_error());
$e4 = $e4->fetch_array();

$e5 = $conn->query("select count(*) as total from `referral` where (referral.age >=41 && referral.age <=50) && referral.year = '$year'") or die(mysqli_error());
$e5 = $e5->fetch_array();

$e6 = $conn->query("select count(*) as total from `referral` where (referral.age >=51 && referral.age <=60) && referral.year = '$year'") or die(mysqli_error());
$e6 = $e6->fetch_array();

$e7 = $conn->query("select count(*) as total from `referral` where (referral.age >=61 && referral.age <=70) && referral.year = '$year'") or die(mysqli_error());
$e7 = $e7->fetch_array();

$e8 = $conn->query("select count(*) as total from `referral` where (referral.age >=71 && referral.age <=80) && referral.year = '$year'") or die(mysqli_error());
$e8 = $e8->fetch_array();

$e9 = $conn->query("select count(*) as total from `referral` where (referral.age >=81 && referral.age <=90) && referral.year = '$year'") or die(mysqli_error());
$e9 = $e9->fetch_array();

$e10 = $conn->query("select count(*) as total from `referral` where (referral.age >=91 && referral.age <=100) && referral.year = '$year'") or die(mysqli_error());
$e10 = $e10->fetch_array();


?>

