<?php
require('../includes/db_connect.php');

$query = "SELECT * FROM crud";
$result = mysqli_query($con, $query);
if($result) {
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $json_data = json_encode($data);
    echo $json_data;
} else {
    echo "No available records.";
}
?>