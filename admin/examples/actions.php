<?php 
/**
 * Secure Action Handler
 * Handles product deletion with proper validation
 */
include 'dbconnect.php';

if (isset($_POST['submit2']) && isset($_POST['open'])) {
    // Validate and sanitize ID
    $id = filter_var($_POST['open'], FILTER_VALIDATE_INT);
    
    if ($id === false || $id <= 0) {
        echo "<script>alert('Invalid product ID.');location.href='addproduct.php';</script>";
        exit();
    }
    
    // Get image path before deletion
    $stmt = mysqli_prepare($con, "SELECT imgid FROM items WHERE itemid = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    
    // Delete from database using prepared statement
    $delete_stmt = mysqli_prepare($con, "DELETE FROM items WHERE itemid = ?");
    mysqli_stmt_bind_param($delete_stmt, "i", $id);
    
    if (mysqli_stmt_execute($delete_stmt)) {
        // Delete associated image file if exists
        if ($row && !empty($row['imgid']) && file_exists($row['imgid'])) {
            @unlink($row['imgid']);
        }
        echo "<script>alert('Product deleted successfully!');location.href='addproduct.php';</script>";
    } else {
        echo "<script>alert('Failed to delete product. Please try again.');location.href='addproduct.php';</script>";
    }
    mysqli_stmt_close($delete_stmt);
} else {
    echo "<script>alert('Invalid request.');location.href='addproduct.php';</script>";
}
?>