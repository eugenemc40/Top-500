<?php
//session_start();
//make api
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

 $userdetails="SELECT `user`.`user_id`, `user`.`username`, `user`.`name`, `user`.`email`
 FROM `user`";

$result = $conn -> query($userdetails);



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