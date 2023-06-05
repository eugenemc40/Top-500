<?php
//session_start();
//make api
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){


$user="";
$getfav ="SELECT `album`.`thumbnail`, `fav_album`.`fav_album_id`, `fav_album`.`album_id`, `fav_album`.`user_id` 
FROM `album` LEFT JOIN `fav_album` ON `fav_album`.`album_id` = `album`.`album_id`";

$result = $conn -> query($getfav);



if(!$result) {
    echo $conn->error;
    }

    $api_response= array();

  
    while ($row = $result->fetch_assoc()){
        array_push($api_response, $row);

    }
        $response = json_encode($api_response);


        echo $response;


}

?>