<?php
require('../includes/db_connect.php');

$userId = $_POST['userId'];
$updateName = $_POST['updateName'];
$updateEmail = $_POST['updateEmail'];
$updateNumber = $_POST['updateNumber'];

$query = "UPDATE crud set name = '$updateName', email = '$updateEmail', number = '$updateNumber' WHERE id='$userId'";
$result = mysqli_query($con, $query);
if ($result) {
    echo '<div class="alert alert-success" role="alert">User updated successfully.</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">No available records.</div>';
}
?>