<?php
require '../require/logincheck.php';
$connection = new mysqli("localhost", "root", "", "bmhc") or die(mysqli_error());

$tables = array();
$result = mysqli_query($connection, "SHOW TABLES");
while ($row = mysqli_fetch_row($result)){
    $tables[] = $row[0];
}

$return = '';

foreach ($tables as $table) {
    $result = mysqli_query($connection, "SELECT * FROM ". $table);
    $num_fields = mysqli_num_fields($result);

    $return .= 'DROP TABLE '.$table.';';
    $row2 = mysqli_fetch_row(mysqli_query($connection, 'SHOW CREATE TABLE '.$table));
    $return .= "\n\n".$row2[1].";\n\n";

    for ($i=0;$i<$num_fields;$i++){
        while ($row = mysqli_fetch_row($result)){
            $return .= 'INSERT INTO '.$table.' VALUES(';
            for ($j=0;$j<$num_fields;$j++){
                $row[$j] = addslashes($row[$j]);
                if(isset($row[$j])){$return .= '"' .$row[$j]. '"';} else {$return .= '""';}
                if($j<$num_fields-1){$return .= ',';}
            }
            $return .="); \n";
        }
    }

    $return .="\n\n\n";
}
date_default_timezone_set('Asia/Manila');
$handle = fopen('bmhc'.date('F-j-Y-g-i-a').'.sql','w+');
fwrite($handle, $return);
fclose($handle);
date_default_timezone_set('Asia/Manila');
$date=date("yy-m-d, g:i a");

$time=date("g:i a");
$date2=date("F j, Y");
$today = date("yy-m-d"); 
$user_id=$_SESSION['user_id'];
$remarks = "Successfully Backup the database";

$connection->query("INSERT INTO `db_backup` VALUES('', '$user_id', 'Export', '$today', '$time', 'Successfully Exported Database')") or die(mysqli_error());

$connection->query("INSERT INTO `users_activity_log` VALUES('', '$user_id', '$remarks','$date')") or die(mysqli_error());
$connection->close();

?>
