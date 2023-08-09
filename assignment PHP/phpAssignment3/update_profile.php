<?php
    // include "headerout.php";
   
    $interest = $_POST['TOI'];
    $education = $_POST['EDU'];
    $professional = $_POST['PRO'];
    $hobbies = $_POST['HOB'];
    session_start();
    $sno = $_SESSION['sno'];
    
    include "config.php";
    $sql = "UPDATE profile SET interest='{$interest}',education ='{$education}',profession ='{$professional}',hobbies='{$hobbies}' WHERE sno = '{$sno}'";
    mysqli_query($conn,$sql) or die("query failed");


    $sql1 = "SELECT * FROM profile WHERE sno = $sno";
    $result = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);

//calculate percentage, how many profile column are filled
        $counter = 4;
        if($row['interest']=='')
            --$counter;
        if($row['education']=='')
            --$counter;
        if($row['profession']=='')
            --$counter;
        if($row['hobbies']=='')
            --$counter;
        

        $percentage1 = ($counter/4)*100; //percentage calculated;
        $_SESSION['percentage'] = $percentage1; //percentage variable passed through session
    }


?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="header">
<h1>Dev Community</h1>
<?php
    
?>
    <p style='color:white'; id="percent"><?php echo $_SESSION['percentage'];?>%</p> <!--here complete percentage show -->
    <form action="profile.php">
        <input type="submit" value="Profile" name="profile" class="profile"> 
    </form>
    <form action="logout.php">
        
        <input type="submit" name="login" value="Logout">
    </form>
</div>
<html>
    <body>
        <div class="middle">
        <h1>About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem saepe illo earum dolorum molestias beatae deleniti hic vero illum. Magnam ab ullam asperiores facere nisi eos quo, optio sunt vero doloribus corrupti quas porro aperiam dolore tempora quisquam distinctio. Incidunt impedit illum, veniam doloremque facere omnis! Ad, tempora dolores! Harum tempore ullam debitis quo magni cum voluptatum ad eveniet libero commodi a pariatur labore qui, dicta accusantium quaerat suscipit dolore corrupti culpa, temporibus perspiciatis voluptates odio iure! Nemo inventore excepturi itaque, dolores pariatur iure sint aut impedit temporibus vel aliquid laboriosam ipsam hic consequatur praesentium totam dicta voluptas, tempora beatae!</p>
</div>
    </body>
</html>

<?php include "footer.php";