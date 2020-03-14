<div class="1yearly reporttype" style="display: none;">
    <label class="text text-danger ">Per Year</label>
    <table id="patienttable" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Year</th>
                <th>Total Count</th>
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
            $query = $conn->query("SELECT year, count(*) as count FROM `patient` group by year order by count DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td><?php echo $fetch['count']?></td>
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
$query = $conn->query("SELECT count(*) as total FROM `patient` where `year` = '$year'") or die(mysqli_error());
$fetch = $query->fetch_array();
?>
<hr>
<h4>Total Patient for the Year <?php echo $year. ' : <strong> ' .$fetch['total'].' Patients</strong>'?></h4> <hr>
<small>Approved By:</small>
<br><br>
<h3><?php echo $find['fullname']?></h3>
<small><?php echo $find['position']?></small>
</div>