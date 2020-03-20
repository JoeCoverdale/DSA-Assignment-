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