<?php
require 'require/config.php';
?>
<div class="table-responsive">
<table id="tetanustoxoidtable" class="table datatable">
    <thead>
        <tr class="warning">
            <th><center>TT 1</center></th>
            <th><center>TT 2</center></th>
            <th><center>TT 3</center></th>
            <th><center>TT 4</center></th>
            <th><center>TT 5</center></th>
            <th><center>TT L</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `tetanus_toxoid` WHERE `child_id` = '$_GET[child_id]' order by `child_id` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        
        ?>
        <tr>
            <td><center><?php echo $fetch['tt1']?></center></td>
            <td><center><?php echo $fetch['tt2']?></center></td>
            <td><center><?php echo $fetch['tt3']?></center></td>
            <td><center><?php echo $fetch['tt4']?></center></td>
            <td><center><?php echo $fetch['tt5']?></center></td>
            <td><center><?php echo $fetch['ttl']?></center></td>
            <td><center><button type="button" class="btn btn-sm btn-info">UPDATE</button></center></td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
</div>
<?php

?>