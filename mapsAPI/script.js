var mapRennes, mapExeter;

function initMap () {
// POI LatLng (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  // The location of Exeter in England
  var Exeter = new google.maps.LatLng(50.718412, -3.533899);
  var stJames = new google.maps.LatLng(50.730736, -3.521068);
  var exeterCathedral = new google.maps.LatLng(50.722536, -3.529913);
  var climbingCenter = new google.maps.LatLng(50.716648, -3.530821);
// POI LatLng (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  // The location of Rennes in France
  var Rennes = new google.maps.LatLng(48.117266, -1.677793);
  var roazhon = new google.maps.LatLng(48.107488, -1.712866);
  var stPierre = new google.maps.LatLng(48.111646, -1.683279);
  var parcDuThabor = new google.maps.LatLng(48.114384, -1.669494);

// Map Markers (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  var roazhon_Marker = new google.maps.Marker({position: roazhon, icon: {url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"}});
  var stPierre_Marker = new google.maps.Marker({position: stPierre, icon: {url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"}});
  var parcDuThabor_Marker = new google.maps.Marker({position: parcDuThabor, icon: {url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"}});
// Map Markers (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  var stJames_Marker = new google.maps.Marker({position: stJames, icon: {url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"}});
  var exeterCathedral_Marker = new google.maps.Marker({position: exeterCathedral, icon: {url: "http://maps.google.com/mapfiles/ms/icons/orange-dot.png"}});
  var climbingCenter_Marker = new google.maps.Marker({position: climbingCenter, icon: {url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"}});

// InfoWindows (EXETER) --------------------------------------------------------------------------------------------------------------------------------------------------
  var stJames_Info = new google.maps.InfoWindow
  stJames_Info.setMap(mapExeter);
  // Content linking to database will be referenced here.
  stJames_Info.setContent("Name:" + "<br/>" + "Type:" + "<br/>" + "Capacity:" + "</br>" + "Address:" + "<br/>" + "Description:" + "<br/>" + "Link");
    
  var exeterCathedral_Info = new google.maps.InfoWindow
  exeterCathedral_Info.setMap(mapExeter);
  exeterCathedral_Info.setContent("Name:" + "<br/>" + "Type:" + "<br/>" + "Capacity:" + "</br>" + "Address:" + "<br/>" + "Description:" + "<br/>" + "Link");

  var climbingCenter_Info = new google.maps.InfoWindow
  climbingCenter_Info.setMap(mapExeter);
  climbingCenter_Info.setContent("Name:" + "<br/>" + "Type:" + "<br/>" + "Capacity:" + "</br>" + "Address:" + "<br/>" + "Description:" + "<br/>" + "Link");
// InfoWindows (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  var roazhon_Info = new google.maps.InfoWindow
  roazhon_Info.setMap(mapRennes);
  roazhon_Info.setContent("Name:" + "<br/>" + "Type:" + "<br/>" + "Capacity:" + "</br>" + "Address:" + "<br/>" + "Description:" + "<br/>" + "Link");

  var stPierre_Info = new google.maps.InfoWindow
  stPierre_Info.setMap(mapRennes);
  stPierre_Info.setContent("Name:" + "<br/>" + "Type:" + "<br/>" + "Capacity:" + "</br>" + "Address:" + "<br/>" + "Description:" + "<br/>" + "Link");

  var parcDuThabor_Info = new google.maps.InfoWindow
  parcDuThabor_Info.setMap(mapRennes);
  parcDuThabor_Info.setContent("Name:" + "<br/>" + "Type:" + "<br/>" + "Capacity:" + "</br>" + "Address:" + "<br/>" + "Description:" + "<br/>" + "Link");
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
  climbingCenter_Marker.addListener('mouseover', function() {
      climbingCenter_Info.open(mapExeter, this);
  });

  climbingCenter_Marker.addListener('click', function() {
    // CODE HERE
  });

  climbingCenter_Marker.addListener('mouseout', function() {
      climbingCenter_Info.close(mapExeter, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------

// Listeners (RENNES) --------------------------------------------------------------------------------------------------------------------------------------------------
  roazhon_Marker.addListener('mouseover', function() {
    roazhon_Info.open(mapRennes, this);
  });

  roazhon_Marker.addListener('click', function() {
    // CODE HERE
  });

  roazhon_Marker.addListener('mouseout', function() {
    roazhon_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------
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
  parcDuThabor_Marker.addListener('mouseover', function() {
    parcDuThabor_Info.open(mapRennes, this);
  });

  parcDuThabor_Marker.addListener('click', function() {
    // CODE HERE
  });

  parcDuThabor_Marker.addListener('mouseout', function() {
    parcDuThabor_Info.close(mapRennes, this);
  });
// --------------------------------------------------------------------------------------------------------------------------------------------------

// Map initialisation --------------------------------------------------------------------------------------------------------------------------------------------------
  var optionsExeter = {
    center: Exeter,
    zoom: 12.75
  };

  var optionsRennes = {
    center: Rennes,
    zoom: 12
  };

  // Apply Options to Maps
  mapExeter = new google.maps.Map(document.getElementById('mapRennes'), optionsExeter);
  mapRennes = new google.maps.Map(document.getElementById('mapExeter'), optionsRennes);

// Set Markers (Exeter) --------------------------------------------------------------------------------------------------------------------------------------------------
  stJames_Marker.setMap(mapExeter);
  exeterCathedral_Marker.setMap(mapExeter);
  climbingCenter_Marker.setMap(mapExeter);
// Set Markers (Rennes) --------------------------------------------------------------------------------------------------------------------------------------------------
  roazhon_Marker.setMap(mapRennes);
  stPierre_Marker.setMap(mapRennes);
  parcDuThabor_Marker.setMap(mapRennes);
}
