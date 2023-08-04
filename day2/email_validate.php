<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- here    data beign updated  -->

    <form action="update.php" method="post">
    <?php
        $fname = $_GET['fname'];
        $email = $_GET['email'];
        $lname = $_GET['lname'];

        // connectio establised
        $conn = mysqli_connect("localhost","root","Admin@1234","form");
        $sql1 = "SELECT * FROM user WHERE email ='{$email}'";
        $result = mysqli_query($conn,$sql1) or die("query failed");
            if(mysqli_num_rows($result)>0){
              $row = mysqli_fetch_assoc($result);

                
    ?> 
        <h1>Data Alreasy Exist</h1>
        <label for="">First Name</label>
        <input type="text" name="fname" value="<?php echo $row['first_name']?>" required\>
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $row['email']?>" required\>
        <label for="">Last Name</label>
        <input type="text" name="lname"  value="<?php echo $row['last_name']?>" required\>
        <input type="submit" name='submit'\>
        <?php  }?>
    </form>
        
    <!-- <table border=1>
        <tr>
            <th>First Name</th>
            <th>Email</th>
            <th>Last Name</th>
        </tr>
        <tr>
            <th>h</th>
            <th>y</th>
            <th>z</th>
        </tr>
    </table> -->
</body>
</html>