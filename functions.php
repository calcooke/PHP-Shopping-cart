<?php

include ('dbHandler.php');
include('LoginHandler.php');

$name = $_POST['userName'];
$pass = $_POST['userPassword'];

echo $name;


/*$loginHandler = new LoginHandler();
$reply = $loginHandler->echoUser($name, $pass);

echo $reply;*/