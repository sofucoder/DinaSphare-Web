<?php
// Include the database connection file
include '../../PHP/config-db.php';

// Check if the ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the query to delete the subscriber
    $delete_query = "DELETE FROM newsletter WHERE id = '$id'";

    // Execute the query
    if (mysqli_query($conn, $delete_query)) {
        echo "<div class='alert alert-success'>Subscriber deleted successfully!</div>";
        header("Location: admin_subscribers.php"); // Redirect back to the admin page
        exit();
    } else {
        echo "<div class='alert alert-danger'>Error deleting subscriber!</div>";
    }
} else {
    echo "<div class='alert alert-danger'>No subscriber ID provided!</div>";
}
?>
