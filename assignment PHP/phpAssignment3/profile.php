<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header section -->
    <div class="header">
        <h1>Dev Community</h1>
        <?php session_start(); ?>

        <p style='color:white'>
            <!-- <?php echo $_SESSION['percent']; ?>%</p> -->
        <form action="profile.php">
            <input type="submit" value="Profile" name="profile" class="profile">
        </form>
        <form action="logout.php">

            <input type="submit" name="login" value="Logout">
        </form>
    </div>

    <!--middle section-->
    <div class="middle">
        <h1>Your Profile Details</h1>
        <?php

        include "config.php";

        $sno = $_SESSION['sno'];


        $sql = "SELECT * FROM profile WHERE sno ='{$sno}';";
        $result = mysqli_query($conn, $sql) or die("query failed");
        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);

            //percentage calculated for profile completion 
            $counter = 4;
            if ($row['interest'] == '')
                --$counter;
            if ($row['education'] == '')
                --$counter;
            if ($row['profession'] == '')
                --$counter;
            if ($row['hobbies'] == '')
                --$counter;


            $percentage = ($counter / 4) * 100;
            $_SESSION['percent'] = $percentage;

            ?>
            <!-- form for updating the profile section -->

            <form action="update_profile.php" method="POST" class="profile_form">
                <input type="text" placeholder="TOPIC OF INTEREST" name="TOI" value="<?php echo $row['interest'] ?>"><br>
                <input type="text" placeholder="EDUCATION" name="EDU" value="<?php echo $row['education']; ?>"><br>
                <input type="text" placeholder="PROFESSION" name="PRO" value="<?php echo $row['profession']; ?>"><br>
                <input type="text" placeholder="HOBBIES" name="HOB" value="<?php echo $row['hobbies']; ?>"><br>
                <input type="submit" name="submit" value="submit">
            </form>
        <?php } ?>


    </div>

</body>

</html>
<?php
include "footer.php";
header('Cache-Control: no-store, no-cache, must-revalidate');

?>