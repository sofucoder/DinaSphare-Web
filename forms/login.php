<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check user credentials
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $storedPassword);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        // Check if the password matches the hashed password in the database
        if (password_verify($password, $storedPassword)) {
            $_SESSION['user'] = $email;
            header("Location:../dashboard.html"); // Redirect to a dashboard page
            exit(); // Ensure no further code is executed
        } else {
            echo "Invalid email or password!";
        }
    } else {
        echo "Invalid email or password!";
    }

    $stmt->close();
    $conn->close();
}
?>

