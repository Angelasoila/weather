<?php
    if(isset($_POST["submit"])){
     if(empty($_POST["city"])){
        echo "enter city name";
     }else{
        $city=$_POST["city"];
        $api_key= "735fea1c88c76b006a978d0d2df704d3";
        $api="https://api.openweathermap.org/data/2.5/weather?q=city&appid=$api_key";
        $api_data=file_get_contents($api);
       // print_r($api_data);
        $weather =json_decode($api_data, true);
        //print_r($weather);
        $celcius = $weather["main"]["temp"]-273;

       
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather</title>
</head>
<body>
<div class="weather-card">
      <h1 class="location">Seattle</h1>
      <i class="icon"></i>
      <h2 class="temperature">50&deg;F</h2>
      <p class="description">Cloudy</p>
    </div>
    <section>
        <form method="post">
           <h1>The Weather App</h1>
            <input type="text" name="" id="">
             <input  name="submit" type="submit" value="check weather">
        </form>



        <?php
        echo $weather["weather"][0]["description"];
        echo "<br>";
        echo $celcius = "degrees .celcius";
}
     ?>

    </section>
</body>
</html>