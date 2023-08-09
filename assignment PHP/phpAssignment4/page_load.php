<?php
// connectin established
$conn = mysqli_connect("localhost", "root", "Admin@1234", "selection") or die("connection failed");


// if type ==""
// fetch the data of the country;
if ($_POST['type'] == '') {


    $sql = "SELECT * FROM country";
    $query = mysqli_query($conn, $sql) or die("connection failed");
    $str = "";

    while ($row = mysqli_fetch_assoc($query)) {
        $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
    }

}
// if type =="stateData"
// fetch the data of the state according the country id from the database;
else if($_POST['type'] == "stateData"){
    $sql ="SELECT * FROM state WHERE country ={$_POST['id']}";
    $query = mysqli_query($conn,$sql) or die("Query Unsuccesful.");
    $str ="";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value ='{$row['sid']}'>{$row['sname']}</option>";

    } 
// if type =="cityData"
// fetch the data of the city according the state id from the database;
}else if($_POST['type'] == "cityData"){
    $sql= "SELECT * FROM city WHERE state = {$_POST['id']}";
    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful ");
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value = '{$row['cityId']}'>{$row['cityName']}</option>";
    }
}

echo $str;

?>