<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Remove the item from the cart
    unset($_SESSION['cart'][$id]);

    // Redirect back to the cart page
    header("Location: cart.php");
    exit;
}
?>