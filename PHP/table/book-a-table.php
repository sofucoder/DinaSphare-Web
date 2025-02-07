<?php
include '../config-db.php';

header('Content-Type: application/json'); // Ensure JSON response

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];
$table_number = $_POST['table_number'];
$message = $_POST['message'];

// Insert reservation into the database
$query = "INSERT INTO reservations (name, email, phone, date, time, people, table_number, message) 
          VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$table_number', '$message')";
$result = mysqli_query($conn, $query);

if ($result) {
    // Mark the table as booked
    $updateQuery = "UPDATE tables SET status = 'booked' WHERE table_number = '$table_number'";
    mysqli_query($conn, $updateQuery);

    // Return JSON response
    echo json_encode(["status" => "success", "message" => "Reservation successful! We will confirm your booking shortly."]);
} else {
    echo json_encode(["status" => "error", "message" => "Error making reservation."]);
}
?>
