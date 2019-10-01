<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalreferralpatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>From</center></th>
            <th><center>To</center></th>
            <th><center>Patient Name</center></th>
            <th><center>Tetanus Toxoid</center></th>
            <th><center>Complaints</center></th>
            <th><center>Referred by</center></th>
            <th><center>Date</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><center>Mansilingan Health Center</center></td>
            <td><center>City Health Office</center></td>
            <td><center>Ricardo Dalisay</center></td>
            <td><center>TT3</center></td>
            <td><center>High Fever</center></td>
            <td><center>Emily Huelanda</center></td>
            <td><center>September 1, 2019</center></td>
            <td><center><button class="btn btn-sm btn-info" type="button">View More</button></center></td>
        </tr>
    </tbody>
</table>
<?php
}
?>