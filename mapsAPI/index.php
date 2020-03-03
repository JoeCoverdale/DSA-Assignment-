<!DOCTYPE html>
<html lang="en">
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
  <meta name=viewport content="initial-scale=1">
  <meta charset="utf-8">
  <title>Sister Cities</title>

  <!-- Stylesheets. -->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="wrapperNav">
  <!-- Navigation Bar -->
    <nav>PHOTO WIDGET
    </nav>
      <nav>WEATHER API
      </nav>
        <nav>GOOGLE MAPS API
        </nav>
  </div>

  <div class="wrapper">
  <!-- Header -->
    <header>
      <img src="images/rennesCath.jpg" alt="Rennes Cathedral" style="width: 649px; height: 325px"/>
    </header>
      <header>
        <div class="row justify-content-center">
          <div class="col-md-6 col-offset-3" align="center" padding="10"></br></br>
            <img src="images/weather_icon2.png" alt="Weather Icon" width="100" height="100" margin="5">
                <?php
                  echo "<div align='center'><strong> City: </strong>" . ucfirst($user_city) . "<br />";
                  echo "<div align='center'><strong> Country: </strong>" . ucfirst($user_country) . "<br />";
                  echo "<div align='center'><strong> Current Temperature: </strong>" . substr($user_temp,0,4) . "&#0176;C" . "<br />";
                  echo "<div align='center'><strong> Current Conditions: </strong>" . $user_conditions . "<br />";
                  echo "<div align='center'><strong> Wind Speed: </strong>" . $user_wind . " Knots <br />";
                  echo "<div align='center'><strong> Wind Direction: </strong>" . $user_wind_direction . "<br />";
                  echo "<div align='center'><strong> Humidity: </strong>" . $user_humidity . "%<br />";
                ?>
          </div>
        </div>
      </header>
        <header>
          <div id="mapExeter">
        </header>
  </div>

  <div class="wrapper">
  <!-- Section -->
    <section>
    <img src="images/exeterFootball.jfif" alt="Exeter Football Stadium" style="width: 649px; height: 325px"/>
    </section>
      <section>
      <div class="row justify-content-center">
          <div class="col-md-6 col-offset-3" align="center" padding="10"></br></br>
          <img src="images/weather_icon2.png" alt="Weather Icon" width="100" height="100" margin="5">
              <?php
                echo "<div align='center'><strong> City: </strong>" . ucfirst($user_city1) . "<br />";
                echo "<div align='center'><strong> Country: </strong>" . ucfirst($user_country1) . "<br />";
                echo "<div align='center'><strong> Current Temperature: </strong>" . substr($user_temp1,0,4) . "&#0176;C" . "<br />";
                echo "<div align='center'><strong> Current Conditions: </strong>" . $user_conditions1 . "<br />";
                echo "<div align='center'><strong> Wind Speed: </strong>" . $user_wind1 . " Knots <br />";
                echo "<div align='center'><strong> Wind Direction: </strong>" . $user_wind_direction1 . "<br />";
                echo "<div align='center'><strong> Humidity: </strong>" . $user_humidity1 . "%<br />";
              ?>
      </section>
        <section>
          <div id="mapRennes">
        </section>
  </div>
  
  <div class="wrapper">
  <!-- Footer -->
    <!-- <footer>Footer
      <div id="mapExeter"></div>
    </footer>
      <footer>2
      </footer>
        <footer>3
        </footer> -->

</body>

  <!-- Google Maps scripts. -->
  <script src="script.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOWZyaWwxRQBQFs3f1Df3tHTVQ2RRWGNY&callback=initMap&libraries=places" async defer></script>

