<?php
//    if(isset($_POST['submit'])){
//     $username = $_POST['name'];
//     $useremail = $_POST['email'];
//     $self =  $_SERVER['PHP_SELF'];
    
//     if(($username != null) and ($useremail != null) ){
//         setcookie("name", $username , time() + 120 );
//         setcookie("email", $useremail, time()+ 120 );

//         header("Location: http://localhost/php/assignment%20PHP/phpAssignment3/cookies.php");
//         exit();
//     }
//    }
?>
<div class="footer">
    <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name" class="name">
        <input type="email" name="email" value="" placeholder="email">
        <input type="submit" name="submit" value="submit">
    </form>
</div>