<!-- Quarterly referral -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
require 'require/config.php';
$quarter1 = $conn->query("SELECT COUNT(*) as total FROM `referral_prenatal` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$q1 = $quarter1->fetch_array();
$quarter2 = $conn->query("SELECT COUNT(*) as total FROM `referral_prenatal` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$q2 = $quarter2->fetch_array();
$quarter3 = $conn->query("SELECT COUNT(*) as total FROM `referral_prenatal` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$q3 = $quarter3->fetch_array();
$quarter4 = $conn->query("SELECT COUNT(*) as total FROM `referral_prenatal` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$q4 = $quarter4->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `referral_prenatal` WHERE `year` = '$year'") or die(mysqli_error());
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
$c1 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age <= 15 && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();

$a1 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("select count(*) as total from `referral_prenatal` where referral_prenatal.age >= 16 && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();

?>


<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}


require 'require/config.php';
$e1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e1 = $e1->fetch_array();

$e2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e2 = $e2->fetch_array();

$e3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e3 = $e3->fetch_array();

$e4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e4 = $e4->fetch_array();

$e5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e5 = $e5->fetch_array();

$e6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e6 = $e6->fetch_array();

$e7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e7 = $e7->fetch_array();

$e8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e8 = $e8->fetch_array();

$e9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e9 = $e9->fetch_array();

$e10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.year = '$year'") or die(mysqli_error());
$e10 = $e10->fetch_array();


?>

