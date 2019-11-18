<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$conn = new mysqli('localhost','root','','bmhc')or die(mysqli_error());
$qjan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jan' && `status` = 'Active'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Feb' && `status` = 'Active'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Mar' && `status` = 'Active'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Apr' && `status` = 'Active'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'May' && `status` = 'Active'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jun' && `status` = 'Active'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jul' && `status` = 'Active'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Aug' && `status` = 'Active'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Sep' && `status` = 'Active'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Oct' && `status` = 'Active'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Nov' && `status` = 'Active'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Dec' && `status` = 'Active'") or die(mysqli_error());
$fdec = $qdec->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `status` = 'Active'") or die(mysqli_error());
$total = $total->fetch_array();

$qjan2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jan' && `status` = 'Deceased'") or die(mysqli_error());
$fjan2 = $qjan2->fetch_array();
$qfeb2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Feb' && `status` = 'Deceased'") or die(mysqli_error());
$ffeb2 = $qfeb2->fetch_array();
$qmar2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Mar' && `status` = 'Deceased'") or die(mysqli_error());
$fmar2 = $qmar2->fetch_array();
$qapr2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Apr' && `status` = 'Deceased'") or die(mysqli_error());
$fapr2 = $qapr2->fetch_array();
$qmay2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'May' && `status` = 'Deceased'") or die(mysqli_error());
$fmay2 = $qmay2->fetch_array();
$qjun2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jun' && `status` = 'Deceased'") or die(mysqli_error());
$fjun2 = $qjun2->fetch_array();
$qjul2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Jul' && `status` = 'Deceased'") or die(mysqli_error());
$fjul2 = $qjul2->fetch_array();
$qaug2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Aug' && `status` = 'Deceased'") or die(mysqli_error());
$faug2 = $qaug2->fetch_array();
$qsep2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Sep' && `status` = 'Deceased'") or die(mysqli_error());
$fsep2 = $qsep2->fetch_array();
$qoct2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Oct' && `status` = 'Deceased'") or die(mysqli_error());
$foct2 = $qoct2->fetch_array();
$qnov2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Nov' && `status` = 'Deceased'") or die(mysqli_error());
$fnov2 = $qnov2->fetch_array();
$qdec2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `month` = 'Dec' && `status` = 'Deceased'") or die(mysqli_error());
$fdec2 = $qdec2->fetch_array();
$total2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `status` = 'Deceased'") or die(mysqli_error());
$total2 = $total2->fetch_array();

$total3 = $total['total'] + $total2['total'];
?>


<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res3 = $conn->query("SELECT * FROM `patient` GROUP BY year") or die(mysqli_error());
$data_points3 = array();
while($result3 = $res3->fetch_array()){
    $R3 = $result3['year'];
    $q3 = $conn->query("SELECT *, COUNT(*) as total FROM `patient` WHERE `year` = '$R3' group by year") or die(mysqli_error());
    $f3 = $q3->fetch_array();
    $FR3 = intval($f3['total']);
    $point3 = array('label' => $R3, 'y' => $FR3);
    array_push($data_points3, $point3);
}
json_encode($data_points3);
?>