<?php include 'dbHandler.php' ?>
<?php include 'LoginHandler.php' ?>
<?php include 'header.php' ?>


<body>

<form>
Name <br/>
    <input type="text" id="userName" name="userName"/>
    <br/> Password <br/>
    <input type="password" id="userPassword" name="userPassword"/>
    <br/>


</form>
<button>Log in</button>
</body>


<script>

    $(document).ready(function(){

        alert("loaded");
        console.log( "ready!" );

        jQuery("button").click(function(){

            alert('hi');

        };




    });




</script>