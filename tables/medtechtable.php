<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="medtechtable" class="table datatable" width="100%">
    <thead>
        <tr class="warning">
            <th></th>
            <th>Medtech ID</th>
            <th>Medtech Name</th>
            <th>FB Account</th>
            <th>Instagram Account</th>
            <th>Beauty Percentage</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $query = $conn->query("select * from `chicks` order by `beautypercentage` DESC") or die(mysqli_error());
    while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td><input type="checkbox" name="chicks_id[]" class="delete_chicks" value="<?php echo $fetch["chicks_id"]; ?>" /></td>
            <td><?php echo $fetch['chicks_id']?></td>
            <td><?php echo $fetch['chicksname']?></td>
            <td><?php echo $fetch['fblink']?></td>
            <td><?php echo $fetch['instagram']?></td>
            <td><?php echo $fetch['beautypercentage']?></td>
            <td>
                <button data-target="#editmedtech<?php echo $fetch['chicks_id']; ?>" data-toggle="modal" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> UPDATE</button>
                <?php require('../modals/editmedtech.php'); ?>
            </td>
        </tr>
        <?php
    }
    $conn->close();
        ?>
    </tbody>
</table>
<?php
}
?>