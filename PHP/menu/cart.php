<?php
session_start();

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">';

echo '<style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .btn {
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        h2, h3 {
            color: #007bff;
        }
        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .empty-cart {
            color: #868e96;
            font-size: 1.2rem;
        }
    </style>';


if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo '<div class="container mt-5">';
    echo '<h2>Your Cart</h2>';
    echo '<table class="table table-bordered table-striped">';
    echo '<thead><tr><th>Food</th><th>Price</th><th>Quantity</th><th>Total</th><th>Actions</th></tr></thead>';
    echo '<tbody>';

    $totalPrice = 0;
    foreach ($_SESSION['cart'] as $id => $item) {
        $total = $item['price'] * $item['quantity'];
        $totalPrice += $total;

        echo '<tr>';
        echo '<td>' . $item['name'] . '</td>';
        echo '<td>$' . $item['price'] . '</td>';
        echo '<td>' . $item['quantity'] . '</td>';
        echo '<td>$' . $total . '</td>';
        echo '<td><a href="remove_from_cart.php?id=' . $id . '" class="btn btn-danger btn-sm">Remove</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '<h3 class="total-price">Total Price: $' . $totalPrice . '</h3>';
    
    // Proceed to Payment
    echo '<div class="d-flex justify-content-between mt-4">';
    echo '<a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="container mt-5">';
    echo '<p class="empty-cart">Your cart is empty. Add some items to proceed.</p>';
    echo '</div>';
}
?>
