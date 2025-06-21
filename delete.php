<?php
include 'config.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: users.php");
        exit;
    } else {
        echo "❌ Error deleting user.";
    }
} else {
    echo "⚠️ Invalid user ID.";
}
?>
