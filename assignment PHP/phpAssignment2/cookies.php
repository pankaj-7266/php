<?php
include "headerin.php"; //header file included
//two cookie data fetch from the cookies created;
$username = $_COOKIE['name'];
$useremail = $_COOKIE['email'];

if ($username != "" && $useremail != "") {
    echo "<h1>hello " . $username . " welcome, thanks for subscribing the newletter</h1><br><br>";
}
// if (isset($_COOKIE['name']) && $_COOKIE['email'] == true) {
    

// }   

    // include "config.php";
    // $sql = "SELECT * FROM user_login WHERE email ='{$useremail}'";
    // $result = mysqli_query($conn,$sql);
    // if(mysqli_num_rows($result)){
    //     $row = mysqli_fetch_assoc($result);
    //      var_dump($row);      

    // }

header("Refresh: 120; url=index.php"); // wait for 2 min and then refresh

?>
<div class="middle"></div>


<?php
include "footer.php";
?>