<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- container part of the webpage  -->
    <div class="container">
        <?php include "headerin.php"?> 
        <div class="middle">
            <h1>Login</h1>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" placeholder="Email" name="email"><br>
                <input type="password" placeholder="password" name="pass" ><br>
                <input type="submit" value="submit" name="login"><br>
            </form>

            <?php
            //form submitted 
                
                if(isset($_POST['login'])){
                    include "config.php";
                    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                    if(empty($_POST["email"])){
                        echo "<h1 style='color:red;'>Email is required</h1>";
                    }
                    if(!preg_match($regex,$_POST["email"])){
                        echo "<h1 style='color:red;'>Email is not valid</h1>";
                    }
                    //varibale for email and password
                    $useremail = mysqli_real_escape_string($conn,$_POST['email']);
                    $userpass  = ($_POST['pass'] );

                    $sql =" SELECT sno, email, password FROM user_login WHERE email ='{$useremail}' AND password ='{$userpass}'";
                    $result = mysqli_query($conn, $sql) or die("query failed");
                    //session start for variable
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            session_start();
                            $_SESSION['username'] = $row['email'];
                            $_SESSION['sno'] = $row['sno'];
                            $_SESSION['password'] = $row['password'];


                            //when successfull login is session start and redirect to the login page
                            header("Location: http://localhost/php/assignment%20PHP/phpAssignment1/login.php");

                        }
                    }
                    else{
                        //dislay error is password not match with database
                        echo "<div>email and password are not matched.</div>";
                    }
                }
            ?>
        </div>
        <!-- footer part of the webpage -->
        <?php include "footer.php";?>

    </div>
</body>
</html> 