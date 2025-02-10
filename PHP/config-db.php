<?php
ob_start();
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dinesphere";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if database exists, if not, create it
if (!$conn->select_db($dbname)) {
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully.<br>";
    } else {
        die("Error creating database: " . $conn->error);
    }
    $conn->select_db($dbname);
} else {
    $conn->select_db($dbname);
}

// SQL statements to create tables
// SQL for creating admins table
$sql1 = "
CREATE TABLE IF NOT EXISTS admins (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY username (username),
  UNIQUE KEY email (email)
);
";
if ($conn->query($sql1) === TRUE) {
  
} else {
    echo "Error creating admins table: " . $conn->error . "<br>";
}

// SQL for creating feedback table
$sql2 = "
CREATE TABLE IF NOT EXISTS feedback (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  subject VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
";
if ($conn->query($sql2) === TRUE) {
   
} else {
    echo "Error creating feedback table: " . $conn->error . "<br>";
}

// SQL for creating food_menu table
$sql3 = "
CREATE TABLE IF NOT EXISTS food_menu (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  description TEXT,
  image VARCHAR(255) DEFAULT NULL,
  cookingtime INT DEFAULT NULL,
  PRIMARY KEY (id)
);
";
if ($conn->query($sql3) === TRUE) {
   
} else {
    echo "Error creating food menu table: " . $conn->error . "<br>";
}


// SQL for creating orders table
$sql5 = "
CREATE TABLE IF NOT EXISTS orders (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  address TEXT NOT NULL,
  payment_method VARCHAR(50) NOT NULL,
  total_price DECIMAL(10,2) NOT NULL,
  order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status VARCHAR(50) DEFAULT 'not_seen',
  seen_date DATETIME DEFAULT NULL,
  PRIMARY KEY (id)
);
";
if ($conn->query($sql5) === TRUE) {
    
} else {
    echo "Error creating orders table: " . $conn->error . "<br>";
}

// SQL for creating order_items table
$sql6 = "
CREATE TABLE IF NOT EXISTS order_items (
  id INT NOT NULL AUTO_INCREMENT,
  order_id INT NOT NULL,
  food_name VARCHAR(255) NOT NULL,
  quantity INT NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  total DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE
);
";
if ($conn->query($sql6) === TRUE) {
  
} else {
    echo "Error creating order items table: " . $conn->error . "<br>";
}

// SQL for creating reservations table
$sql7 = "
CREATE TABLE IF NOT EXISTS reservations (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  date DATE NOT NULL,
  time TIME NOT NULL,
  people INT NOT NULL,
  table_number INT NOT NULL,
  message TEXT,
  reservation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
";
if ($conn->query($sql7) === TRUE) {
   
} else {
    echo "Error creating reservations table: " . $conn->error . "<br>";
}

// SQL for creating tables table
$sql8 = "
CREATE TABLE IF NOT EXISTS tables (
  id INT NOT NULL AUTO_INCREMENT,
  table_number INT NOT NULL,
  status ENUM('available','booked') DEFAULT 'available',
  PRIMARY KEY (id)
);
";
if ($conn->query($sql8) === TRUE) {
   
} else {
    echo "Error creating tables table: " . $conn->error . "<br>";
}

// SQL for creating users table
$sql9 = "
CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT,
  full_name VARCHAR(255) NOT NULL,
  email VARCHAR(191) NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY email (email)
);
";
if ($conn->query($sql9) === TRUE) {
   
} else {
    echo "Error creating users table: " . $conn->error . "<br>";
}
ob_end_flush();
?>
