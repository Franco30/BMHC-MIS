<div class="stackedareamonth stackedcolmonth splinemonth colpatienttype reporttype" style="display: none;">
<?php 
require 'require/config.php';
$query1 = $conn->query("select count(*) as total from `referral` where referral.age <= 15 && referral.year = '$year'") or die(mysqli_error());
$fetch1 = $query1->fetch_array();

$query2 = $conn->query("select count(*) as total from `referral` where referral.age >= 16 && referral.year = '$year'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();

$query3 = $conn->query("select count(*) as total from `referral` where referral.year = '$year'") or die(mysqli_error());
$fetch3 = $query3->fetch_array();

$percentchild = ($fetch1['total']/$fetch3['total']) * 100;
$percentadult = ($fetch2['total']/$fetch3['total']) * 100;

?>
    <hr>
    <div class="table-responsive">
        <table class="table table-condensed">
            <thead>
                <tr class="warning">
                    <th>
                        <center>Patient</center>
                    </th>
                    <th><center>Jan</center></th>
                    <th><center>Feb</center></th>
                    <th><center>Mar</center></th>
                    <th><center>Apr</center></th>
                    <th><center>May</center></th>
                    <th><center>June</center></th>
                    <th><center>July</center></th>
                    <th><center>Aug</center></th>
                    <th><center>Sep</center></th>
                    <th><center>Oct</center></th>
                    <th><center>Nov</center></th>
                    <th><center>Dec</center></th>
                    <th><center>Percentage</center></th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <th><center>Adult</center></th>
                    <td><center><?php echo $a1['total']?></center></td>
                    <td><center><?php echo $a2['total']?></center></td>
                    <td><center><?php echo $a3['total']?></center></td>
                    <td><center><?php echo $a4['total']?></center></td>
                    <td><center><?php echo $a5['total']?></center></td>
                    <td><center><?php echo $a6['total']?></center></td>
                    <td><center><?php echo $a7['total']?></center></td>
                    <td><center><?php echo $a8['total']?></center></td>
                    <td><center><?php echo $a9['total']?></center></td>
                    <td><center><?php echo $a10['total']?></center></td>
                    <td><center><?php echo $a11['total']?></center></td>
                    <td><center><?php echo $a12['total']?></center></td>
                    <td><center><strong><?php echo number_format($percentadult)?>%</strong></center> </td>
                </tr>
                <tr class="info">
                    <th><center>Children</center></th>
                    <td><center><?php echo $c1['total']?></center></td>
                    <td><center><?php echo $c2['total']?></center></td>
                    <td><center><?php echo $c3['total']?></center></td>
                    <td><center><?php echo $c4['total']?></center></td>
                    <td><center><?php echo $c5['total']?></center></td>
                    <td><center><?php echo $c6['total']?></center></td>
                    <td><center><?php echo $c7['total']?></center></td>
                    <td><center><?php echo $c8['total']?></center></td>
                    <td><center><?php echo $c9['total']?></center></td>
                    <td><center><?php echo $c10['total']?></center></td>
                    <td><center><?php echo $c11['total']?></center></td>
                    <td><center><?php echo $c12['total']?></center></td>
                    <td><center><strong><?php echo number_format($percentchild)?>%</strong></center></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
require 'require/config.php';
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
$find = $query->fetch_array();
$query = $conn->query("SELECT count(*) as total FROM `referral` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<hr>
<h4>Total Referral for the Year <?php echo $year. ' : <strong> ' .$fetch['total'].' Patients</strong>'?></h4> <hr>
<small>Approved By:</small>
<br><br>
<h3><?php echo $find['fullname']?></h3>
<small><?php echo $find['position']?></small>
</div>
