<?php
session_start();  // Start the session

// Destroy the session to log the user out
session_destroy();

// Delete the "Remember Me" cookie (if set)
setcookie("user_id", "", time() - 3600, "/");  // Expire the cookie immediately

// Redirect the user to the index page
header("Location: ../../index.html");
exit();
?>
