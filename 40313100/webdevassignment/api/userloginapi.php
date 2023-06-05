<?php
//session_start();
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php");
       
$username="";
$password="";

 $userlog= "SELECT `user`.`user_id`, `user`.`name`, `user`.`adminpriv`, `user`.`password`
 FROM `user`";

$result = $conn -> query($userlog);



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