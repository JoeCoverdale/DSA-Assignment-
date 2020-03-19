<!DOCTYPE html>
<?php

$connect = new PDO("mysql:host=localhost;dbname=", "","");
$query = "SELECT * FROM tbl_(tableName) ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
header("Content-Type; text/xml;charset=iso-8859-1");
$base_url = " ";
echo "<?xml version='1.0' encoding='UTF-8'?>". PHP_EOL;
echo "<rss version='2.0'".PHP_EOL;
echo "<channel>" . PHP_EOL;
echo "<title>Feed Title | RSS</title>" . PHP_EOL;
echo "<link" .$base_url."index.php</link>". PHP_EOL;
echo "<decription>Cloud RSS</description>" . PHP_EOL;
echo "<language>en-us</language>" . PHP_EOL;

foreach($result as $row)
{
    echo "<item xmlns:dc='ns:1'" . PHP_EOL;
    echo "<title>".$row["post_title"]."</title>" . PHP_EOL;
    echo "<link>".$base_url."blog/".$row["post_url"]."</link>". PHP_EOL
}


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contents="IE=edge">
    <title>Sister Cities</title>     
    <meta name="assignment" contents="">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rss.css">
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

    <u><h2 class="page-header">RSS Feed</h2></u>

    <div class="exeterHead">
    <h2>Exeter RSS Feed</h2>
    </div>

    <div class="exeterRssContainer" width="600px">
    <?xml version="1.0" encoding="ISO-8859-1"?>
    <rss version="2.0">
        <channel>
            <title>exeterRssFeed</title>
            <link>
    </div>

    <div class="rennesHead">
    <h2>Rennes RSS Feed</h2>
    </div>

    <div class="rennesRssContainer">
    <p>put rss here</p>
    </div>

</body>
</html>