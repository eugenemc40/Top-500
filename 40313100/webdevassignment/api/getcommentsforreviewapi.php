<?php
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php"); 


$findquery ="SELECT `user`.`username`, `reviews`.`review_id`, `reviews`.`comments`, `reviews`.`approved`
FROM `user` 
	LEFT JOIN `reviews` ON `reviews`.`user_id` = `user`.`user_id`
WHERE `reviews`.`approved` = '0'";


$result = $conn -> query($findquery);

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