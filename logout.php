<?php
session_start(); // Start session to access session variables

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or another page after logout
header("Location: index.php"); // Redirect to the login page
exit();
?>
