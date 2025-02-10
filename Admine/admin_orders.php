<?php
// Include database connection
include('../PHP/config-db.php');

// Fetch all orders with status and seen_date
$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Orders List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Admin Order List</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Payment Method</th>
                        <th>Total</th>
                        <th>Date</th>
                        <th>Status</th> <!-- Added Status column -->
                        <th>View Items</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if any orders exist
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Check if the order has been seen by the admin
                            $status = $row['status'] == 'seen' ? 'Seen' : 'Not Seen';
                            $seenDate = $row['status'] == 'seen' ? 'on ' . $row['seen_date'] : ''; // Display date if seen
                            
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['phone'] . '</td>';
                            echo '<td>' . $row['address'] . '</td>';
                            echo '<td>' . $row['payment_method'] . '</td>';
                            echo '<td>' . number_format($row['total_price'], 2) . ' Birr</td>';
                            echo '<td>' . $row['order_date'] . '</td>';
                            echo '<td>' . $status . ' ' . $seenDate . '</td>'; // Display status and seen date
                            echo '<td><a href="view_order_items.php?order_id=' . $row['id'] . '" class="btn btn-info btn-sm">View Items</a></td>';
                            echo '</tr>';
                        }
                    } else {
                        // Moved the "Order not found" message to the bottom
                        echo '<tr><td colspan="9" class="text-center text-danger">No orders found</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for dropdowns, modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
