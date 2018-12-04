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
<h1 id="clickedval">hmmmm</h1>
<script>

    $(document).ready(function() {

        alert("hello");

        jQuery("button").click(function(){

            alert("hello");
            //var theID = $('#cart_button').parent().attr("id");
            //var theID = $('#cart_button').closest("tr").attr("id");
            var theID = $(this).closest("tr").attr("id");
            //alert ($("#clickedval").innerText);
            alert(theID);


        });

    });



</script>


