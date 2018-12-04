

<?php include 'header.php' ?>
<?php include 'FunctionsHandler.php' ?>




<body>

<form action="login.php" method="post" id="loginForm">
Name <br/>
    <input type="text" id="userName" name="userName"/>
    <br/> Password <br/>
    <input type="password" id="userPassword" name="userPassword"/>
    <br/>
    <input id="submitButton" name="submitButton" type="submit"/>

</form>


<br/>
<br/>

<h2> Username: aaaa, password: bbbb </h2>

</body>
</html>
<script>

    $(document).ready(function() {

        //alert("hello");

        jQuery("#submitButton").click(function(){

            <?php
            if(isset($_POST['submit'])) {

                $name = $_POST['userName'];
                $pass = $_POST['userPassword'];


                $functionsHandler = new FunctionsHandler();
                $functionsHandler->loginFunction($name, $pass, $conn);
            }

            ?>

        });

    });



</script>





