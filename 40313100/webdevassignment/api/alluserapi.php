<?php
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

    include ("../dbConnect.php"); 

    $finduser= "SELECT `user`.`user_id`, `user`.`username`, `user`.`name`, `user`.`email`
    FROM `user`;";
        


$result = $conn -> query($finduser);

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