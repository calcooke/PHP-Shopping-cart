<?php

include ('header.php');
include ('dbHandler.php');
include ('navbar.php');
session_start();

$stmt = $conn->query("SELECT * FROM product_database");


$row = ($_SESSION["user_cart"]);

?>

<table style="border: 1px solid black">

    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Delete</th>
    </tr>
    <?php
    while ($row = $stmt->fetch()) {
        ?>
        <tr id = <?php echo $row['id']; ?>>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo '<img src="images/'  . $row["image"] .  '">';?></td>
            <td><button type="button" id="cart_button">Add to cart</button></td>

        </tr>
        <?php
    }
    ?>
</table>

<?php

function pr($user)
{
    echo "<pre>";
    print_r($user);
    echo "</pre>";
}

pr($user);
