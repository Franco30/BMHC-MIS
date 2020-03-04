<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bmhc";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  //echo "Connected successfully";
//$sql = "SELECT remarks, follow_up_date_time as start, backgroundColor FROM `prenatal_follow_up`";
$sql = "SELECT follow_up_id as id, patient_name as title, follow_up_date_time as start, backgroundColor FROM patient,prenatal_follow_up WHERE patient.patient_id = prenatal_follow_up.patient_id";
$result = mysqli_query($conn,$sql); 
$myArray = array();
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;
    }
} 
else 
{
    echo "0 results";
}
?>
<script>
  $(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: new Date(),
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: <?php echo json_encode($myArray); ?>
    });
  });
</script>
