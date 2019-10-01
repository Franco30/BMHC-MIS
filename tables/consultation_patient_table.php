<?php
require '../require/config.php';
if(isset($_POST['show'])){
?>
<table id="prenatalpatienttable" class="table datatable">
    <thead>
        <tr>
            <th><center>Patient Name</center></th>
            <th><center>Age</center></th>
            <th><center>Gender</center></th>
            <th><center>Complaints</center></th>
            <th><center>Diagnosis</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><center>Consolaction Escobar</center></td>
            <td><center>20</center></td>
            <td><center>Female</center></td>
            <td><center>Headachce</center></td>
            <td><center></center></td>
            <td><center><a href="#" class="btn btn-md btn-default">View <span class = "badge">4</span></a></center></td>
        </tr>
    </tbody>
</table>
<?php
}
?>