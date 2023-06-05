<?php
session_start();
include ("../dbConnect.php");

$querynav="SELECT  `user`.`user_id`, `user`.`adminpriv` FROM `user`;";

$result = $conn -> query($querynav);



    if(!$result) {
        echo $conn->error;
        }
    
        $api_response= array();
    
      
        while ($row = $result->fetch_assoc()){
            array_push($api_response, $row);
    
        }
            $response = json_encode($api_response);
    
    
            echo $response;
    