<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "login_system";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "❌ Failed to connect: " . mysqli_connect_error();
    exit();
}

echo "✅ Connection success!";
?>
