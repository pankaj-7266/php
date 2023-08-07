<?php
        include "config.php"; //include config file
       session_start(); // session start
       session_unset(); //session 
       session_destroy();// session destroy
   
       header("Location: http://localhost/php/assignment%20PHP/phpAssignment3/");//redirect to the loginpage
   ?>
