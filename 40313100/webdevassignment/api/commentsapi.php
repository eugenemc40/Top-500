<?php
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php");

$showcomments="SELECT 'user.user_id', 'user.username', 'reviews.album_id', 'reviews.comments' 
FROM 'user' 
LEFT JOIN 'reviews' ON 'reviews.user_id' = 'user.user_id'";

$result = $conn -> query($showcomments);

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