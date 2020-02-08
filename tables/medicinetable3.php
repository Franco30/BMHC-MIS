<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="medicinetable3" class="table table-hover datatable">
    <thead>
        <tr class="warning">
            <th><center>Name</center></th>
            <th><center>Type</center></th>
            <th><center>Category</center></th>
            <th><center>Medicine Stock</center></th>
            <th><center>Status</center></th>
        </tr>
    </thead>
    <tbody>
        <?php
	        require '../require/config.php';
			$query = $conn->query("SELECT * FROM `medicine` ORDER BY `medicine_id` DESC") or die(mysqli_error());
			while($fetch = $query->fetch_array()){
            ?>
        <tr>
            <td style="width:28%;"><?php echo $fetch['medicine_name']?></td>
            <td><?php echo $fetch['medicine_type']?></td>
            <td><?php echo $fetch['medicine_category']?></td>
            <td><center><?php if ($fetch['running_balance']<=15) 
												echo "<span style='color:red'>".$fetch['running_balance']."</span>"; if ($fetch['running_balance']>=16) 
												echo "<span>".$fetch['running_balance']."</span>"; ?> <?php if($fetch['running_balance'] > 1){ ?> pcs.<?php } else { ?> 
                                                <span style="color:red">pc.</span> <?php } ?></center>
            </td>
            <td><center><?php if ($fetch['running_balance']<=15)echo "<span class='badge badge-danger animated infinite pulse' style='animation-duration:.8s;'>Reorder</span>";
				if ($fetch['running_balance']>=16)echo "<span class='badge badge-info'>Average</span>"
                ?></center></td>
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
