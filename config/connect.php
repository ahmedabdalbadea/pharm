<?php 
$host = 'localhost';
$username = 'root';
$pass = '';
$db_name = 'register';

$conn = new mysqli($host, $username, $pass, $db_name);

if ($conn->connect_error) {
    die('Database error: '. $conn->connect_error);
}



?>