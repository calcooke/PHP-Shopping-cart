<?php

session_start();



    $itemID = $_POST["productID"];

    array_push($_SESSION['user_cart'], $itemID);

    echo "success";
    die();




