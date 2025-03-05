<?php
// Start session for managing login state
session_start();

// Simple hardcoded admin credentials
$admin_user = "admin";
$admin_password = "12345";

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify credentials
    if ($username === $admin_user && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php"); // Redirect to dashboard or home page
        exit;
    } else {
        // Invalid login; redirect back with error message
        header("Location: admin_login.php?error=1");
        exit;
    }
} else {
    // If accessed without form submission, redirect to login page
    header("Location: admin_login.php");
    exit;
}
?>