<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <label for="">First Name</label>
        <input type="text" name="fname" required\>
        <label for="">Email</label>
        <input type="email" name="email" required\>
        <label for="">Last Name</label>
        <input type="text" name="lname" required\>
        <input type="submit" name='submit'\>
    </form>

    <!-- table for showing the data -->

    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Email</th>
            <th>Last Name</th>
            </tr>

        <!-- database connecton established -->

        <?php
                $conn = mysqli_connect("localhost","root","Admin@1234","form") or die("Connection failed");
                $sql  = "SELECT * from user" ;
                $result = mysqli_query($conn,$sql) or die("query unsucessful");

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result))
                    {
        ?>
            <tr>
                        <!-- data fetch from the database -->

                        
                <td><?php echo $row['first_name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['last_name']?></td>
            </tr>
        <?php }}?>
    </table>
</body>
</html>