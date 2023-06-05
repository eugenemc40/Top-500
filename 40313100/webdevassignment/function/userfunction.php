<?php
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='POST'){

            include("dbConnect.php");


$insert= "INSERT INTO `user` (`user_id`, `user_name`, `name`, `email`, `password`) 
            VALUES(null,'$username','$fullname','$email', '$password'";

$insert = $conn -> query($filterquery);

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