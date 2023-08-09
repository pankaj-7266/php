<?php
    include "headerout.php"; //header file inlcude
    include "config.php"; // config file include
    session_start(); //session start
    $user = $_SESSION['username']; //variable stored in session
    echo "<div><h1>Hii ".$user." welcome</h1></div>"; 

    //fetch the sno from the database of same user and stored in a session.
    $sql = "SELECT * from user_login  WHERE email='{$user}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
    }
   $sno = $_SESSION['sno'];

    
   
?>
<div class="middle">

</div>
<?php
    include "footer.php";//footer page
?>
 