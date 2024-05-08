<?php
require('../includes/db_connect.php');

$userId = $_POST['userId'];
$query = "SELECT * FROM crud WHERE id='$userId'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $json_data = json_encode($row);
    echo $json_data;
} else {
    echo "No available records.";
}
?>