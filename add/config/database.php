<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'elsie');
define('DB_PASS', 'qwerty1234');
define('DB_NAME', 'php_dev');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die("Connection Faild" . $conn->connect_error );
}


