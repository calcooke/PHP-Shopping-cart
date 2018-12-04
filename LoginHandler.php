<?php

//$conn = new PDO('mysql:host=localhost;dbname=ecommerce_site', 'root', '');

class LoginHandler{

    /*function echoUser($name, $pass) {

        echo $name . " " . $pass;

    }*/

    function userCheck($name, $pass, $conn) {

        $stmt = $conn->prepare('SELECT * FROM users WHERE username=:username AND password=:password');
        $stmt->execute(['username'=> $name, 'password'=> $pass]);

        $userRow = $stmt->fetch();

        if($name == $userRow['username'] && $pass == $userRow['password']) {

            var_dump($userRow);

        } else {

            echo "Wrong username or password";

        }

        /*if(($row['username']) AND !empty($row['password']))
        {
            $_SESSION['username'] = $row['password'];
            echo "Welcome";

        }*/



        /*if ($name == "aaaa" && $pass == "bbbb") {

            echo $login = "Successful";

        } else {

            echo $login = "Denied";
        }*/


    }



}
