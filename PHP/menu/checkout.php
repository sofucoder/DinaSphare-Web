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
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2, h3 {
            color: #007bff;
        }
        .form-control {
            border-radius: 8px;
            box-shadow: none;
            transition: box-shadow 0.3s ease;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn {
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 16px;
        }
        .total-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e83e8c;
        }
        .empty-cart {
            color: #868e96;
            font-size: 1.2rem;
            text-align: center;
        }
        .back-to-menu {
            text-align: center;
            margin-top: 20px;
        }
    </style>';

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    echo '<div class="container">';
    echo '<p class="empty-cart">Your cart is empty. <a href="index.php" class="btn btn-info">Go back to the menu</a>.</p>';
    echo '</div>';
    exit;
}

echo '<div class="container">';
echo '<h2 class="text-center">Checkout</h2>';
echo '<form action="process_payment.php" method="POST">';

echo '<div class="mb-3">';
echo '<label for="name" class="form-label">Full Name</label>';
echo '<input type="text" class="form-control" id="name" name="name" required>';
echo '</div>';

echo '<div class="mb-3">';
echo '<label for="phone" class="form-label">Phone Number</label>';
echo '<input type="text" class="form-control" id="phone" name="phone" required>';
echo '</div>';

echo '<div class="mb-3">';
echo '<label for="address" class="form-label">Delivery Address</label>';
echo '<textarea class="form-control" id="address" name="address" required></textarea>';
echo '</div>';

echo '<div class="mb-3">';
echo '<label for="payment_method" class="form-label">Payment Method</label>';
echo '<select class="form-control" id="payment_method" name="payment_method" required>';
echo '<option value="credit_card">Credit Card</option>';
echo '<option value="paypal">PayPal</option>';
echo '<option value="cash_on_delivery">Cash on Delivery</option>';
echo '</select>';
echo '</div>';

echo '<h3 class="total-amount text-center">Total Amount: $' . array_sum(array_column($_SESSION['cart'], 'price')) . '</h3>';

echo '<button type="submit" class="btn btn-success w-100 mt-4">Proceed to Payment</button>';
echo '</form>';
echo '</div>';
?>
