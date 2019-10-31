<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="mstocks" class="table datatable">
    <thead>
        <tr class="warning">
            <th>
                <center>Medicine Name</center>
            </th>
            <th>
                <center>Quantity</center>
            </th>
            <th>
                <center>Date Created</center>
            </th>

        </tr>
    </thead>
    <tbody>
        <?php
        $conn = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `medicine` NATURAL JOIN `medicine_stocks` WHERE medicine_stocks.medicine_id = medicine.medicine_id ORDER BY `medicine_stock_id` DESC") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <tr>
            <td>
                <center><strong><?php echo $fetch['medicine_name']?></strong></center>
            </td>
            <td>
                <center><?php echo $fetch['quantity']?></center>
            </td>
            <td>
                <center><?php echo $fetch['date']?></center>
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
