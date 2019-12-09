<div class="quarterly barquarter splinequarter piequarter dougnutquarter reporttype" style="display: none;">
    <label class="text text-danger ">Per Quarter</label>
    <table id="referraltablereport" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Quarter 1</th>
                <th>Quarter 2</th>
                <th>Quarter 3</th>
                <th>Quarter 4</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'require/config.php';
            require 'chartqueries/referral_quarterly.php'; ?>
            <tr>
                <td><?php echo $q1['total']?></td>
                <td><?php echo $q2['total']?></td>
                <td><?php echo $q3['total']?></td>
                <td><?php echo $q4['total']?></td>
            </tr>
        </tbody>
    </table>
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