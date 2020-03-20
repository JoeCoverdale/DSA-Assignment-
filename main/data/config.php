<?php

// $conn = mysqli_connect('mysql5', 'fet18040195', '1ZplC3', 'fet18040195');
$conn = mysqli_connect('localhost', 'root', '', 'fet18040195');
$flickr_key = '25db26606e8df5897e8d321c569efc04';

if($conn){
    echo ("Connection Made. <br>");
}else{
    echo ("Connection not Possible.");
}

?>