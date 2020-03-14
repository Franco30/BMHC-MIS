<div class="tmonthly reporttype" style="display: none;">
    <label class="text text-danger ">Per Month</label>
    <table id="family_planningmonthlytable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Month</th>
                <th>Total Count</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'require/config.php';
            $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            $query1 = $conn->query("SELECT count(*) as permonth FROM `family_planning` where `year` = '$year'") or die(mysqli_error());
            $fetch1 = $query1->fetch_array();
            $query = $conn->query("SELECT month, count(*) as count FROM `family_planning` where `year` = '$year' group by month order by count DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $permonth = ($fetch['count']/$fetch1['permonth']) * 100;
            ?>
            <tr>
                <td><?php echo $fetch['month']?></td>
                <td><?php echo $fetch['count']?></td>
                <td><?php echo number_format($permonth)?>%</td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
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
$query = $conn->query("SELECT count(*) as total FROM `family_planning` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<hr>
<h4>Total Family Planning for the Year <?php echo $year. ' : <strong> ' .$fetch['total'].' Patients</strong>'?></h4> <hr>
<small>Approved By:</small>
<br><br>
<h3><?php echo $find['fullname']?></h3>
<small><?php echo $find['position']?></small>
</div>
