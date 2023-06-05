<?php


function showuserdetails ($user) {

    $endpoint= "http://localhost/webdevassignment/api/getuserdetailsapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 
 foreach($data as $row){
     if($user==$row["user_id"]){
       $uname= $row["username"];
       $name= $row["name"];
        $email=$row["email"];
    
     echo
                    '<div><h1>User Details</h1></div>
                    <h3>Username: '$uname'</h3>
					          <h3>Name:' $name'</h3>
					          <h3>Email: '$email'</h3>';
    }
    }
}



?>