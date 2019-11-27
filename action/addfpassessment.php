<?php
require '../require/logincheck.php';

if(isset($_POST['add'])){
    
    $patient_id = $_POST['patient_id'];
    $family_planning_id = $_POST['family_planning_id'];
    
    //Medical History
    $HEENT = $_POST['heent'];
    $heent = "";
    foreach($HEENT as $value) {
        $heent .= $value . ", ";  
    }
    $heent = substr($heent, 0, -2);
    $CHESTHEART = $_POST['chestheart'];
    $chestheart = "";
    foreach($CHESTHEART as $value) {
        $chestheart .= $value . ", ";  
    }
    $chestheart = substr($chestheart, 0, -2);
    $ABDOMEN = $_POST['abdomen'];
    $abdomen = "";
    foreach($ABDOMEN as $value) {
        $abdomen .= $value . ", ";  
    }
    $abdomen = substr($abdomen, 0, -2);
    $GENITAL = $_POST['genital'];
    $genital = "";
    foreach($GENITAL as $value) {
        $genital .= $value . ", ";  
    }
    $genital = substr($genital, 0, -2);
    $EXTREMITIES = $_POST['extremities'];
    $extremities = "";
    foreach($EXTREMITIES as $value) {
        $extremities .= $value . ", ";  
    }
    $extremities = substr($extremities, 0, -2);
    $HISTORY = $_POST['history'];
    $history = "";
    foreach($HISTORY as $value) {
        $history .= $value . ", ";  
    }
    $history = substr($history, 0, -2);
    $skin = $_POST['skin'];
    
    //STI Risk
    $stirisk = $_POST['stirisk'];
    $FORWOMEN = $_POST['forwomen'];
    $forwomen = "";
    foreach($FORWOMEN as $value) {
        $forwomen .= $value . ", ";  
    }
    $forwomen = substr($forwomen, 0, -2);
    $FORMEN = $_POST['formen'];
    $formen = "";
    foreach($FORMEN as $value) {
        $formen .= $value . ", ";  
    }
    $formen = substr($formen, 0, -2);
    
    //Obstetrical History
    $dateoflastdelivery = $_POST['dateoflastdelivery'];
    $typeoflastdelivery = $_POST['typeoflastdelivery'];
    $pregnancies = $_POST['pregnancies'];
    $fullterm = $_POST['fullterm'];
    $premature = $_POST['premature'];
    $abortions = $_POST['abortions'];
    $livingchildren = $_POST['livingchildren'];
    $pastmenstrualperiod = $_POST['pastmenstrualperiod'];
    $lastmenstrualperiod = $_POST['lastmenstrualperiod'];
    $HISTORY2 = $_POST['history2'];
    $history2 = "";
    foreach($HISTORY2 as $value) {
        $history2 .= $value . ", ";  
    }
    $history2 = substr($history2, 0, -2);
    $dcmenstrualbleeding = $_POST['dcmenstrualbleeding'];
    
    //Physical Examination
    $bp = $_POST['bp'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $pr = $_POST['pr'];
    $CONJUNCTIVA = $_POST['conjuntiva'];
    $conjuntiva = "";
    foreach($CONJUNCTIVA as $value) {
        $conjuntiva .= $value . ", ";  
    }
    $conjuntiva = substr($conjuntiva, 0, -2);
    $NECK = $_POST['neck'];
    $neck = "";
    foreach($NECK as $value) {
        $neck .= $value . ", ";  
    }
    $neck = substr($neck, 0, -2);
    $BREAST = $_POST['breast'];
    $breast = "";
    foreach($BREAST as $value) {
        $breast .= $value . ", ";  
    }
    $breast = substr($breast, 0, -2);
    $THORAX = $_POST['thorax'];
    $thorax = "";
    foreach($THORAX as $value) {
        $thorax .= $value . ", ";  
    }
    $thorax = substr($thorax, 0, -2);
    $ABDOMEN2 = $_POST['abdomen2'];
    $abdomen2 = "";
    foreach($ABDOMEN2 as $value) {
        $abdomen2 .= $value . ", ";  
    }
    $abdomen2 = substr($abdomen2, 0, -2);
    $EXTREMITIES2 = $_POST['extremities2'];
    $extremities2 = "";
    foreach($EXTREMITIES2 as $value) {
        $extremities2 .= $value . ", ";  
    }
    $extremities2 = substr($extremities2, 0, -2);
    
    //Pelvic Examination
    $PERINEUM = $_POST['perineum'];
    $perineum = "";
    foreach($PERINEUM as $value) {
        $perineum .= $value . ", ";  
    }
    $perineum2 = substr($perineum, 0, -2);
    $VAGINA = $_POST['vagina'];
        $vagina = "";
    foreach($VAGINA as $value) {
        $vagina .= $value . ", ";  
    }
    $vagina2 = substr($vagina, 0, -2);
    $CERVIX = $_POST['cervix'];
        $cervix = "";
    foreach($CERVIX as $value) {
        $cervix .= $value . ", ";  
    }
    $cervix2 = substr($cervix, 0, -2);
    $CONSISTENCY = $_POST['consistency'];
        $consistency = "";
    foreach($CONSISTENCY as $value) {
        $consistency .= $value . ", ";  
    }
    $consistency2 = substr($consistency, 0, -2);
    $POSITION = $_POST['position'];
        $position = "";
    foreach($POSITION as $value) {
        $position .= $value . ", ";  
    }
    $position2 = substr($position, 0, -2);
    $SIZE = $_POST['size'];
        $size = "";
    foreach($SIZE as $value) {
        $size .= $value . ", ";  
    }
    $size2 = substr($size, 0, -2);
    $mass = $_POST['mass'];
    $uterinedepth = $_POST['uterinedepth'];
    $ADNEXA = $_POST['adnexa'];
        $adnexa = "";
    foreach($ADNEXA as $value) {
        $adnexa .= $value . ", ";  
    }
    $adnexa2 = substr($adnexa, 0, -2);
    
    //Risk for Violence
    $RISKS = $_POST['risks'];
    $risks = "";
    foreach($RISKS as $value) {
        $risks .= $value . ", ";  
    }
    $risks2 = substr($risks, 0, -2);
    $referredrisks = $_POST['referredrisks']. ' - ' .$_POST['risksothers'];
    
    $user_id=$_SESSION['user_id'];
    $year = date("Y", strtotime("+8 HOURS"));
    date_default_timezone_set('Asia/Manila');
    $month = date("M", strtotime("+8 HOURS"));
    $date_time=date("F j, Y - g:i a");
    
    require '../require/config.php';
    $query = $conn->query("SELECT * FROM `patient` WHERE `patient_id` = '$patient_id'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $patient_name = $fetch['patient_name'];
    
    $remarks = "Added $patient_name to Family Planning Assessment";

    require '../require/config.php';
    
    $conn->query("INSERT INTO `medical_history` VALUES('', '$family_planning_id', '$patient_id', '$heent', '$chestheart', '$abdomen', '$genital', '$extremities', '$skin', '$history')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `obstetrical_history` VALUES('', '$family_planning_id', '$patient_id', '$pregnancies', '$fullterm', '$premature', '$abortions', '$livingchildren', '$dateoflastdelivery ', '$typeoflastdelivery ', '$pastmenstrualperiod', '$lastmenstrualperiod', '$dcmenstrualbleeding', '$history2')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `sti_risks` VALUES('', '$family_planning_id', '$patient_id', '$stirisk', '$forwomen', '$formen')") or die(mysqli_error());
    
    $conn->query("INSERT INTO `physical_examination` VALUES('', '$family_planning_id', '$patient_id', '$bp', '$weight', '$height', '$pr', '$conjuntiva', '$neck', '$breast', '$thorax', '$abdomen2', '$extremities2')") or die(mysqli_error());

    $conn->query("INSERT INTO `pelvic_examination` VALUES ('', '$family_planning_id', '$patient_id', '$perineum2', '$vagina2', '$cervix2', '$consistency2', '$position2', '$size2', '$mass', '$uterinedepth', '$adnexa2')")or die(mysqli_error());

    $conn->query("INSERT INTO `risk_for_vaw` VALUES('', '$family_planning_id', '$patient_id', '$risks2', '$referredrisks')") or die(mysqli_error());
    
    $conn->query("UPDATE `family_planning` SET `status` = 'Assessed' WHERE `family_planning_id` = '$family_planning_id' && `patient_id` = '$patient_id'") or die(mysqli_error());
    
    $conn->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date_time')") or die(mysqli_error());
    
    }
?>
