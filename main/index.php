<?php
    require 'data/config.php';
    require 'data/getLocation.php';
    require 'data/getPlacesOfInterest.php';
    require 'data/getWeather.php';
    require 'flickrAPI/getPhoto.php';
?>

<!-- Google Maps scripts. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOWZyaWwxRQBQFs3f1Df3tHTVQ2RRWGNY&callback=initMap&libraries=places" async defer></script>

<script> // Script to initialize maps
var mapRennes, mapExeter;

function initMap () {
// POI LatLng (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  // The location of Exeter in England
  var mapZoomPosition = new google.maps.LatLng(50.698939,-3.505687);
  var Exeter = new google.maps.LatLng(<?php echo $geoVar[14]; ?>);
  var exeterCathedral = new google.maps.LatLng(<?php echo $geoVar[0]; ?>);
  var billDougCinema = new google.maps.LatLng(<?php echo $geoVar[1]; ?>);
  var stJames = new google.maps.LatLng(<?php echo $geoVar[2]; ?>);
  var powderhamCastle = new google.maps.LatLng(<?php echo $geoVar[3]; ?>);
  var raceWorld = new google.maps.LatLng(<?php echo $geoVar[4]; ?>);
  var undergroundPassage = new google.maps.LatLng(<?php echo $geoVar[5]; ?>);
  var haldonForest = new google.maps.LatLng(<?php echo $geoVar[6]; ?>);
// POI LatLng (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  // The location of Rennes in France
  var mapZoomPosition2 = new google.maps.LatLng(48.12131,-1.668885);
  var Rennes = new google.maps.LatLng(<?php echo $geoVar[15]; ?>);
  var stPierre = new google.maps.LatLng(<?php echo $geoVar[7]; ?>);
  var lesChamps = new google.maps.LatLng(<?php echo $geoVar[8]; ?>);
  var marcheDe = new google.maps.LatLng(<?php echo $geoVar[9]; ?>);
  var brainGame = new google.maps.LatLng(<?php echo $geoVar[10]; ?>);
  var eSpace = new google.maps.LatLng(<?php echo $geoVar[11]; ?>);
  var rennesTourist = new google.maps.LatLng(<?php echo $geoVar[12]; ?>);
  var adrenForest = new google.maps.LatLng(<?php echo $geoVar[13]; ?>);

// Map Markers (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  var stPierre_Marker = new google.maps.Marker({position: stPierre, url: "flickrAPI/stPierre_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"}});
  var lesChamps_Marker = new google.maps.Marker({position: lesChamps, url: "flickrAPI/lesChamps_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var marcheDe_Marker = new google.maps.Marker({position: marcheDe, url: "flickrAPI/marcheDe_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
  var brainGame_Marker = new google.maps.Marker({position: brainGame, url: "flickrAPI/brainGame_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var eSpace_Marker = new google.maps.Marker({position: eSpace, url: "flickrAPI/eSpace_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"}});
  var rennesTourist_Marker = new google.maps.Marker({position: rennesTourist, url: "flickrAPI/rennesTourist_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/purple-dot.png"}});
  var adrenForest_Marker = new google.maps.Marker({position: adrenForest, url: "flickrAPI/adrenForest_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
// Map Markers (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  var exeterCathedral_Marker = new google.maps.Marker({position: exeterCathedral, url: "flickrAPI/exeterCathedral_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"}});
  var billDougCinema_Marker = new google.maps.Marker({position: billDougCinema, url: "flickrAPI/billDoug_flickr.php",icon: {url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"}});
  var stJames_Marker = new google.maps.Marker({position: stJames, url: "flickrAPI/stJames_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var powderhamCastle_Marker = new google.maps.Marker({position: powderhamCastle, url: "flickrAPI/powderhamCastle_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"}});
  var raceWorld_Marker = new google.maps.Marker({position: raceWorld, url: "flickrAPI/raceWorld_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/purple-dot.png"}});
  var undergroundPassage_Marker = new google.maps.Marker({position: undergroundPassage, url: "flickrAPI/undergroundPassage_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
  var haldonForest_Marker = new google.maps.Marker({position: haldonForest, url: "flickrAPI/haldonForest_flickr.php", icon: {url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"}});

// InfoWindows (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  var exeterCathedral_Info = new google.maps.InfoWindow;
  exeterCathedral_Info.setMap(mapExeter);
  exeterCathedral_Info.setContent("<?php echo $poiVar[1]; ?>");

  var undergroundPassage_Info = new google.maps.InfoWindow
  undergroundPassage_Info.setMap(mapExeter);
  undergroundPassage_Info.setContent("<?php echo $poiVar[2]; ?>");

  var billDougCinema_Info = new google.maps.InfoWindow;
  billDougCinema_Info.setMap(mapExeter);
  billDougCinema_Info.setContent("<?php echo $poiVar[3]; ?>");

  var powderhamCastle_Info = new google.maps.InfoWindow;
  powderhamCastle_Info.setMap(mapExeter);
  powderhamCastle_Info.setContent("<?php echo $poiVar[4]; ?>");

  var raceWorld_Info = new google.maps.InfoWindow
  raceWorld_Info.setMap(mapExeter);
  raceWorld_Info.setContent("<?php echo $poiVar[5]; ?>");

  var haldonForest_Info = new google.maps.InfoWindow
  haldonForest_Info.setMap(mapExeter);
  haldonForest_Info.setContent("<?php echo $poiVar[6]; ?>");

  var stJames_Info = new google.maps.InfoWindow
  stJames_Info.setMap(mapExeter);
  stJames_Info.setContent("<?php echo $poiVar[7]; ?>");

// InfoWindows (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  var stPierre_Info = new google.maps.InfoWindow
  stPierre_Info.setMap(mapRennes);
  stPierre_Info.setContent("<?php echo $poiVar[8]; ?>");
  
  var lesChamps_Info = new google.maps.InfoWindow
  lesChamps_Info.setMap(mapRennes);
  lesChamps_Info.setContent("<?php echo $poiVar[9]; ?>");

  var marcheDe_Info = new google.maps.InfoWindow
  marcheDe_Info.setMap(mapRennes);
  marcheDe_Info.setContent("<?php echo $poiVar[10]; ?>");

  var brainGame_Info = new google.maps.InfoWindow
  brainGame_Info.setMap(mapRennes);
  brainGame_Info.setContent("<?php echo $poiVar[11]; ?>");

  var eSpace_Info = new google.maps.InfoWindow
  eSpace_Info.setMap(mapRennes);
  eSpace_Info.setContent("<?php echo $poiVar[12]; ?>");

  var rennesTourist_Info = new google.maps.InfoWindow
  rennesTourist_Info.setMap(mapRennes);
  rennesTourist_Info.setContent("<?php echo $poiVar[13]; ?>");

  var adrenForest_Info = new google.maps.InfoWindow
  adrenForest_Info.setMap(mapRennes);
  adrenForest_Info.setContent("<?php echo $poiVar[14]; ?>");

// Listeners (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  // Listen for Mouse Over, if true, show information window
  stJames_Marker.addListener('mouseover', function() {
    stJames_Info.open(mapExeter, this);
  });
  // Listen for Mouse Click, if true, load another page showing details (photos, description etc.)
  stJames_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  // Listen for Mouse Out, if true, close information window
  stJames_Marker.addListener('mouseout', function() {
    stJames_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  exeterCathedral_Marker.addListener('mouseover', function() {
    exeterCathedral_Info.open(mapExeter, this);
  });
  exeterCathedral_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  exeterCathedral_Marker.addListener('mouseout', function() {
      exeterCathedral_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  undergroundPassage_Marker.addListener('mouseover', function() {
      undergroundPassage_Info.open(mapExeter, this);
  });
  undergroundPassage_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  undergroundPassage_Marker.addListener('mouseout', function() {
      undergroundPassage_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
billDougCinema_Marker.addListener('mouseover', function() {
    billDougCinema_Info.open(mapExeter, this);
  });
  billDougCinema_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  billDougCinema_Marker.addListener('mouseout', function() {
    billDougCinema_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
haldonForest_Marker.addListener('mouseover', function() {
    haldonForest_Info.open(mapExeter, this);
  });
  haldonForest_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  haldonForest_Marker.addListener('mouseout', function() {
    haldonForest_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
raceWorld_Marker.addListener('mouseover', function() {
  raceWorld_Info.open(mapExeter, this);
  });
  raceWorld_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  raceWorld_Marker.addListener('mouseout', function() {
    raceWorld_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
powderhamCastle_Marker.addListener('mouseover', function() {
  powderhamCastle_Info.open(mapExeter, this);
  });
  powderhamCastle_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  powderhamCastle_Marker.addListener('mouseout', function() {
    powderhamCastle_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------

// Listeners (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  stPierre_Marker.addListener('mouseover', function() {
    stPierre_Info.open(mapRennes, this);
  });
  stPierre_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  stPierre_Marker.addListener('mouseout', function() {
    stPierre_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  lesChamps_Marker.addListener('mouseover', function() {
    lesChamps_Info.open(mapRennes, this);
  });
  lesChamps_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  lesChamps_Marker.addListener('mouseout', function() {
    lesChamps_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  marcheDe_Marker.addListener('mouseover', function() {
    marcheDe_Info.open(mapRennes, this);
  });
  marcheDe_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  marcheDe_Marker.addListener('mouseout', function() {
    marcheDe_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  brainGame_Marker.addListener('mouseover', function() {
  brainGame_Info.open(mapRennes, this);
  });
  brainGame_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  brainGame_Marker.addListener('mouseout', function() {
    brainGame_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  eSpace_Marker.addListener('mouseover', function() {
    eSpace_Info.open(mapRennes, this);
  });
  eSpace_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  eSpace_Marker.addListener('mouseout', function() {
    eSpace_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
rennesTourist_Marker.addListener('mouseover', function() {
  rennesTourist_Info.open(mapRennes, this);
  });
  rennesTourist_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  rennesTourist_Marker.addListener('mouseout', function() {
    rennesTourist_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  adrenForest_Marker.addListener('mouseover', function() {
    adrenForest_Info.open(mapRennes, this);
  });
  adrenForest_Marker.addListener('click', function() {
    window.location.href = this.url;
  });
  adrenForest_Marker.addListener('mouseout', function() {
    adrenForest_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------

// Map initialisation --------------------------------------------------------------------------------------------------------------------------------------------------
  var optionsExeter = {
    center: mapZoomPosition,
    zoom: 11.25
  };

  var optionsRennes = {
    center: mapZoomPosition2,
    zoom: 12.5
  };

  // Apply Options to Maps
  mapExeter = new google.maps.Map(document.getElementById('mapExeter'), optionsExeter);
  mapRennes = new google.maps.Map(document.getElementById('mapRennes'), optionsRennes);

// Set Markers (Exeter) --------------------------------------------------------------------------------------------------------------------------------------------------
  stJames_Marker.setMap(mapExeter);
  exeterCathedral_Marker.setMap(mapExeter);
  undergroundPassage_Marker.setMap(mapExeter);
  billDougCinema_Marker.setMap(mapExeter);
  powderhamCastle_Marker.setMap(mapExeter);
  raceWorld_Marker.setMap(mapExeter);
  haldonForest_Marker.setMap(mapExeter);

// Set Markers (Rennes) --------------------------------------------------------------------------------------------------------------------------------------------------
  stPierre_Marker.setMap(mapRennes);
  lesChamps_Marker.setMap(mapRennes);
  marcheDe_Marker.setMap(mapRennes);
  brainGame_Marker.setMap(mapRennes);
  eSpace_Marker.setMap(mapRennes);
  rennesTourist_Marker.setMap(mapRennes);
  adrenForest_Marker.setMap(mapRennes);

}
</script>

<!DOCTYPE html>
<html lang="en">

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
      <img src="images/exeterFootball.jfif" alt="Exeter Football Stadium" style="width: 650px; height: 325px"/>
    </header>
      <header>
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
      <img src="images/rennesCath.jpg" alt="Rennes Cathedral" style="width: 650px; height: 325px"/>
    </section>
      <section>
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
      </section>
        <section>
          <div id="mapRennes">
        </section>
  </div>
  
  <div class="wrapper">
  <!-- Footer -->
    <footer>Footer
      <div id="mapExeter"></div>
    </footer>
      <footer>
      </footer>
        <footer>
        </footer>
</body>


