<?php
$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

require 'require/config.php';

$gauzon = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year' && `purok` = 'Gauzon'") or die(mysqli_error());
$gauzon = $gauzon->fetch_array();

$himaya = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Himaya'") or die(mysqli_error());
$himaya = $himaya->fetch_array();

$kabugwason = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Kabugwason'") or die(mysqli_error());
$kabugwason = $kabugwason->fetch_array();

$kahirupa = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'kahirup A'") or die(mysqli_error());
$kahirupa = $kahirupa->fetch_array();

$kahirupb = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'kahirup B'") or die(mysqli_error());
$kahirupb = $kahirupb->fetch_array();

$kasilingan = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Kasilingan'") or die(mysqli_error());
$kasilingan = $kasilingan->fetch_array();

$katilingban = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Katilingban'") or die(mysqli_error());
$katilingban = $katilingban->fetch_array();

$mabinuligon = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Mabinuligon'") or die(mysqli_error());
$mabinuligon = $mabinuligon->fetch_array();

$matahum = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Matahum'") or die(mysqli_error());
$matahum = $matahum->fetch_array();

$paghidaet = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Paghidaet'") or die(mysqli_error());
$paghidaet = $paghidaet->fetch_array();

$paglaum = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'  && `purok` = 'Paglaum'") or die(mysqli_error());
$paglaum = $paglaum->fetch_array();

$grandtotal = $conn->query("SELECT COUNT(*) as total FROM `consultation` WHERE `year` =  '$year'") or die(mysqli_error());
$grandtotal = $grandtotal->fetch_array();
?>