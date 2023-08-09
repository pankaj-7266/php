
<?php

        include "config.php"; //include config file
       session_start(); // session start
       session_unset(); //session unset
       session_destroy(); //session destroy
   
       header("Location: http://localhost/php/assignment%20PHP/phpAssignment1/"); //redirect to the main login page
   ?>

