<?php



  //Display XML Format
  header('Content-type: text/xml');
  //Connect to DB
  $conn = mysqli_connect('localhost','root','','twincities');
  

  //Initiate RSS feed
  echo "<?xml version='1.0' encoding='ISO-8859-1'?>";
  echo "<rss version='2.0'>";
  echo "<channel>";

  //RSS Feed for 'city' db
    echo "<title> RSS FEED CITY </title>";
  //SQL Query
  $citysql = "SELECT * FROM city ORDER BY name DESC;";
  $query = mysqli_query($conn,$citysql);

  //Loop through array to print the data into xml format
  while($row = mysqli_fetch_array($query)){
    echo "<item xmlns:dc='ns:1'>" . PHP_EOL;
    echo "<Name>".$row["Name"]."</Name>". PHP_EOL;
    echo "<Country>".$row["Country"]."</Country>". PHP_EOL;
    echo "<CountyProvince>".$row["CountyProvince"]."</CountyProvince>". PHP_EOL;
    echo "<Population>".$row["Population"]."</Population>". PHP_EOL;
    echo "<Currency>".$row["Currency"]."</Currency>". PHP_EOL;
    echo "<Language>".$row["Language"]."</Language>". PHP_EOL;
    echo "<Timezone>".$row["Timezone"]."</Timezone>". PHP_EOL;
    echo "</item>". PHP_EOL;
  }
    echo "<title> RSS FEED POI</title>";
  //RSS Feed for 'places_of_interest' db
  //SQL Query
    $poisql = "SELECT * FROM places_of_interest ORDER BY id DESC;";
    $query = mysqli_query($conn,$poisql);

  //Loop through array to print the data into xml format
  while($row = mysqli_fetch_array($query)){
    echo "<item xmlns:dc='ns:1'>". PHP_EOL;
	echo "<NameofPlace>".$row["NameofPlace"]."</NameofPlace>". PHP_EOL;
    echo "<TypeofPlace>".$row["TypeofPlace"]."</TypeofPlace>". PHP_EOL;
    echo "<capacity>".$row["capacity"]."</capacity>". PHP_EOL;
    echo "<Address>".$row["Address"]."</Address>". PHP_EOL;
    echo "<Description>".$row["Description"]."</Description>". PHP_EOL;
	echo "<WPLink>".$row["WPLink"]."</WPLink>". PHP_EOL;
	echo "<contactNumber>".$row["contactNumber"]."</contactNumber>". PHP_EOL;
	echo "<socialMedia>".$row["socialMedia"]."</socialMedia>". PHP_EOL;
    echo "</item>";
 }

//SQL Query
 $commentsql = "SELECT * FROM comments ORDER BY user_id DESC;";
 $query = mysqli_query($conn,$commentsql);

   //Loop through array to print the data into xml format
 while($row = mysqli_fetch_array($query)){
    $commentDateTime = date("D, d M Y H:i:s T", strtotime($row["DateTime"])); # Date and time format function.

    echo "<item xmlns:dc='ns:1'>". PHP_EOL;
    echo "<userName>".$row["userName"]."</userName>". PHP_EOL;
    echo "<DateTime>".$commentDateTime."</DateTime>". PHP_EOL;
    echo "<Comment>".$row["Comment"]."</Comment>". PHP_EOL;
    echo "</item>";
    }

//SQL Query
    $geosql = "SELECT * FROM geo_location ORDER BY geoid DESC;";
    $query = mysqli_query($conn,$geosql);
  //Loop through array to print the data into xml format
    while($row = mysqli_fetch_array($query)){
    
        echo "<item xmlns:dc='ns:1'>". PHP_EOL;
        echo "<geoid>".$row["geoid"]."</geoid>". PHP_EOL;
        echo "<Longitude>".$row["Longitude"]."</Longitude>". PHP_EOL;
        echo "<Latitude>".$row["Latitude"]."</Latitude>". PHP_EOL;
        echo "</item>";
        }


    echo "</channel>";
    echo "</rss>";



        /*Images RSS feed was removed as is now a redundant part of our system.*/


?>