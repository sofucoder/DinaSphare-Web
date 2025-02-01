<?php
$host = 'localhost'; // Your database host
$dbname = 'dinesphere'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

try {
    // Attempt to create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, output the error message
    echo "Connection failed: " . $e->getMessage();
}
?>
