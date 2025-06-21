<?php
include 'config.php';

$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id = $id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'];

    $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssi", $username, $password, $id);
    $stmt->execute();

    header("Location: users.php");
    exit;
}
?>

<form method="post">
    Username: <input name="username" value="<?= $user['username'] ?>" required><br>
    Password: <input type="password" name="password"> (leave blank to keep existing)<br>
    <button type="submit">Update</button>
</form>
