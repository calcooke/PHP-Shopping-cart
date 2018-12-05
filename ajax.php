<?php

session_start();



    $itemID = $_POST["productID"];

    array_push($_COOKIE['user_cart'], $itemID);

    echo "success";
    die();




