<?php
    $conn = mysqli_connect("localhost", "root", "Admin@1234", "selection") or die("connection failed");

    //data fetch from form table we get id 
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];
    }

    // fecthing the data from database according to their id
    $sql1="SELECT * FROM country WHERE cid='{$country}'";
    $sql2="SELECT * FROM state WHERE sid ='{$state}'";
    $sql3="SELECT * FROM city WHERE cityId ='{$city}'";
    $query1 = mysqli_query($conn,$sql1);
    $query2 = mysqli_query($conn,$sql2);
    $query3 = mysqli_query($conn,$sql3);

    //create associative array 
    $row1 = mysqli_fetch_assoc($query1);
    $row2 = mysqli_fetch_assoc($query2);
    $row3 = mysqli_fetch_assoc($query3);

    // echo $row1['cname'];
    // echo $row2['sname'];
    // echo $row3['cityName'];
    

    $sql = "INSERT INTO user (country,state,city,postal_code) VALUES ('{$row1['cname']}','{$row2['sname']}','{$row3['cityName']}',{$postal})";

    // $sql
    mysqli_query($conn,$sql);



?> 







