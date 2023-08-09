

<?php
    include "headerout.php"; //include header file
    include "config.php"; //include config file
    session_start(); //session start
    $user = $_SESSION['username']; //stored variable on the user
    echo "<div> <h1>Hii ".$user." welcome</h1></div>"; //show welcome message


?>
<div class="middle"></div>

<?php     include "footer.php"; ?>
 