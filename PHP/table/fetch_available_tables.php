<?php
include '../config-db.php'; // Include database connection

header('Content-Type: application/json'); // Ensure JSON response

// Fetch available tables (only those not booked)
$query = "SELECT table_number FROM tables WHERE status = 'available'";
$result = mysqli_query($conn, $query);

$tables = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tables[] = $row['table_number'];
}

// Return the table numbers as JSON
echo json_encode($tables);
?>
