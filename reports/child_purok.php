<div class="1colpatientpurok reporttype" style="display: none;">
    <label class="text text-danger ">By Purok</label>
    <table id="patient_childmonthlytable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Name of Purok</th>
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
            $query1 = $conn->query("SELECT count(*) as bypurok FROM `patient_child` where `year` = '$year'") or die(mysqli_error());
            $fetch1 = $query1->fetch_array();
            $query = $conn->query("SELECT purok, count(*) as count FROM `patient_child` where `year` = '$year' group by purok order by count DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $bypurok = ($fetch['count']/$fetch1['bypurok']) * 100;
            ?>
            <tr>
                <td><?php echo $fetch['purok']?></td>
                <td><?php echo $fetch['count']?></td>
                <td><?php echo number_format($bypurok)?>%</td>
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
$query = $conn->query("SELECT count(*) as total FROM `patient_child` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<hr>
<h4>Total Child Patient for the Year <?php echo $year. ' : <strong> ' .$fetch['total'].' Child Patients</strong>'?></h4> <hr>
<small>Approved By:</small>
<br><br>
<h3><?php echo $find['fullname']?></h3>
<small><?php echo $find['position']?></small>
</div>