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


$a1 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$a1 = $a1->fetch_array();

$a2 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$a2 = $a2->fetch_array();

$a3 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$a3 = $a3->fetch_array();

$a4 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$a4 = $a4->fetch_array();

$a5 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$a5 = $a5->fetch_array();

$a6 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$a6 = $a6->fetch_array();

$a7 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$a7 = $a7->fetch_array();

$a8 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$a8 = $a8->fetch_array();

$a9 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$a9 = $a9->fetch_array();

$a10 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$a10 = $a10->fetch_array();

$a11 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$a11 = $a11->fetch_array();

$a12 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Allergy' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$a12 = $a12->fetch_array();
$totala = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Allergy' && `year` = '$year'") or die(mysqli_error());
$totala = $totala->fetch_array();

$b1 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$b1 = $b1->fetch_array();

$b2 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$b2 = $b2->fetch_array();

$b3 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$b3 = $b3->fetch_array();

$b4 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$b4 = $b4->fetch_array();

$b5 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$b5 = $b5->fetch_array();

$b6 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$b6 = $b6->fetch_array();

$b7 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$b7 = $b7->fetch_array();

$b8 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$b8 = $b8->fetch_array();

$b9 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$b9 = $b9->fetch_array();

$b10 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$b10 = $b10->fetch_array();

$b11 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$b11 = $b11->fetch_array();

$b12 = $conn->query("select count(*) as total from `consultation`  WHERE `complaints` REGEXP 'Colds and Flu' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$b12 = $b12->fetch_array();
$totalb = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Colds and Flu' && `year` = '$year'") or die(mysqli_error());
$totalb = $totalb->fetch_array();

$c1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$c1 = $c1->fetch_array();

$c2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$c2 = $c2->fetch_array();

$c3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$c3 = $c3->fetch_array();

$c4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$c4 = $c4->fetch_array();

$c5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$c5 = $c5->fetch_array();

$c6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$c6 = $c6->fetch_array();

$c7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$c7 = $c7->fetch_array();

$c8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$c8 = $c8->fetch_array();

$c9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$c9 = $c9->fetch_array();

$c10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$c10 = $c10->fetch_array();

$c11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$c11 = $c11->fetch_array();

$c12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$c12 = $c12->fetch_array();
$totalc = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Conjunctivitis' && `year` = '$year'") or die(mysqli_error());
$totalc = $totalc->fetch_array();

$d1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();

$d5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$d5 = $d5->fetch_array();

$d6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$d6 = $d6->fetch_array();

$d7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$d7 = $d7->fetch_array();

$d8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$d8 = $d8->fetch_array();

$d9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$d9 = $d9->fetch_array();

$d10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$d10 = $d10->fetch_array();

$d11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$d11 = $d11->fetch_array();

$d12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$d12 = $d12->fetch_array();
$totald = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Diarrhea' && `year` = '$year'") or die(mysqli_error());
$totald = $totald->fetch_array();

$e1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$e1 = $e1->fetch_array();

$e2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$e2 = $e2->fetch_array();

$e3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$e3 = $e3->fetch_array();

$e4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$e4 = $e4->fetch_array();

$e5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$e5 = $e5->fetch_array();

$e6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$e6 = $e6->fetch_array();

$e7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$e7 = $e7->fetch_array();

$e8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$e8 = $e8->fetch_array();

$e9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$e9 = $e9->fetch_array();

$e10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$e10 = $e10->fetch_array();

$e11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$e11 = $e11->fetch_array();

$e12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Fever' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$e12 = $e12->fetch_array();
$totale = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Fever' && `year` = '$year'") or die(mysqli_error());
$totale = $totale->fetch_array();

$f1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$headache1 = $f1->fetch_array();

$f2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$headache2 = $f2->fetch_array();

$f3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$headache3 = $f3->fetch_array();

$f4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$headache4 = $f4->fetch_array();

$f5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$headache5 = $f5->fetch_array();

$f6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$headache6 = $f6->fetch_array();

$f7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$headache7 = $f7->fetch_array();

$f8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$headache8 = $f8->fetch_array();

$f9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$headache9 = $f9->fetch_array();

$f10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$headache10 = $f10->fetch_array();

$f11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$headache11 = $f11->fetch_array();

$f12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Headache' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$headache12 = $f12->fetch_array();
$totalf = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Headache' && `year` = '$year'") or die(mysqli_error());
$totalf = $totalf->fetch_array();

$g1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$g1 = $g1->fetch_array();

$g2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$g2 = $g2->fetch_array();

$g3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$g3 = $g3->fetch_array();

$g4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$g4 = $g4->fetch_array();

$g5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$g5 = $g5->fetch_array();

$g6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$g6 = $g6->fetch_array();

$g7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$g7 = $g7->fetch_array();

$g8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$g8 = $g8->fetch_array();

$g9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$g9 = $g9->fetch_array();

$g10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$g10 = $g10->fetch_array();

$g11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$g11 = $g11->fetch_array();

$g12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$g12 = $g12->fetch_array();
$totalg = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Stomach Ache' && `year` = '$year'") or die(mysqli_error());
$totalg = $totalg->fetch_array();

$h1 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Jan' && `year` = '$year'") or die(mysqli_error());
$h1 = $h1->fetch_array();

$h2 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Feb' && `year` = '$year'") or die(mysqli_error());
$h2 = $h2->fetch_array();

$h3 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Mar' && `year` = '$year'") or die(mysqli_error());
$h3 = $h3->fetch_array();

$h4 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Apr' && `year` = '$year'") or die(mysqli_error());
$h4 = $h4->fetch_array();

$h5 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='May' && `year` = '$year'") or die(mysqli_error());
$h5 = $h5->fetch_array();

$h6 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Jun' && `year` = '$year'") or die(mysqli_error());
$h6 = $h6->fetch_array();

$h7 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Jul' && `year` = '$year'") or die(mysqli_error());
$h7 = $h7->fetch_array();

$h8 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Aug' && `year` = '$year'") or die(mysqli_error());
$h8 = $h8->fetch_array();

$h9 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Sep' && `year` = '$year'") or die(mysqli_error());
$h9 = $h9->fetch_array();

$h10 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Oct' && `year` = '$year'") or die(mysqli_error());
$h10 = $h10->fetch_array();

$h11 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Nov' && `year` = '$year'") or die(mysqli_error());
$h11 = $h11->fetch_array();

$h12 = $conn->query("select count(*) as total from `consultation` WHERE `complaints` REGEXP 'Others' && `month` ='Dec' && `year` = '$year'") or die(mysqli_error());
$h12 = $h12->fetch_array();
$totalh = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `complaints` REGEXP 'Others' && `year` = '$year'") or die(mysqli_error());
$totalh = $totalh->fetch_array();

$grandtotal = $totala['total'] + $totalb['total'] + $totalc['total'] + $totald['total'] + $totale['total'] + $totalf['total'] + $totalg['total'] + $totalh['total'];

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