<?php 
    require '../require/config.php';

     if(isset($_POST['action']) && $_POST['action'] == "view"){
        $output = '';
            $output .= '<div class="table-responsive"><table class="table table-striped table-sm table-bordered">
            <thead>
            <tr class="warning text-center">
                <th><center>Medicine Category</center></th>
                <th><center>Medication & Dosage</center></th>
                <th><center>6 <br> (AM)</center></th>
                <th><center>8 <br> (AM)</center></th>
                <th><center>12 <br> (NN)</center></th>
                <th><center>2 <br> (PM)</center></th>
                <th><center>4 <br> (PM)</center></th>
                <th><center>6 <br> (PM)</center></th>
                <th><center>8 <br> (PM)</center></th>
                <th><center>Quantity</center></th>
                <th><center>Recommendation</center></th>
            </tr>
            </thead>
            <tbody>';
$query = $conn->query("SELECT * FROM `consultation_prescription` WHERE `patient_id` = '$_GET[patient_id]' && `consultation_id` = '$_GET[consultation_id]'") or die(mysqli_error());
while($fetch = $query->fetch_array()){
                $output .= '<tr>
                <td><center><strong>'.$fetch['medicine_category'].'</strong></center></td>
                <td><center><strong>'.$fetch['medname'].'</strong></center></td>
                <td style="font-weight: bold;">'.$fetch['6am'].'</center></td>
                <td style="font-weight: bold;"><center>'.$fetch['8am'].'</center></td>
                <td style="font-weight: bold;"><center>'.$fetch['12nn'].'</center></td>
                <td style="font-weight: bold;"><center>'.$fetch['2pm'].'</center></td>
                <td style="font-weight: bold;"><center>'.$fetch['4pm'].'</center></td>
                <td style="font-weight: bold;"><center>'.$fetch['6pm'].'</center></td>
                <td style="font-weight: bold;"><center>'.$fetch['8pm'].'</center></td>
                <td><center>'.$fetch['qty'].'</center></td>
                <td><center>'.$fetch['recommendation'].'</center></td>';
            }
            $output .= '</tbody></table></div>';
            echo $output;
     }
        else {
            echo '<h3 class="text-center text-secondary mt-5">No any user present in the database!</h3>';
        }

?>