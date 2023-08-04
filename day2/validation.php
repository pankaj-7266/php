<?php
        //validation from

        //insert data into the database

    $user_fname = $_GET['fname'];
    $user_email = $_GET['email'];
    $user_lname = $_GET['lname'];
    $conn = mysqli_connect("localhost","root","Admin@1234","form") or die("Connection failed");  
        $sql  = "INSERT INTO user (first_name,email,last_name) VALUES ('{$user_fname}','{$user_email}','{$user_lname}')";
        mysqli_query($conn,$sql) or die("Query unsucessfull");


        //transfer to the main page
        header("Location: http://localhost/php/day2/index.php");
        exit();
    


?>