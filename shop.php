<?php
include ('header.php');
include ('dbHandler.php');
include ('navbar.php');
session_start();

echo ("Welcome to the shop user " . $_SESSION['userID'] );

$stmt = $conn->query("SELECT * FROM product_database");

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
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo '<img src="images/'  . $row["image"] .  '">';?></td>
            <td><button type="button" id="cart_button" productId = <?php echo $row['id']; ?>>Add to cart</button></td>

        </tr>
        <?php
    }
    ?>
</table>

<script>

    $(document).ready(function() {

        alert("hello");

        jQuery("#cart_button").click(function(){

            alert ($(this).productID);

        });

    });



</script>


