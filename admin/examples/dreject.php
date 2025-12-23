<?php
/**
 * Secure User Rejection Handler
 * Uses prepared statements to prevent SQL injection
 */
session_start();

// Check if user is admin
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'admin') {
    header('Location: index.php');
    exit();
}

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('Invalid request.');location.href='ureq.php';</script>";
    exit();
}

include 'dbconnect.php';

// Sanitize email
$email = sanitize_input($con, $_GET['id']);

// Validate email format
if (!validate_email($email)) {
    echo "<script>alert('Invalid email address.');location.href='ureq.php';</script>";
    exit();
}

// Update status using prepared statement
$stmt = mysqli_prepare($con, "UPDATE login SET status = '0' WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $email);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    echo "<script>alert('User rejected successfully!');location.href='ureq.php';</script>";
} else {
    mysqli_stmt_close($stmt);
    echo "<script>alert('Failed to reject user. Please try again.');location.href='ureq.php';</script>";
}
?>