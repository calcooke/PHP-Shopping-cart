<?php

session_start();

echo ("Welcome to the shop user " . $_SESSION['userID'] );

$stmt = $conn->query("SELECT * FROM crm_database");

?>

<table style="border: 1px solid black">
    <tr>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    while ($row = $stmt->fetch()) {
        ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>