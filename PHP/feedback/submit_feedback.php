<?php
include '../config-db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert feedback data into the database
    $query = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    
    if (mysqli_query($conn, $query)) {
        // Success message
        echo "<div class='alert alert-success'>Thank you! Your feedback has been submitted.</div>";
    } else {
        // Error message
        echo "<div class='alert alert-danger'>Error submitting feedback. Please try again later.</div>";
    }
}
?>
