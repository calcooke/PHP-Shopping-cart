<?php include 'dbHandler.php' ?>
<?php include 'LoginHandler.php' ?>
<?php include 'header.php' ?>


<body>
Name <br/>
    <input type="text" id="userName" name="userName"/>
    <br/> Password <br/>
    <input type="password" id="userPassword" name="userPassword"/>
    <br/>
    <input id="submitButton" name="submitButton" type="submit"/>

</body>


<script>

    $(document).ready(function(){

        alert("loaded");
        console.log( "ready!" );


    });


</script>