<?php
// Database configuration file (config/db_connect.php)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dinesphere";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
