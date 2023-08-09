<?php
        include "config.php";//include login
       session_start(); //session start
       session_unset(); // session unset
       session_destroy();
   
       header("Location: http://localhost/php/assignment%20PHP/phpAssignment2/"); //redirect to the main page ie login page
   ?>
