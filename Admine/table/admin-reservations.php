<?php
include '../../PHP/config-db.php';

// Handle table removal (if admin clicks "Cancel Reservation")
if (isset($_GET['cancel_id'])) {
    $reservation_id = $_GET['cancel_id'];

    // Fetch the table number before deleting
    $tableQuery = "SELECT table_number FROM reservations WHERE id = $reservation_id";
    $tableResult = mysqli_query($conn, $tableQuery);
    $tableRow = mysqli_fetch_assoc($tableResult);
    $table_number = $tableRow['table_number'];

    // Delete reservation from database
    $deleteQuery = "DELETE FROM reservations WHERE id = $reservation_id";
    mysqli_query($conn, $deleteQuery);

    // Mark the table as available again
    $updateTableQuery = "UPDATE tables SET status = 'available' WHERE table_number = '$table_number'";
    mysqli_query($conn, $updateTableQuery);

    // Redirect back to the reservations page
    header("Location: admin-reservations.php");
    exit();
}

// Fetch all reservations
$query = "SELECT * FROM reservations ORDER BY reservation_date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation List</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
        .table-responsive {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-danger {
            font-size: 14px;
            padding: 5px 10px;
        }
    </style>

    <script>
        function confirmCancel(reservationId) {
            if (confirm("Are you sure you want to cancel this reservation?")) {
                window.location.href = "admin-reservations.php?cancel_id=" + reservationId;
            }
        }
    </script>
</head>
<body>

<div class="container">
    <h2>Reservation List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>People</th>
                    <th>Table Number</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['phone']) ?></td>
                        <td><?= htmlspecialchars($row['date']) ?></td>
                        <td><?= htmlspecialchars($row['time']) ?></td>
                        <td><?= htmlspecialchars($row['people']) ?></td>
                        <td><?= htmlspecialchars($row['table_number']) ?></td>
                        <td><?= htmlspecialchars($row['message']) ?></td>
                        <td class="text-success fw-bold">Booked</td>
                        <td>
                            <button class="btn btn-danger" onclick="confirmCancel(<?= $row['id'] ?>)">Cancel</button>
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
