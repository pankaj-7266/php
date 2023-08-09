<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 Cookies </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php include "headerin.php"?>
        <div class="middle">
            <h1>Login</h1>
            <!-- self request form -->
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" placeholder="Email" name="email"><br>
                <input type="password" placeholder="password" name="pass" ><br>
                <input type="submit" value="submit" name="login"><br>
            </form>
            <?php
                

                 // login page, session start 

                if(isset($_POST['login'])){
                    include "config.php";
                    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                    if(empty($_POST["email"])){
                        echo "<h1 style='color:red;'>Email is required</h1>"; //display error if email filed is empty
                    }
                    if(!preg_match($regex,$_POST["email"])){
                        echo "<h1 style='color:red;'>Email is not valid</h1>"; //display error if email is not in format
                    }

                    $useremail = mysqli_real_escape_string($conn,$_POST['email']);
                    $userpass  = ($_POST['pass'] );
                        //sql query for checking the login
                    $sql =" SELECT sno, email, password FROM user_login WHERE email ='{$useremail}' AND password ='{$userpass}'";
                    $result = mysqli_query($conn, $sql) or die("query failed");
                        // session start and login
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            session_start();
                            $_SESSION['username'] = $row['email'];
                            $_SESSION['sno'] = $row['sno'];
                            $_SESSION['password'] = $row['password'];

                            header("Location: http://localhost/php/assignment%20PHP/phpAssignment3/login.php");//after completing file redirect to the login page

                        }
                    }
                    else{
                        echo "<div>email and password are not matched.</div>";
                    }
                }
            ?>
         
        </div>
        <?php include "footer.php";?>

    </div>
</body>
</html> 