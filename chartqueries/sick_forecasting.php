<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';
$qjan = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec = $qdec->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();


$a1 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Headache' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();


$b1 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$b1 = $b1->fetch_array();

$b2 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$b2 = $b2->fetch_array();

$b3 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$b3 = $b3->fetch_array();

$b4 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$b4 = $b4->fetch_array();

$b5 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$b5 = $b5->fetch_array();

$b6 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$b6 = $b6->fetch_array();

$b7 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$b7 = $b7->fetch_array();

$b8 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$b8 = $b8->fetch_array();

$b9 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$b9 = $b9->fetch_array();

$b10 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$b10 = $b10->fetch_array();

$b11 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$b11 = $b11->fetch_array();

$b12 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$b12 = $b12->fetch_array();


$c1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();


$d1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();

$d5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$d5 = $d5->fetch_array();

$d6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$d6 = $d6->fetch_array();

$d7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$d7 = $d7->fetch_array();

$d8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$d8 = $d8->fetch_array();

$d9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$d9 = $d9->fetch_array();

$d10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$d10 = $d10->fetch_array();

$d11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$d11 = $d11->fetch_array();

$d12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Allergy' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$d12 = $d12->fetch_array();

$res = $conn->query("SELECT * FROM `consultation` GROUP BY year") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['year'];
    $q1 = $conn->query("SELECT *, count(*) as total FROM `consultation` WHERE `year` = '$R' group by year") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $FR = intval($f1['total']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
json_encode($data_points);

?>