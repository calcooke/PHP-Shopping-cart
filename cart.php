<?php

include ('header.php');
include ('dbHandler.php');
include ('navbar.php');
session_start();

$stmt = $conn->query("SELECT * FROM product_database");


$userItems = ($_SESSION["user_cart"]);

var_dump($userItems);

?>

<table style="border: 1px solid black">

    <tr>
        <th>Title</th>
        <th>Price</th>
        <th>Delete</th>
    </tr>
    <?php
    while ($row = $stmt->fetch()) {
        foreach ($userItems as $items) {
            if ($row["id"] == $items) {
                ?>
                <tr id= <?php echo $row['id']; ?>>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo '<img src="images/' . $row["image"] . '">'; ?></td>
                    <td>
                        <button type="button" id="cart_button">Remove</button>
                    </td>

                </tr>
                <?php
            }
        }
    }
        ?>
</table>

<?php

function pr($userItems)
{
    echo "<pre>";
    print_r($userItems);
    echo "</pre>";
}

//pr($user);
