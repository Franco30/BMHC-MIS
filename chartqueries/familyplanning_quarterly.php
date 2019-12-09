<!-- Quarterly family_planning -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
require 'require/config.php';
$quarter1 = $conn->query("SELECT COUNT(*) as total FROM `family_planning` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$q1 = $quarter1->fetch_array();
$quarter2 = $conn->query("SELECT COUNT(*) as total FROM `family_planning` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$q2 = $quarter2->fetch_array();
$quarter3 = $conn->query("SELECT COUNT(*) as total FROM `family_planning` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$q3 = $quarter3->fetch_array();
$quarter4 = $conn->query("SELECT COUNT(*) as total FROM `family_planning` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$q4 = $quarter4->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `family_planning` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();
?>


<?php 
//<!-- COC family_planning -->
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';
$b1 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Jan' && family_planning.year = '$year'") or die(mysqli_error());
$b1 = $b1->fetch_array();

$b2 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Feb' && family_planning.year = '$year'") or die(mysqli_error());
$b2 = $b2->fetch_array();

$b3 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Mar' && family_planning.year = '$year'") or die(mysqli_error());
$b3 = $b3->fetch_array();

$b4 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Apr' && family_planning.year = '$year'") or die(mysqli_error());
$b4 = $b4->fetch_array();

$b5 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'May' && family_planning.year = '$year'") or die(mysqli_error());
$b5 = $b5->fetch_array();

$b6 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Jun' && family_planning.year = '$year'") or die(mysqli_error());
$b6 = $b6->fetch_array();

$b7 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Jul' && family_planning.year = '$year'") or die(mysqli_error());
$b7 = $b7->fetch_array();

$b8 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Aug' && family_planning.year = '$year'") or die(mysqli_error());
$b8 = $b8->fetch_array();

$b9 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Sep' && family_planning.year = '$year'") or die(mysqli_error());
$b9 = $b9->fetch_array();

$b10 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Oct' && family_planning.year = '$year'") or die(mysqli_error());
$b10 = $b10->fetch_array();

$b11 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Nov' && family_planning.year = '$year'") or die(mysqli_error());
$b11 = $b11->fetch_array();

$b12 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'COC' && family_planning.month = 'Dec' && family_planning.year = '$year'") or die(mysqli_error());
$b12 = $b12->fetch_array();

//<!-- Condom family_planning -->
$d1 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Jan' && family_planning.year = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Feb' && family_planning.year = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Mar' && family_planning.year = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Apr' && family_planning.year = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();

$d5 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'May' && family_planning.year = '$year'") or die(mysqli_error());
$d5 = $d5->fetch_array();

$d6 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Jun' && family_planning.year = '$year'") or die(mysqli_error());
$d6 = $d6->fetch_array();

$d7 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Jul' && family_planning.year = '$year'") or die(mysqli_error());
$d7 = $d7->fetch_array();

$d8 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Aug' && family_planning.year = '$year'") or die(mysqli_error());
$d8 = $d8->fetch_array();

$d9 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Sep' && family_planning.year = '$year'") or die(mysqli_error());
$d9 = $d9->fetch_array();

$d10 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Oct' && family_planning.year = '$year'") or die(mysqli_error());
$d10 = $d10->fetch_array();

$d11 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Nov' && family_planning.year = '$year'") or die(mysqli_error());
$d11 = $d11->fetch_array();

$d12 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'Condom' && family_planning.month = 'Dec' && family_planning.year = '$year'") or die(mysqli_error());
$d12 = $d12->fetch_array();

//<!-- IUD family_planning -->
$e1 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Jan' && family_planning.year = '$year'") or die(mysqli_error());
$e1 = $e1->fetch_array();

$e2 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Feb' && family_planning.year = '$year'") or die(mysqli_error());
$e2 = $e2->fetch_array();

$e3 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Mar' && family_planning.year = '$year'") or die(mysqli_error());
$e3 = $e3->fetch_array();

$e4 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Apr' && family_planning.year = '$year'") or die(mysqli_error());
$e4 = $e4->fetch_array();

$e5 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'May' && family_planning.year = '$year'") or die(mysqli_error());
$e5 = $e5->fetch_array();

$e6 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Jun' && family_planning.year = '$year'") or die(mysqli_error());
$e6 = $e6->fetch_array();

$e7 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Jul' && family_planning.year = '$year'") or die(mysqli_error());
$e7 = $e7->fetch_array();

$e8 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Aug' && family_planning.year = '$year'") or die(mysqli_error());
$e8 = $e8->fetch_array();

$e9 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Sep' && family_planning.year = '$year'") or die(mysqli_error());
$e9 = $e9->fetch_array();

$e10 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Oct' && family_planning.year = '$year'") or die(mysqli_error());
$e10 = $e10->fetch_array();

$e11 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Nov' && family_planning.year = '$year'") or die(mysqli_error());
$e11 = $e11->fetch_array();

$e12 = $conn->query("select count(*) as total from `patient`, `family_planning` where family_planning.patient_id = patient.patient_id && family_planning.method_accepted REGEXP 'IUD' && family_planning.month = 'Dec' && family_planning.year = '$year'") or die(mysqli_error());
$e12 = $e12->fetch_array();

?>