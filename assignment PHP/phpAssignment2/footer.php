<?php
    // create cookies in the send to the file cookies.php
   if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $self =  $_SERVER['PHP_SELF'];
    
    if(($username != null) and ($useremail != null) ){
        setcookie("name", $username , time() + 120 ); //set cookies for  2 min username 
        setcookie("email", $useremail, time()+ 120 );//set cookies for 2 min useremail

        header("Location: http://localhost/php/assignment%20PHP/phpAssignment2/cookies.php");//tranfer to the cookie.php file
        exit();
    }
   }
 ?>
<!-- footer from -->
<div class="footer">
    <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="name" class="name">
        <input type="email" name="email" value="" placeholder="email">
        <input type="submit" name="submit" value="submit">
    </form>
</div>