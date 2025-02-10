<?php
session_start();
include('../PHP/config-db.php'); // Include your database connection

// Sign Up Process
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Hash the password before saving it to the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the username or email already exists
    $query = "SELECT * FROM admins WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $error = "Username or Email already taken.";
    } else {
        // Insert new admin into the database
        $insertQuery = "INSERT INTO admins (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header('Location: #signin-form');
            exit();
        } else {
            $error = "Error creating account. Please try again.";
        }
    }
}

// Sign In Process
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the admin exists
    $query = "SELECT * FROM admins WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header('Location: admin_dashboard.php');
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login/Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px;
            margin-top: 50px;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Admin Login / Sign Up</h2>

    <!-- Error Message -->
    <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="signin-tab" href="javascript:void(0);" onclick="toggleTab('signin')">Sign In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="signup-tab" href="javascript:void(0);" onclick="toggleTab('signup')">Sign Up</a>
        </li>
    </ul>

    <!-- Sign In Form -->
    <div class="tab-content" id="signin-form">
        <form method="POST">
            <div class="mb-3">
                <label for="signin-username" class="form-label">Username</label>
                <input type="text" class="form-control" id="signin-username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="signin-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="signin-password" name="password" required>
            </div>
            <button type="submit" name="signin" class="btn btn-primary w-100">Sign In</button>
        </form>
    </div>

    <!-- Sign Up Form -->
    <div class="tab-content" id="signup-form">
        <form method="POST">
            <div class="mb-3">
                <label for="signup-username" class="form-label">Username</label>
                <input type="text" class="form-control" id="signup-username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="signup-email" class="form-label">Email</label>
                <input type="email" class="form-control" id="signup-email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="signup-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="signup-password" name="password" required>
            </div>
            <button type="submit" name="signup" class="btn btn-success w-100">Sign Up</button>
        </form>
    </div>
</div>

<!-- Bootstrap & JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Toggle between Sign In and Sign Up forms
    function toggleTab(tab) {
        document.getElementById('signin-tab').classList.remove('active');
        document.getElementById('signup-tab').classList.remove('active');
        document.getElementById('signin-form').classList.remove('active');
        document.getElementById('signup-form').classList.remove('active');
        
        if (tab === 'signin') {
            document.getElementById('signin-tab').classList.add('active');
            document.getElementById('signin-form').classList.add('active');
        } else {
            document.getElementById('signup-tab').classList.add('active');
            document.getElementById('signup-form').classList.add('active');
        }
    }
</script>

</body>
</html>
