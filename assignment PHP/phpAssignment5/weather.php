<?php

    $userip ="115.246.59.10"; //default ip address of bhopal
    // $userip = $_SERVER['REMOTE_ADDR'];

    // 2b6c915c6afc18
    $url = "http://ipinfo.io/$userip/json?token=2b6c915c6afc18";
    $response = file_get_contents($url);

    $data = json_decode($response,true);
        

    //find the latitude and logitude of the given IP addressl 

    list($latitude , $longitude) = explode(',',$data['loc']);
    "Latitude: $latitude";
    "Longitude: $longitude";

    // $weather = 'http://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=6a3ceed8f45d20850c9959f24e79b7da';
    $weather = "https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=6a3ceed8f45d20850c9959f24e79b7da&units=metric&type=hour";
    
    //using the curl decode the json file
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $weather);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);
    curl_close($ch);
    $dataip = json_decode($response,true);
    // print_r($dataip);
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <!-- weather details      -->
            
            <div class="box">
                <h1>Hii..  <?php echo $_POST['username'];?></h1>
                <h1>Your Current Weather Details</h1>
                <h2>Weather:- <?php echo $dataip['name']  ;?></h2>
                <h2>Temperature:- <?php echo $dataip['main']['temp'] ;?> &deg;C</h2>
                <h2>Sunrise:- <?php echo date('H:i',$dataip['sys']['sunrise']);?> AM</h2>
                <h2>sunset:- <?php echo date('H:i',$dataip['sys']['sunset']);?> PM</h2>
            </div>
        </div>
    </body>
</html>