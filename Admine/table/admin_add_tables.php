<?php
include '../../PHP/config-db.php';

$message = ""; // Message variable for user feedback

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $table_number = $_POST['table_number'];

    // Check if the table already exists
    $checkQuery = "SELECT * FROM tables WHERE table_number = '$table_number'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $message = "<div class='alert alert-danger'>Error: Table $table_number is already added or booked.</div>";
    } else {
        // Insert table number into the database
        $query = "INSERT INTO tables (table_number, status) VALUES ('$table_number', 'available')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $message = "<div class='alert alert-success'>Table $table_number added successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger'>Error adding table. Please try again.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Table</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Table</h2>

    <?= $message; ?> <!-- Display success/error messages -->

    <form action="admin_add_tables.php" method="post">
        <div class="mb-3">
            <label for="table_number" class="form-label">Table Number:</label>
            <input type="number" name="table_number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Add Table</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
