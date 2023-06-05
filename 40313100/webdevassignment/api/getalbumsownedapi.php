<?php
//session_start();
//make api
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){


$user="";
$getowned ="SELECT `album`.*, `albums_owned`.`user_id`, `albums_owned`.`album_id`, `albums_owned`.`albums_owned_id`
FROM `album` 
	LEFT JOIN `albums_owned` ON `albums_owned`.`album_id` = `album`.`album_id`";

$result = $conn -> query($getowned);



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