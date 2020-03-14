<div class="tyearly reporttype" style="display: none;">
    <label class="text text-danger ">Per Year</label>
    <table id="consultationtable" class="table table-bordered table-condensed nowrap" width="100%">
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
            $query = $conn->query("SELECT year, count(*) as count FROM `consultation` group by year order by count DESC") or die(mysqli_error());
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
    <?php require 'require/footerreport.php'?>
</div>