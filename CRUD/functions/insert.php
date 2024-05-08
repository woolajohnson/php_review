<?php
require('../includes/db_connect.php');

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$number = mysqli_real_escape_string($con, $_POST['number']);

$query = "INSERT INTO crud (name, email, number) VALUES ('$name', '$email', '$number')";
$result = mysqli_query($con, $query);
if($result) {
    echo "User Added Successfully.";
} else {
    echo "There is a problem, please try again.";
}
?>