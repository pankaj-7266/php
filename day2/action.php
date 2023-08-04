<?php
// in this file check the email is already exist or not
    $user_fname = $_POST['fname'];
    $user_email = $_POST['email'];
    $user_lname = $_POST['lname'];

    $conn = mysqli_connect("localhost","root","Admin@1234","form") or die("query unsucessful");
    $sql = "SELECT * FROM user WHERE email ='{$user_email}';";

    //fectch query from database
    $result = mysqli_query($conn,$sql) or die("query failed");

    //redirected to the emai_validate_page
    if(mysqli_num_rows($result)){
        header("Location: http://localhost/php/day2/email_validate.php?fname=$user_fname&email=$user_email&lname=$user_lname");
    }

    //redirected to the validation_page
    else{
        header("Location: http://localhost/php/day2/validation.php?fname=$user_fname&email=$user_email&lname=$user_lname");
    }




?>