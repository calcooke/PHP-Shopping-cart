<?php

include ('dbHandler.php');
include('LoginHandler.php');

$name = $_POST['userName'];
$pass = $_POST['userPassword'];


$loginHandler = new LoginHandler();
$loginHandler->userCheck($name, $pass, $conn);

//echo $reply;