<?php
/**
 * Secure Database Connection File (Admin)
 * Uses mysqli with prepared statements
 */

require_once __DIR__ . '/../../config.php';

// Create database connection
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$con) {
    if (DEBUG_MODE) {
        die('Connection failed: ' . mysqli_connect_error());
    } else {
        die('Database connection failed. Please contact administrator.');
    }
}

// Set charset to utf8
mysqli_set_charset($con, "utf8");

/**
 * Auto generate next ID for a table
 * @param mysqli $connection Database connection
 * @param string $tablename Table name
 * @param string $field Field name (usually ID field)
 * @return int Next available ID
 */
function autoid($connection, $tablename, $field)
{
    // Sanitize table and field names (whitelist approach)
    $allowed_tables = ['register', 'items', 'login', 'orders'];
    $allowed_fields = ['id', 'itemid', 'orderid'];
    
    if (!in_array($tablename, $allowed_tables) || !in_array($field, $allowed_fields)) {
        return 1; // Default to 1 if invalid
    }
    
    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($connection, "SELECT MAX(`$field`) as mid FROM `$tablename`");
    
    if (!$stmt) {
        return 1;
    }
    
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $id = 0;
    
    if ($row = mysqli_fetch_assoc($result)) {
        $id = (int)$row['mid'];
    }
    
    mysqli_stmt_close($stmt);
    
    return $id + 1;
}

/**
 * Sanitize input data
 * @param mysqli $connection Database connection
 * @param string $data Input data to sanitize
 * @return string Sanitized data
 */
function sanitize_input($connection, $data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    $data = mysqli_real_escape_string($connection, $data);
    return $data;
}

/**
 * Validate email address
 * @param string $email Email to validate
 * @return bool True if valid, false otherwise
 */
function validate_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Hash password securely
 * @param string $password Plain text password
 * @return string Hashed password
 */
function hash_password($password)
{
    return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
}

/**
 * Verify password
 * @param string $password Plain text password
 * @param string $hash Hashed password from database
 * @return bool True if password matches, false otherwise
 */
function verify_password($password, $hash)
{
    return password_verify($password, $hash);
}

?>