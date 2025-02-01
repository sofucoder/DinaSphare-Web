<?php
include '../PHP/config-db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];  // Now we use the URL provided in the input field
    $cookingtime = $_POST['cookingtime'];
 

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO food_menu (name, price, description, image, cookingtime) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdssi", $name, $price, $description, $image, $cookingtime);

    if ($stmt->execute()) {
        echo "<script>alert('Food item added successfully!'); window.location.href = 'menu_list.php';</script>";
        header("Location:add_food_item.php");
    } else {
        echo "<script>alert('Error: Could not add food item.');</script>";
    }
    $stmt->close();
    $conn->close();
}
$query = "SELECT * FROM food_menu";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Menu Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Dashboard - Manage Menu</h2>
        
        <!-- Add New Menu Item Form -->
        <h3 class="mt-4">Add New Menu Item</h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Food Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Food Image (URL)</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Enter the image URL" required>
            </div>

            <div class="mb-3">
                <label for="cookingtime" class="form-label">Cooking Time (in minutes)</label>
                <input type="number" class="form-control" id="cookingtime" name="cookingtime" required>
            </div>


            <button type="submit" class="btn btn-primary" name="add_menu">Add Item</button>
        </form>

        <hr>

        <!-- Menu Items Table -->
         <h3 class="mt-5">Existing Menu Items</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Cooking Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo "$" . number_format($row['price'], 2); ?></td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                        <td><?php echo $row['cookingtime']; ?> minutes</td>
                        <td>
                            <!-- Example: Edit or Delete button, you can implement these functionalities later -->
                            <a href="edit_item.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete_item.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
