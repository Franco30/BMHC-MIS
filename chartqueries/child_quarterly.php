<!-- Quarterly patient_child -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
require 'require/config.php';
$quarter1 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$q1 = $quarter1->fetch_array();
$quarter2 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$q2 = $quarter2->fetch_array();
$quarter3 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$q3 = $quarter3->fetch_array();
$quarter4 = $conn->query("SELECT COUNT(*) as total FROM `patient_child` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$q4 = $quarter4->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `patient_child` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();
?>

<?php 
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

require 'require/config.php';
$b1 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Jan' && patient_child.year = '$year'") or die(mysqli_error());
$b1 = $b1->fetch_array();

$b2 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Feb' && patient_child.year = '$year'") or die(mysqli_error());
$b2 = $b2->fetch_array();

$b3 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Mar' && patient_child.year = '$year'") or die(mysqli_error());
$b3 = $b3->fetch_array();

$b4 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Apr' && patient_child.year = '$year'") or die(mysqli_error());
$b4 = $b4->fetch_array();

$b5 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'May' && patient_child.year = '$year'") or die(mysqli_error());
$b5 = $b5->fetch_array();

$b6 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Jun' && patient_child.year = '$year'") or die(mysqli_error());
$b6 = $b6->fetch_array();

$b7 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Jul' && patient_child.year = '$year'") or die(mysqli_error());
$b7 = $b7->fetch_array();

$b8 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Aug' && patient_child.year = '$year'") or die(mysqli_error());
$b8 = $b8->fetch_array();

$b9 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Sep' && patient_child.year = '$year'") or die(mysqli_error());
$b9 = $b9->fetch_array();

$b10 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Oct' && patient_child.year = '$year'") or die(mysqli_error());
$b10 = $b10->fetch_array();

$b11 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Nov' && patient_child.year = '$year'") or die(mysqli_error());
$b11 = $b11->fetch_array();

$b12 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Male' && patient_child.month = 'Dec' && patient_child.year = '$year'") or die(mysqli_error());
$b12 = $b12->fetch_array();

$d1 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Jan' && patient_child.year = '$year'") or die(mysqli_error());
$d1 = $d1->fetch_array();

$d2 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Feb' && patient_child.year = '$year'") or die(mysqli_error());
$d2 = $d2->fetch_array();

$d3 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Mar' && patient_child.year = '$year'") or die(mysqli_error());
$d3 = $d3->fetch_array();

$d4 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Apr' && patient_child.year = '$year'") or die(mysqli_error());
$d4 = $d4->fetch_array();

$d5 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'May' && patient_child.year = '$year'") or die(mysqli_error());
$d5 = $d5->fetch_array();

$d6 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Jun' && patient_child.year = '$year'") or die(mysqli_error());
$d6 = $d6->fetch_array();

$d7 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Jul' && patient_child.year = '$year'") or die(mysqli_error());
$d7 = $d7->fetch_array();

$d8 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Aug' && patient_child.year = '$year'") or die(mysqli_error());
$d8 = $d8->fetch_array();

$d9 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Sep' && patient_child.year = '$year'") or die(mysqli_error());
$d9 = $d9->fetch_array();

$d10 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Oct' && patient_child.year = '$year'") or die(mysqli_error());
$d10 = $d10->fetch_array();

$d11 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Nov' && patient_child.year = '$year'") or die(mysqli_error());
$d11 = $d11->fetch_array();

$d12 = $conn->query("select count(*) as total from `patient_child` where patient_child.gender = 'Female' && patient_child.month = 'Dec' && patient_child.year = '$year'") or die(mysqli_error());
$d12 = $d12->fetch_array();

?>

