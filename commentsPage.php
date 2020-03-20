<?php
    date_default_timezone_set('Europe/London');
    include_once 'dbComments.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" media="screen" title="comments" charset="utf-8">
    <meta charset="utf-8">
        <title>Comment about TwinCities.</title>
  </head>
  <body>

  <div class = "commentForm">
  <?php
        echo "
        <form method='POST' action='".setComments($conn)."'>
        <label for='User_Name'>Name:</label> <br>
        <input id = 'rcornerName' type = 'text' name ='User_Name'><br>
        <input type = 'hidden' name ='DateTime' value='".date('Y-m-d H:i:s')."'>
        <label for='Comment'>Your Comment::</label> <br>
        <input ' type = 'hidden' name ='Comment'>
        <textarea id ='rcornerComment' name='Comment'></textarea><br>
        <button type = 'submit' name = 'commentSubmit'>Comment</button>
        </form>
        ";
    ?>
    </div>


  <div class = "comments">
  <?php
    postComments($conn);
  ?>
  </div>

  <div class = "bothFeeds">
    <div class = ExeterFeed>
      <iframe class = "leftFrame" src="../test/ExeterTwitterAPI.php?city=Exeter" width="100%" height="25%" frameborder="0" textalign="left"></iframe>
  </div>

    <div class = "RennesFeed">
      <iframe class = "righFrame" src="../test/RennesTwitterAPI.php?city=Rennes" width="100%" height="25%" frameborder="0"></iframe>
  </div>
</div>

  </body>
</html>