<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=0 && referral_prenatal.age <=10) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$a12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$query1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b1 = $query1->fetch_array();

$query2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b2 = $query2->fetch_array();

$query3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b3 = $query3->fetch_array();

$query4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b4 = $query4->fetch_array();

$query5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b5 = $query5->fetch_array();

$query6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b6 = $query6->fetch_array();

$query7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b7 = $query7->fetch_array();

$query8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b8 = $query8->fetch_array();

$query9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b9 = $query9->fetch_array();

$query10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b10 = $query10->fetch_array();

$query11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b11 = $query11->fetch_array();

$query12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=11 && referral_prenatal.age <=20) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$b12 = $query12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=21 && referral_prenatal.age <=30) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$c12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=31 && referral_prenatal.age <=40) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$d12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=41 && referral_prenatal.age <=50) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$e12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=51 && referral_prenatal.age <=60) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$f12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=61 && referral_prenatal.age <=70) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$g12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=71 && referral_prenatal.age <=80) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$h12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=81 && referral_prenatal.age <=90) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$i12 = $q12->fetch_array();

?>

<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';

$q1 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Jan' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j1 = $q1->fetch_array();

$q2 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Feb' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j2 = $q2->fetch_array();

$q3 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Mar' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j3 = $q3->fetch_array();

$q4 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Apr' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'May' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Jun' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Jul' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Aug' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j8 = $q8->fetch_array();

$q9 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Sep' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j9 = $q9->fetch_array();

$q10 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Oct' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j10 = $q10->fetch_array();

$q11 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Nov' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j11 = $q11->fetch_array();

$q12 = $conn->query("select count(*) as total from `referral_prenatal` where (referral_prenatal.age >=91 && referral_prenatal.age <=100) && referral_prenatal.month = 'Dec' && referral_prenatal.year = '$year'") or die(mysqli_error());
$j12 = $q12->fetch_array();

?>