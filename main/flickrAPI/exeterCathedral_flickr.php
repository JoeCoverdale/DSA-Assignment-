<?php
require 'getPhoto.php';
require_once("../data/config.php");
require_once("../data/getPlacesOfInterest.php");

echo $poiVar[1];
getPhotos("the+cloisters");

?>