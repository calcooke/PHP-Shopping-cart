<?php

class LoginHandler{

    function userCheck($name, $pass, $conn) {

        $stmt = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
        $stmt->execute(['username'=> $name, 'password'=> $pass]);

        $userRow = $stmt->fetch();

        if($name == $userRow['username'] && $pass == $userRow['password']) {

            //var_dump($userRow);
            $_SESSION['userID'] = $userRow['id'];
            header('Location: shop.php');
            //echo "USERS ID IS" . $_SESSION['userID'];

        } else {

            echo "Wrong username or password";

        }

    }

}
