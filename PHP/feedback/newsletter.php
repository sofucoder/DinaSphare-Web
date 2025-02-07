<?php
// Include the database connection file
include '../../PHP/config-db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the email from the form
    $email = $_POST['email'];

    // Validate the email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare the SQL query to insert the email into the database
        $query = "INSERT INTO newsletter (email) VALUES ('$email')";
        
        // Execute the query
        if (mysqli_query($conn, $query)) {
            echo "success"; // Return success message
        } else {
            echo "error"; // Return error message if the query fails
        }
    } else {
        echo "invalid_email"; // Return an invalid email message
    }
}
?>
