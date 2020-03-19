<!DOCTYPE html>
<?php
    //Function to convert degrees to compass point
    function degree_to_compass_point($d){
        $dp = $d + 11.25;
        $dp = $dp % 360;
        $dp = floor($dp / 22.5) ;
        $points = array("N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW","N");
        $dir = $points[$dp];
        return $dir;
    }
        
    //Function to convert kelvin to degrees celcius
    function kelvin_to_celcius($k){
        $d = $k - 273.15;
        return $d;
    }

    if(isset($_GET)){
        $user_city = "Rennes";
        $user_country = "France";
        // Connect to API get information from input
        $api_url = "http://api.openweathermap.org/data/2.5/weather?q=" . $user_city . "," . $user_country . "&appid=0ddffa7c2e021a08e926a7c343b864e6";
        $weather_data = file_get_contents($api_url);
        $json = json_decode($weather_data, TRUE);
        // Get requested info from API
        $user_temp = kelvin_to_celcius($json['main']['temp']); //temprature
        $user_humidity = $json['main']['humidity']; //humidity
        $user_conditions = $json['weather'][0]['main']; //weather condition
        $user_wind = $json['wind']['speed']; //wind speed
        $user_wind_direction = degree_to_compass_point($json['wind']['deg']); //wind direction
    };

    if(isset($_GET)){
      $user_city1 = "Exeter";
      $user_country1 = "England";
      // Connect to API get information from input
      $api_url = "http://api.openweathermap.org/data/2.5/weather?q=" . $user_city1 . "," . $user_country1 . "&appid=0ddffa7c2e021a08e926a7c343b864e6";
      $weather_data1 = file_get_contents($api_url);
      $json1 = json_decode($weather_data1, TRUE);
      // Get requested info from API
      $user_temp1 = kelvin_to_celcius($json1['main']['temp']); //temprature
      $user_humidity1 = $json1['main']['humidity']; //humidity
      $user_conditions1 = $json1['weather'][0]['main']; //weather condition
      $user_wind1 = $json1['wind']['speed']; //wind speed
      $user_wind_direction1 = degree_to_compass_point($json1['wind']['deg']); //wind direction
  };
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <title>Sister Cities</title>     
    <meta name="assignment" contents="">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="newLayout.css">
</head>
<body>
   <header>
       <img class="uweLogo" src="img\logo.png" alt="uweLogo">
        <nav>
            <ul class="navBar">
                <li><a href="newLayout.php">User Comments</a></li>
                <li><a href="photo.php">Photo</a></li>
                <li><a href="weather.php">Weather</a></li>
                <li><a href="map.php">Map</a></li>
                <li><a href="rss.php">Rss Feed</a></li>
            </ul>
        </nav>
        <a class="signUp" href="#"><button>Sign Up/Login</button></a>
    </header>

    <weather>
    <div class="exeter-weather-info">
        <u><h2>Weather in Exeter</h2><u>
        <a class="weatherwidget-io" href="https://forecast7.com/en/50d72n3d53/exeter/" data-label_1="EXETER" data-label_2="WEATHER" data-font="Arial" data-icons="Climacons Animated" data-theme="weather_one" >EXETER WEATHER</a>
        <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
    </div>

        <div class="rennes-weather-info">
            <u><h2>Weather in Rennes</h2></u>
            <a class="weatherwidget-io" href="https://forecast7.com/en/48d12n1d68/rennes/" data-label_1="RENNES" data-label_2="WEATHER" data-font="Arial" data-icons="Climacons Animated" data-theme="weather_one" >RENNES WEATHER</a>
        <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>
        </div>
    </div>
</weather>

</body>
</html>