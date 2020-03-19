<?php
    require 'data/config.php';
    require 'data/getLocation.php';
    require 'data/getPlacesOfInterest.php';
    require 'data/getWeather.php';

    // works here but breaks when it is put within an infowindow
    // echo $poiVar[0];
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
  var stPierre_Marker = new google.maps.Marker({position: stPierre, icon: {url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"}});
  var lesChamps_Marker = new google.maps.Marker({position: lesChamps, icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var marcheDe_Marker = new google.maps.Marker({position: marcheDe, icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
  var brainGame_Marker = new google.maps.Marker({position: brainGame, icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var eSpace_Marker = new google.maps.Marker({position: eSpace, icon: {url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"}});
  var rennesTourist_Marker = new google.maps.Marker({position: rennesTourist, icon: {url: "http://maps.google.com/mapfiles/ms/icons/purple-dot.png"}});
  var adrenForest_Marker = new google.maps.Marker({position: adrenForest, icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
// Map Markers (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  var exeterCathedral_Marker = new google.maps.Marker({position: exeterCathedral, icon: {url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"}});
  var billDougCinema_Marker = new google.maps.Marker({position: billDougCinema, icon: {url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"}});
  var stJames_Marker = new google.maps.Marker({position: stJames, icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var powderhamCastle_Marker = new google.maps.Marker({position: powderhamCastle, icon: {url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"}});
  var raceWorld_Marker = new google.maps.Marker({position: raceWorld, icon: {url: "http://maps.google.com/mapfiles/ms/icons/purple-dot.png"}});
  var undergroundPassage_Marker = new google.maps.Marker({position: undergroundPassage, icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
  var haldonForest_Marker = new google.maps.Marker({position: haldonForest, icon: {url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"}});

// InfoWindows (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  var stJames_Info = new google.maps.InfoWindow
  stJames_Info.setMap(mapExeter);
  stJames_Info.setContent("<?php echo $poiVar[7]; ?>");

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
    // CODE HERE
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
    // CODE HERE
  });
  exeterCathedral_Marker.addListener('mouseout', function() {
      exeterCathedral_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  undergroundPassage_Marker.addListener('mouseover', function() {
      undergroundPassage_Info.open(mapExeter, this);
  });
  undergroundPassage_Marker.addListener('click', function() {
    // CODE HERE
  });
  undergroundPassage_Marker.addListener('mouseout', function() {
      undergroundPassage_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
billDougCinema_Marker.addListener('mouseover', function() {
    billDougCinema_Info.open(mapExeter, this);
  });
  billDougCinema_Marker.addListener('click', function() {
    // CODE HERE
  });
  billDougCinema_Marker.addListener('mouseout', function() {
    billDougCinema_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
haldonForest_Marker.addListener('mouseover', function() {
    haldonForest_Info.open(mapExeter, this);
  });
  haldonForest_Marker.addListener('click', function() {
    // CODE HERE
  });
  haldonForest_Marker.addListener('mouseout', function() {
    haldonForest_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
raceWorld_Marker.addListener('mouseover', function() {
  raceWorld_Info.open(mapExeter, this);
  });
  raceWorld_Marker.addListener('click', function() {
    // CODE HERE
  });
  raceWorld_Marker.addListener('mouseout', function() {
    raceWorld_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
powderhamCastle_Marker.addListener('mouseover', function() {
  powderhamCastle_Info.open(mapExeter, this);
  });
  powderhamCastle_Marker.addListener('click', function() {
    // CODE HERE
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
    // CODE HERE
  });
  stPierre_Marker.addListener('mouseout', function() {
    stPierre_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  lesChamps_Marker.addListener('mouseover', function() {
    lesChamps_Info.open(mapRennes, this);
  });
  lesChamps_Marker.addListener('click', function() {
    // CODE HERE
  });
  lesChamps_Marker.addListener('mouseout', function() {
    lesChamps_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  marcheDe_Marker.addListener('mouseover', function() {
    marcheDe_Info.open(mapRennes, this);
  });
  marcheDe_Marker.addListener('click', function() {
    // CODE HERE
  });
  marcheDe_Marker.addListener('mouseout', function() {
    marcheDe_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  brainGame_Marker.addListener('mouseover', function() {
  brainGame_Info.open(mapRennes, this);
  });
  brainGame_Marker.addListener('click', function() {
    // CODE HERE
  });
  brainGame_Marker.addListener('mouseout', function() {
    brainGame_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  eSpace_Marker.addListener('mouseover', function() {
    eSpace_Info.open(mapRennes, this);
  });
  eSpace_Marker.addListener('click', function() {
    // CODE HERE
  });
  eSpace_Marker.addListener('mouseout', function() {
    eSpace_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
rennesTourist_Marker.addListener('mouseover', function() {
  rennesTourist_Info.open(mapRennes, this);
  });
  rennesTourist_Marker.addListener('click', function() {
    // CODE HERE
  });
  rennesTourist_Marker.addListener('mouseout', function() {
    rennesTourist_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
  adrenForest_Marker.addListener('mouseover', function() {
    adrenForest_Info.open(mapRennes, this);
  });
  adrenForest_Marker.addListener('click', function() {
    // CODE HERE
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
  mapExeter = new google.maps.Map(document.getElementById('mapRennes'), optionsExeter);
  mapRennes = new google.maps.Map(document.getElementById('mapExeter'), optionsRennes);

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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <title>Sister Cities</title>     
    <meta name="assignment" contents="">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="map.css">
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

    <div class="exeterText">
          <h2>Exeter Map</h2>
    </div>

    <div class="exeterMap">
      <script src="scripts.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOWZyaWwxRQBQFs3f1Df3tHTVQ2RRWGNY&callback=initMap&libraries=places" async defer></script>
      </section>
    </div>

    <div class="rennesText">
      <h2>Rennes Map</h2>
    </div>

    <div class="rennesMap">
          <section>
            <script src="scripts.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOWZyaWwxRQBQFs3f1Df3tHTVQ2RRWGNY&callback=initMap&libraries=places" async defer></script>
          </section>
        </div>
        

</body>
</html>