<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Geolocated tweets.</title>
      <link rel="stylesheet" href="style.css" media="screen" title="RennesComments" charset="utf-8">
  </head>
  <body>
    
        <?php
        date_default_timezone_set('Europe/Paris');

            echo"<h1> Rennes Tweeter Feed.</h1>";

           //Based on code by James Mallison, see https://github.com/J7mbo/twitter-api-php
           ini_set('display_errors', 1);
           require_once('TwitterAPIExchange.php');

           header('Content-Type: text/html; charset="UTF-8"');
           include_once ('data/config.php');
        

           
           /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
            $settings = array(
            'oauth_access_token' => "1226478422442070016-cB9Zc57kw0L29xiNAxUMVijDi294lC",
            'oauth_access_token_secret' => "ecpH5mP5PN42j3K2nugnqo19XdNZgXliWwqEiiRJlFxWb",
            'consumer_key' => "IIS2ozTbsrXP61Iuik5gkpHza",
            'consumer_secret' => "lRo9PyL2rIpVLHhqN03HSwhkGbdVbCa8EndFZQ11JwNDgBs23T"
            );

           /** Perform a GET request and echo the response **/
           /** Note: Set the GET field BEFORE calling buildOauth(); **/
           $url = 'https://api.twitter.com/1.1/search/tweets.json';
            $getfield = '?q=%23Rennes%20or%20%23rennes%20or%20%27Rennes%27%20or%20%27rennes%27';    # Rennes
           $requestMethod = 'GET';
           $twitter = new TwitterAPIExchange($settings);
           $data=$twitter->setGetfield($getfield)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();
            
        
           //Use this to look at the raw JSON
           //echo($data);

           // Read the JSON into a PHP object
           $phpdata = json_decode($data, true);

           // Debug - check the PHP object
           //var_dump($phpdata);
           

           

             //Loop through the status updates and print out the text of each
             foreach ($phpdata["statuses"] as $status){
                echo "<div class='tweet'>";
                echo "<div>";
                echo("<img src=\"{$status["user"]["profile_image_url"]}\"/>");
                echo("<h3>" . $status["user"]["name"] . "</h3>");
                echo "</div>";
                echo("<p>" . $status["text"] . "</p>");
                echo("<p>Date: " . $status["created_at"] . "</p>");
                echo "</div>";



                
            }?>
  </body>
</html>