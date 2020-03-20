<?php
include_once ('data/config.php');
function setComments($conn){
    if (isset($_POST['commentSubmit'])){
        $User_Name = $_POST['User_Name'];
        $DateTime = $_POST['DateTime'];
        $Comment = $_POST['Comment'];

        $sql = "INSERT INTO comments (User_Name, DateTime, Comment) 
        VALUES ('$userName', '$DateTime', '$Comment')";

        $result = $conn->query($sql);
    }
}
function postComments($conn){
    $sqlQuery = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sqlQuery);
    $resultCheck = mysqli_fetch_assoc($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['userName'] . "<br>";
            echo $row['DateTime'] . "<br>";
            echo $row['Comment'] . "<br>";
            
        }
    }
}
// comment page is ugly and minimal 
// still got work to do


?>