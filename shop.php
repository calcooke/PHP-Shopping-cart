<?php

include ('dbHandler.php');
session_start();

echo ("Welcome to the shop user " . $_SESSION['userID'] );

$stmt = $conn->query("SELECT * FROM product_database");

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
            <td><?php echo $row['price']; ?></td>
            <td><img src="<?php echo $row['image']; ?>"</td>
        </tr>
        <?php
    }
    ?>
</table>

