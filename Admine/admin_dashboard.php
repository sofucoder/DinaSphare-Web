<?php
session_start();
include('../PHP/config-db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .admin-container {
            margin-top: 50px;
        }
        .card {
            transition: 0.3s;
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-icon {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container admin-container">
    <h2 class="text-center text-primary mb-4">Admin Dashboard</h2>
    
    <div class="row">
        <!-- Manage Food Items -->
        <div class="col-md-4 mb-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="card-icon fas fa-utensils"></i>
                    <h5 class="card-title">Manage Food</h5>
                    <p class="card-text">Add, edit, or delete food items.</p>
                    <a href="add_food_item.php" class="btn btn-primary">Go to Food Management</a>
                </div>
            </div>
        </div>

        <!-- View Orders -->
        <div class="col-md-4 mb-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="card-icon fas fa-receipt"></i>
                    <h5 class="card-title">View Orders</h5>
                    <p class="card-text">Check customer orders and update status.</p>
                    <a href="admin_orders.php" class="btn btn-success">Go to Orders</a>
                </div>
            </div>
        </div>

<!-- Manage Tables -->
<div class="col-md-4 mb-3">
    <div class="card text-center p-4">
        <div class="card-body">
            <i class="card-icon fas fa-chair"></i>
            <h5 class="card-title">Manage Tables</h5>
            <p class="card-text">Check table reservations and availability.</p>
            
            <!-- Correct file paths -->
            <a href="table/admin-reservations.php" class="btn btn-warning">View Reservations</a>
            <a href="table/admin_add_tables.php" class="btn btn-primary mt-2">Add Tables</a>
        </div>
    </div>
</div>


        <!-- View Feedback -->
<!-- View Feedback -->
<div class="col-md-4 mb-3">
    <div class="card text-center p-4">
        <div class="card-body">
            <i class="card-icon fas fa-comments"></i>
            <h5 class="card-title">Customer Feedback</h5>
            <p class="card-text">View customer feedback and respond.</p>
            
            <!-- Correct file paths -->
            <a href="feedback/admin_feedback.php" class="btn btn-info">View Feedback</a>
           
        </div>
    </div>
</div>


        <!-- Logout Button -->
        <div class="col-md-4 mb-3">
            <div class="card text-center p-4">
                <div class="card-body">
                    <i class="card-icon fas fa-sign-out-alt"></i>
                    <h5 class="card-title">Logout</h5>
                    <p class="card-text">Log out from the admin panel securely.</p>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap & Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
