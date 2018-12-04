<?php

session_start();

include ('dbHandler.php');
include('LoginHandler.php');

if($_POST) {

    $name = $_POST['userName'];
    $pass = $_POST['userPassword'];


    $loginHandler = new LoginHandler();
    $loginHandler->userCheck($name, $pass, $conn);

    die();

}


echo "Write more functions here";