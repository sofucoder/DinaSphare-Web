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
    $totalPrice = array_sum(array_map(function($item) {
        return $item['price'] * $item['quantity'];
    }, $_SESSION['cart']));

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
            $total = $quantity * $price;

            $sqlItem = "INSERT INTO order_items (order_id, food_name, quantity, price, total) 
                        VALUES ('$orderId', '$foodName', '$quantity', '$price', '$total')";
            mysqli_query($conn, $sqlItem);
        }

        // Clear the cart after saving the order
        unset($_SESSION['cart']);

        // Show alert and redirect back to the homepage or cart page
        echo "<script>
                alert('Thank you for your order, $name! Your order has been successfully placed. An admin will review your order.');
                window.location.href = 'cart.php'; // Redirect to cart or home page
              </script>";
    } else {
        echo "<script>
                alert('Error: Unable to process your order. Please try again later.');
                window.location.href = 'cart.php'; // Redirect to cart
              </script>";
    }
}
?>

