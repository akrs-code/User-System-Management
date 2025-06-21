<?php
include 'config.php';
$result = $conn->query("SELECT * FROM users");
?>

<h2>User List</h2>
<a href="register.php">Add User</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
