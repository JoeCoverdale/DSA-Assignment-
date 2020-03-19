<?php
  // Select all rows from geo_location table
  $sql = "SELECT * FROM geo_location;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result); 

  if ($resultCheck > 0) {
    while ($row[] = mysqli_fetch_assoc($result)){
      for($i = 0; $i <= 15; $i++) {
        $geoVar[$i] = (@$row[$i]['Latitude'] . ", " . @$row[$i]['Longitude']);
      }
    } 
  }

  // for ($k=0; $k <= 15; $k++){
  //   echo $k . "<br>";
  //   echo $geoVar[$k];
  //   echo "<br>";
  // }
?>