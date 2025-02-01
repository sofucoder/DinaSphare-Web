<?php
// Include the database connection file
include('db_connection.php');

// Check if $pdo is set
if (!$pdo) {
    die('PDO connection not established!');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the item from the database
    $sql = "DELETE FROM food_menu WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    // Redirect to the menu page after deletion
    header('Location:../PHP/menu/menu.php');
    exit;
}
?>

