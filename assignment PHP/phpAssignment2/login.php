<?php
    include "headerout.php"; //include header file
    include "config.php"; // include config file
    session_start(); //session start();
    $user = $_SESSION['username']; // declare variable to store the session
    echo "<div> <h1>Hii ".$user." welcome</h1></div>"; //display message when user login
    
   
?>
<div class="middle">

</div>
<?php

    include "footer.php";
?>
 