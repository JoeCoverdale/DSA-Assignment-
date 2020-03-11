<?php
  // Select all rows from places_of_interest table
  $sql1 = "SELECT * FROM `places_of_interest` ORDER BY `places_of_interest`.`id` ASC;";
  $result1 = mysqli_query($conn, $sql1);
  $resultCheck1 = mysqli_num_rows($result1); 

  if ($resultCheck1 > 0) {
    while ($row1[] = mysqli_fetch_assoc($result1)){
      for($c = 0; $c <= 14; $c++) {
        $poiVar[$c] = ("<b>Name: </b> " . @$row1[$c]['Name_of_place'] . "<br>". 
                        "<b>Type</b>: " . @$row1[$c]['Type_of_place'] . "<br>".
                        "<b>Capacity: </b> " . @$row1[$c]['capacity'] . "<br>" .
                        "<b>Address: </b> " . @$row1[$c]['Address'] . "<br>".
                        "<b>Contact Number: </b> " . @$row1[$c]['Contact_Number'] . "<br>".
                        "<b>Social Media: </b> " . @$row1[$c]['Social_Media'] . "<br>".
                        "<b>Wikipedia: </b> " . @$row1[$c]['WP_Link'] . "<br>");
      }
    } 
  }

  //   for ($k=0; $k <= 14; $k++){
  //     echo $k . "<br>";
  //     echo $poiVar[$k];
  //     echo "<br>";
  // }
?>
