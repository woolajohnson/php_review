<?php
require('../includes/db_connect.php');

$userId = $_POST['userId'];
$query = "DELETE FROM crud WHERE id='$userId'";
$result = mysqli_query($con, $query);
if($result) {
    echo "Record successfully deleted.";
} else {
    echo "There is some problem!";
}
?>