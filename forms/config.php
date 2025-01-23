<?php
$host = "localhost";
$user = "root";  // Default for WAMP
$pass = "";      // Default is empty for WAMP
$dbname = "dinesphere_db";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to the database!";
}

?>
