<?php

function getPhotos($tag){

    $url = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=25db26606e8df5897e8d321c569efc04&tags='.$tag.'&format=json&nojsoncallback=1';

    $data = json_decode(file_get_contents($url));

    $photos = $data->photos->photo;
    foreach ($photos as $photo){
        $url = 'http://farm'.$photo->farm.'.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';
        echo '<img src="'.$url.'">';

    }
}
?>