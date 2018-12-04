<?php

class LoginHandler{

    function echoUser($name, $pass) {

        echo $name . " " . $pass;

    }

    /*function userCheck($name, $pass) {

        $stmt = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
        $stmt->execute(['username'=> $name, 'password'=> $pass]);

        $user = $stmt->fetch();

        if ($name == "aaaa" && $pass == "bbbb") {

            echo $login = "Successful";

        } else {

            echo $login = "Denied";
        }


    }*/



}
