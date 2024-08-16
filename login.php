<?php
include 'db.php';
session_start(); // Start session to store user authentication status


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // Prepare SQL statement to fetch user details
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, set session variables and redirect to home page
        $_SESSION['username'] = $username;
        header("Location: home.php"); // Redirect to your home page after successful login
    } else {
        // User not found or invalid credentials, redirect back to login page
        header("Location: index.php?error=InvalidCredentials"); // Redirect with error message
    }
} else {
    header("Location: index.php"); // Redirect to login page if accessed directly without POST data
}

$conn->close();
?>

