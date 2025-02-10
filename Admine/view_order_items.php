<?php
// Include database connection
include('../PHP/config-db.php');

// Get the order ID from the URL
$orderId = isset($_GET['order_id']) ? $_GET['order_id'] : 0;

if ($orderId > 0) {
    // Fetch the order items
    $sql = "SELECT * FROM order_items WHERE order_id = $orderId";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $orderQuery = "SELECT * FROM orders WHERE id = $orderId";
        $orderResult = mysqli_query($conn, $orderQuery);
        $order = mysqli_fetch_assoc($orderResult);

        // Check if the admin clicked the "Seen" button and update the status
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mark_seen'])) {
            $updateStatusQuery = "UPDATE orders SET status = 'seen', seen_date = NOW() WHERE id = $orderId";
            if (mysqli_query($conn, $updateStatusQuery)) {
                // Reload the page after updating
                header("Location: " . $_SERVER['REQUEST_URI']);
                exit;
            } else {
                echo '<p class="text-danger">Failed to update status. Please try again.</p>';
            }
        }
    } else {
        echo '<p>No items found for this order.</p>';
        exit;
    }
} else {
    echo '<p>Invalid order ID.</p>';
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Order Items</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Order #<?php echo $order['id']; ?> - Items</h2>
        <p><strong>Name:</strong> <?php echo $order['name']; ?></p>
        <p><strong>Phone:</strong> <?php echo $order['phone']; ?></p>
        <p><strong>Address:</strong> <?php echo $order['address']; ?></p>
        <p><strong>Payment Method:</strong> <?php echo $order['payment_method']; ?></p>
        <p><strong>Total Price:</strong> <?php echo number_format($order['total_price'], 2) . ' Birr'; ?></p>
        
        <!-- Show status and date if seen -->
        <p><strong>Status:</strong> <?php echo $order['status'] == 'seen' ? 'Seen on ' . $order['seen_date'] : 'Not Seen'; ?></p>

        <!-- "Seen" button if the order is not already seen -->
        <?php if ($order['status'] !== 'seen'): ?>
            <form method="POST">
                <button type="submit" name="mark_seen" class="btn btn-success">Mark as Seen</button>
            </form>
        <?php endif; ?>

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['food_name'] . '</td>';
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '<td>' . number_format($row['price'], 2) . ' Birr</td>';
                        echo '<td>' . number_format($row['total'], 2) . ' Birr</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
