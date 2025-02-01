
-- Login Processing Script (login.php) --
<?php
include '../config-db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, full_name, password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullName, $hashedPassword);
        $stmt->fetch();
        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['full_name'] = $fullName;
            header("Location: ../../dashboard.php");
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "No user found";
    }
    $stmt->close();
    $conn->close();
}
?>



