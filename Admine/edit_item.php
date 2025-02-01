<?php
// Include database connection
include('db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing item details from the database
    $sql = "SELECT * FROM food_menu WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $item = $stmt->fetch();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Update item details if form is submitted
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $cookingtime = $_POST['cookingtime'];

        // Update query
        $update_sql = "UPDATE food_menu SET name = ?, price = ?, description = ?, cookingtime = ? WHERE id = ?";
        $stmt = $pdo->prepare($update_sql);
        $stmt->execute([$name, $price, $description, $cookingtime, $id]);

        // Redirect to the menu page after updating
        header('Location: add_food_item.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS for Styling -->
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .btn-back {
            background-color: #6c757d;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Edit Menu Item</h2>
        <form method="POST">
            <div class="form-group">
                <label for="name">Item Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $item['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo $item['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" required><?php echo $item['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="cookingtime">Cooking Time</label>
                <input type="text" class="form-control" name="cookingtime" value="<?php echo $item['cookingtime']; ?>" required>
            </div>
 
            <button type="submit" class="btn btn-primary btn-block">Update Item</button>
        </form>
        <a href="add_food_item.php" class="btn-back">Back to Menu</a>
    </div>

    <!-- Bootstrap JS and jQuery (Optional for enhanced features like modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
