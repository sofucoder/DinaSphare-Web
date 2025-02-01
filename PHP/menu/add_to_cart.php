<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the food details from the POST request
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // If the cart doesn't exist in the session, create it
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the item already exists in the cart
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1; // Increment quantity if item already in cart
    } else {
        $_SESSION['cart'][$id] = array(
            'name' => $name,
            'price' => $price,
            'quantity' => 1
        );
    }

    // Redirect to the cart page
    header("Location: cart.php");
    exit;
}
?>

