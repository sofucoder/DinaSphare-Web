<?php
session_start();
include '../../PHP/config-db.php';

// Check if 'delete' parameter is set to delete a feedback
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Delete the feedback from the database
    $delete_query = "DELETE FROM feedback WHERE id = '$delete_id'";
    if (mysqli_query($conn, $delete_query)) {
        // Store success message in session
        $_SESSION['message'] = "Feedback deleted successfully!";
        $_SESSION['message_type'] = "success";
    } else {
        // Store error message in session
        $_SESSION['message'] = "Error deleting feedback!";
        $_SESSION['message_type'] = "danger";
    }
    // Redirect to avoid resubmitting the form on refresh
    header("Location: admin_feedback.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Feedback</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">User Feedback</h2>

    <!-- Display success or error message if it exists in the session -->
    <?php
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $message_type = $_SESSION['message_type'];
        echo "<div class='alert alert-$message_type'>$message</div>";
        unset($_SESSION['message']); // Remove message after displaying it
        unset($_SESSION['message_type']); // Remove message type after displaying it
    }
    ?>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th> <!-- Action column for delete -->
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM feedback ORDER BY created_at DESC";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['subject']) ?></td>
                        <td><?= htmlspecialchars($row['message']) ?></td>
                        <td><?= htmlspecialchars($row['created_at']) ?></td>
                        <td>
                            <!-- Delete button, links to this page with the delete ID -->
                            <a href="?delete_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
