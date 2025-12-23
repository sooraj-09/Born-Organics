<?php
/**
 * Secure Login Handler
 * Uses prepared statements and password verification
 */

session_start();
require_once 'dbconnect.php';

$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = sanitize_input($con, $_POST['username']);
    $password = $_POST['password'];
    
    // Validate inputs
    if (empty($username) || empty($password)) {
        $error_message = 'Please enter both username and password.';
    } elseif (!validate_email($username)) {
        $error_message = 'Invalid email format.';
    } else {
        // Use prepared statement to prevent SQL injection
        $stmt = mysqli_prepare($con, "SELECT username, password, type, status FROM login WHERE username = ? AND status = '1'");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($row = mysqli_fetch_assoc($result)) {
                // Verify password
                if (verify_password($password, $row['password'])) {
                    // Login successful
                    $_SESSION['user'] = $row['type'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['logged_in'] = true;
                    
                    // Regenerate session ID for security
                    session_regenerate_id(true);
                    
                    // Redirect based on user type
                    $type = $row['type'];
                    $redirect_url = '';
                    
                    switch ($type) {
                        case 'admin':
                            $redirect_url = 'admin/examples/index.php';
                            break;
                        case 'user':
                            $redirect_url = 'user/index.php';
                            break;
                        case 'Doctor':
                            $redirect_url = 'Doctor/index.php';
                            break;
                        case 'scientist':
                            $redirect_url = 'scientist/index.php';
                            break;
                        case 'health worker':
                            $redirect_url = 'health-worker/index.php';
                            break;
                        default:
                            $redirect_url = 'index.php';
                    }
                    
                    header('Location: ' . $redirect_url);
                    exit();
                } else {
                    $error_message = 'Invalid username or password.';
                }
            } else {
                $error_message = 'Invalid username or password, or account not approved.';
            }
            
            mysqli_stmt_close($stmt);
        } else {
            $error_message = 'Login failed. Please try again.';
        }
    }
    
    // If we get here, login failed
    if ($error_message) {
        header('Location: index.php?msg=' . urlencode($error_message));
        exit();
    }
} else {
    // Invalid request
    header('Location: index.php?msg=' . urlencode('Invalid request.'));
    exit();
}
?>