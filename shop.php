<?php

session_start();

echo ("Welcome to the shop user " . $_SESSION['userID'] );

/*$stmt = $conn->query("SELECT * FROM crm_database");

*/?><!--

<table style="border: 1px solid black">
    <tr>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
/*    while ($row = $stmt->fetch()) {
        */?>
        <tr>
            <td><?php /*echo $row['title']; */?></td>
            <td><a href="edit.php?id=<?php /*echo $row['id']; */?>">Edit</a></td>
            <td><a href="delete.php?id=<?php /*echo $row['id']; */?>">Delete</a></td>
        </tr>
        --><?php
/*    }
    */?>
</table>

<div class="shopping-cart">

    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
    </div>

    <div class="product">
        <div class="product-image">
            <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
        </div>
        <div class="product-details">
            <div class="product-title">Dingo Dog Bones</div>
            <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
        </div>
        <div class="product-price">12.99</div>
        <div class="product-quantity">
            <input type="number" value="2" min="1">
        </div>
        <div class="product-removal">
            <button class="remove-product">
                Remove
            </button>
        </div>
        <div class="product-line-price">25.98</div>
    </div>