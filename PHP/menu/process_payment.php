<?php
session_start();

// Database connection (adjust with your DB credentials)
include('../config-db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $paymentMethod = $_POST['payment_method'];
    
    // Calculate total price from the cart
    $totalPrice = array_sum(array_column($_SESSION['cart'], 'price'));

    // Insert order details into the 'orders' table
    $sql = "INSERT INTO orders (name, phone, address, payment_method, total_price) 
            VALUES ('$name', '$phone', '$address', '$paymentMethod', '$totalPrice')";

    if (mysqli_query($conn, $sql)) {
        // Get the last inserted order ID
        $orderId = mysqli_insert_id($conn);

        // Insert ordered items into the 'order_items' table
        foreach ($_SESSION['cart'] as $id => $item) {
            $foodName = $item['name'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $total = $item['quantity'] * $item['price'];

            $sqlItem = "INSERT INTO order_items (order_id, food_name, quantity, price, total) 
                        VALUES ('$orderId', '$foodName', '$quantity', '$price', '$total')";
            mysqli_query($conn, $sqlItem);
        }

        // Clear the cart after saving the order
        unset($_SESSION['cart']);

        echo '<p>Thank you for your order, ' . $name . '!</p>';
        echo '<p>Your order has been successfully placed. An admin will review your order.</p>';
    } else {
        echo '<p>Error: Unable to process your order. Please try again later.</p>';
    }
}
?>
