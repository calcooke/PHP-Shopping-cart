<?php

include ('dbHandler.php');
include('LoginHandler.php');

$name = $_POST['userName'];
$pass = $_POST['userPassword'];

class FunctionsHandler{


  function  loginFunction($name, $pass, $conn)
    {

        $loginHandler = new LoginHandler();
        $loginHandler->userCheck($name, $pass, $conn);

    }


}