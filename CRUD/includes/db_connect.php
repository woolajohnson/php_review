<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'php_ajax_bootstrap');

try {
    $con = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>