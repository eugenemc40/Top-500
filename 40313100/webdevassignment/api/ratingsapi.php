<?php
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

$ratequery="SELECT reviews.album_id, reviews.ratings
FROM `reviews`";


    $result = $conn -> query($ratequery);



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