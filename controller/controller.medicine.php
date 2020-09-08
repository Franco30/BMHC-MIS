<?php

    require_once '../model/model.medicine.php';
    $db = new Database();

if(isset($_POST['action']) && $_POST['action'] == "view"){
        $output = '';
        $data = $db->read();
        if($db->totalRowCount() > 0){
            $output .= '<div class="table-responsive"><table id="medicinetable" class="table table-hover datatable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Medicine Stock</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($data as $row) {
                $output .= '<tr>
                <td>'.$row['medicine_name'].'</td>
                <td>'.$row['medicine_type'].'</td>
                <td>'.$row['medicine_category'].'</td><td class="text-center">';
                if($row['running_balance']<=15){
                    $output .='<span style="color:red">'.$row['running_balance'].'</span>';
                }
                if($row['running_balance']>=16){
                    $output .='<span>'.$row['running_balance'].'</span>';
                }
                if($row['running_balance'] > 1){
                    $output .=' pcs.';
                }
                else {
                    $output .='<span style="color:red"> pc.</span></td>';
                }
                
                $output .='<td class="text-center">';
                
                if($row['running_balance']<=15){
                    $output .='<span class="badge badge-danger animated infinite pulse" style="animation-duration:.8s;">Reorder</span>';
                }
                if($row['running_balance']>=16){
                    $output .='<span class="badge badge-info">Average</span></td>';
                }
                
                $output .='<td class="text-center">        
                <a href="#" title="Edit" class="btn btn-sm btn-info editBtn" data-toggle="modal" data-target="#editmedicine" id="'.$row['medicine_id'].'">UPDATE</a>
            </td></tr>';
            }
            $output .= '</tbody></table></div>';
            echo $output;
        }
        else {
            echo '<h3 class="text-center text-secondary mt-5">No any user present in the database!</h3>';
        }
     }

if(isset($_POST['medicine_name']) && $_POST['medicine_type']){
    $medicine_name = $_POST['medicine_name'];
    $medicine_type = $_POST['medicine_type'];
    
    $get_medicine_name = $db->checkmedicine($medicine_name,$medicine_type);
        if($get_medicine_name['count'] > 0 ){
            echo 1;
        } else {
            echo 0;
        }
    
}

if(isset($_POST['action']) && $_POST['action'] == "insert"){
    $medicine_name = $_POST['medicine_name'];
    $medicine_type = $_POST['medicine_type'];
    $medicine_category = $_POST['medicine_category'];
    
    $db->insert($medicine_name,$medicine_type,$medicine_category);
}

if(isset($_POST['edit_id'])){
    $id = $_POST['edit_id'];
    
    $row = $db->getUserById($id);
    echo json_encode($row);
}

if(isset($_POST['action']) && $_POST['action'] == "update"){
    $id = $_POST['id'];
    $studentname = $_POST['studentname'];
    $fbaccount = $_POST['fbaccount'];
    $instagramaccount = $_POST['instagramaccount'];
    $beautypercentage = $_POST['beautypercentage'];
    
    $db->update($id,$studentname,$fbaccount,$instagramaccount,$beautypercentage);
}

if(isset($_POST['del_id'])){
    $id = $_POST['del_id'];
    
    $db->delete($id);
}

if(isset($_POST['info_id'])){
    $id = $_POST['info_id'];
    
    $row = $db->getUserById($id);
    echo json_encode($row);
}

if(isset($_GET['export']) && $_GET['export'] == "excel"){
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=users.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    $data = $db->read();
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Username</th><th>Password</th><th>User Role</th></tr>';
    
    foreach ($data as $row) {
        echo '<tr>
                <td>'.$row['userid'].'</td>
                <td>'.$row['username'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['userrole'].'</td>
            </tr>';
    }
    echo '</table>';
}

?>