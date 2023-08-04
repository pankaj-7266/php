<?php
        $user_fname = $_POST['fname'];
        $user_email = $_POST['email'];
        $user_lname = $_POST['lname'];
    // data get updted

    //connection established
       $conn = mysqli_connect("localhost","root","Admin@1234","form") or die("Connection failed");  
       $sql  = "UPDATE user SET first_name ='{$user_fname}', last_name ='{$user_lname}'  where email='{$user_email}'";
       mysqli_query($conn,$sql) or die("Query unsucessfull");


       header("Location: http://localhost/php/day2/index.php");
       exit();
?>