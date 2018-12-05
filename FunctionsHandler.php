<?php

include ('dbHandler.php');
include('LoginHandler.php');

//$name = $_POST['userName'];
//$pass = $_POST['userPassword'];

class FunctionsHandler{


  function  loginFunction($name, $pass, $conn)
    {

        $stmt = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
        $stmt->execute(['username'=> $name, 'password'=> $pass]);

        $userRow = $stmt->fetch();

        if($name == $userRow['username'] && $pass == $userRow['password']) {

            $_SESSION['userID'] = $userRow['id'];
            header('Location: shop.php');
            //echo "USERS ID IS" . $_SESSION['userID'];

        } else {

            echo "Wrong username or password";

        }

    }


}