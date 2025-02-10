<?php
session_start();

// Clear session data and destroy the session
session_unset();
session_destroy();

header('Location:index.php'); // Redirect to login page after logout
exit();
